<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Task;
use App\Models\TaskOffer;
use App\Models\TaskOrder;
use App\Models\TaskOrderTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Session;
use Exception;
use DB;
use Illuminate\Support\Facades\Auth;
use Stripe;

class PaymentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($offerId, $taskId)
    {   
        $serviceCategoryId = Task::select('service_category_id')->where('id', $taskId)->first();

        // Remove all session about coupon
        session()->forget(['promo_code_id','promo_amount','grandTotalPromo']);
        
        if($serviceCategoryId->service_category_id == 1){ 

            try {
                $data = [];
            
                $data['data'] = TaskOffer::with(['task', 'task.products'])
                        ->where([
                            ['id', $offerId],
                            ['task_id', $taskId]
                        ])->first();
                
                $data['service_fee'] = 4;

                $data['service_fee_amount'] = ceil(($data['data']->task->total_cost/100) * $data['service_fee']);

                $data['grand_total'] = ($data['data']['task']['total_cost'] + $data['service_fee_amount']  + $data['data']['amount']);

                session(['service_fee_amount'         => $data['service_fee_amount']]);
                session(['total_cost'         => $data['data']->task->total_cost ]);
                session(['grand_total'         => $data['grand_total'] ]);

                return view('user.payment.shop_n_drop', $data);
            } catch (Exception $e) {
                Log::info($e->getMessage());

                return abort(404, 'Page not found.');
                // return abort(403, 'Unauthorized action.');
            }
        }else {
            

            try {
                $data = [];
            
                $data['data'] = TaskOffer::with(['task'])
                        ->where([
                            ['id', $offerId],
                            ['task_id', $taskId]
                        ])->first();
                
                $data['service_fee'] = 4;

                $data['service_fee_amount'] = ceil(($data['data']->task->total_cost/100) * $data['service_fee']);

                $data['grand_total'] = ($data['data']['task']['total_cost'] + $data['service_fee_amount']  + $data['data']['amount']);

                session(['service_fee_amount' => $data['service_fee_amount']]);
                session(['total_cost'         => $data['data']->task->total_cost ]);
                session(['grand_total'         => $data['grand_total'] ]);
                
        
                return view('user.payment.collect_n_mover_payment', $data);
            } catch (Exception $e) {
                Log::info($e->getMessage());

                return abort(404, $e->getMessage());
                // return abort(403, 'Unauthorized action.');
            }
        }

    }

    /**
     *  Apply Coupon by using promo code
     */

    public function applyCoupon($couponCode){

        try {

            $coupon = Coupon::where('promo_code', $couponCode);

            if (!$coupon->exists()) {
                return response()->json(['status'=> false,'msg' => 'Invalid promo code.']);  
            }

            // Auth User
            $user = Auth::user();
            $checkApplied = $user->whereHas('appliedCoupons', function($c) use($couponCode){
                $c->where('promo_code', $couponCode);
            });


            if ($checkApplied->exists()) {
                return response()->json(['status'=> false,'msg' => 'This code already used.']);  
            }

            $validCoupon = $coupon->where('started_at', '<=', now())
                ->where('expired_at', '>=', now())
                ->first();

            if($validCoupon){
                
                $promo_amount = ceil((session('total_cost')/100) * $validCoupon->discount_percentage);
                
                session(['promo_code_id' => $validCoupon->id ]);
                session(['promo_amount' => $promo_amount]);

                $grandTotalPromo = session('grand_total') - $promo_amount ;

                session(['grandTotalPromo'         => $grandTotalPromo ]);

                return response()->json([
                    'status'       => true,
                    'data' => [
                        'promo_code'        => $validCoupon->promo_code,
                        'promo_amount'      => $promo_amount,
                        'grandTotalPromo'   => $grandTotalPromo
                    ]
                ]);  
            }
            
            return response()->json(['status'=> false,'msg' => 'Promo code is expired.']);  
             
        } catch (Exception $e) {
            Log::info($e->getMessage());

            return response()->json(['status'=> false,'msg' => $e->getMessage()]);  
        }
    }

     /**
     *  Stripe Checkout
     *
     */
    public function checkOutProcess(Request $request, $offerId, $taskId)
    {   
        // we just need Stripe token
        // {
        //     "_token": "w31msyGAQOWbsdClnn1O6fo0KxsB2a0JNWI7Dh9n",
        //     "stripeToken": "tok_1J0r7bKFiujq1hZX8FCrRSyk"
        // }

        $amount = session('grandTotalPromo') ?? session('grand_total');

        $final_amount   = $amount  * 100;
        $currency       = 'usd';

        DB::beginTransaction();

        try {
            

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $charge = Stripe\Charge::create ([
                    "amount" => $final_amount,
                    "currency" => $currency,
                    "source" => $request->stripeToken,
                    "description" => "This payment is testing purpose of Pendu Service",
            ]);

            
            if($charge['status'] == "succeeded" &&  $charge['paid'] == true){


                // Safe Task Order
                $taskOrder = new TaskOrder();

                $taskOrder->order_id	    = rand(100000000,999999999);
                $taskOrder->task_id	        = $taskId;
                $taskOrder->task_offer_id	= $offerId;
                $taskOrder->coupon_id	    = session('promo_code_id') ?? null;
                $taskOrder->payment_method_id = 1;  // stripe
                $taskOrder->service_fee     = session('service_fee_amount');
                $taskOrder->promo_amount    = session('promo_amount') ?? null;
                $taskOrder->grand_total     = $amount;
                $taskOrder->user_id         = $request->user()->id;

                $taskOrder->save();

                $orderTransaction =new TaskOrderTransaction( [
                    "tran_id"   => $charge['id'],
                    "amount"    => $charge['amount'],
                    "currency"  => $charge['currency'],
                    "balance_transaction"  => $charge['balance_transaction'],
                    "description"  => $charge['description'],

                    "card_id"  => $charge['source']['id'],
                    "card_brand"  => $charge['source']['brand'],
                    "card_exp_month"  => $charge['source']['exp_month'],
                    "card_exp_year"  => $charge['source']['exp_year'],
                    "card_last4"  => $charge['source']['last4'],
                    "country"  => $charge['source']['country'],
                    "receipt_url"  => $charge['receipt_url']
                ]);

                $taskOrder->transaction()->save($orderTransaction);

                // Add balance to user account
                $user = Auth::user();
                
                // $user->balance = 

                $user->update([
                    'balance' => $user->balance + $amount
                ]);

                $user->appliedCoupons()->attach(session('promo_code_id'));

                $task = Task::findOrFail($taskId);
                $task->update([
                    'request_status' => Task::REQUEST_ACCEPTED,
                    'offer_id' => $offerId
                ]);

                DB::commit();
                
                Session::flash('payment-success', 'Payment is done successfully.'); 
                return redirect()->route('user.dashboard');
            }
            
            DB::rollBack();
            Session::flash('error', 'Payment failed. Please try again.'); 
            
            return redirect()->back();
            
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            session()->flash('error', 'Invalid card details');
            // return $e->getMessage();
            return redirect()->back();
        }
    }
}
