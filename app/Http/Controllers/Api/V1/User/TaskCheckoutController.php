<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\ApiController;
use App\Models\Coupon;
use App\Models\Task;
use App\Models\TaskOffer;
use App\Models\TaskOrderReview;
use App\Models\TaskOrderTip;
use App\Repositories\TaskOrderRepository;
use Illuminate\Http\Request;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;
use App\Models\TaskOrder;
use App\Models\TaskOrderTransaction;
use Session;
use Illuminate\Support\Facades\Auth;
use Stripe;


class TaskCheckoutController extends ApiController
{
    public function __construct() {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($taskId, $offerId)
    {   
        $serviceCategoryId = Task::select('service_category_id')->where('id', $taskId)->first();

        // // Remove all session about coupon
        // session()->forget(['promo_code_id','promo_amount','grandTotalPromo']);
        
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

                // session(['service_fee_amount'         => $data['service_fee_amount']]);
                // session(['total_cost'         => $data['data']->task->total_cost ]);
                // session(['grand_total'         => $data['grand_total'] ]);

                return $this->respondWithSuccess(
                    'Offer and task details retrieved.',
                    $data
                );

            } catch (Exception $e) {
                Log::info($e->getMessage());
                return $this->respondWithSuccess(
                    'This offer doesn\'t belong to the task.',
                    []
                );
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

                // session(['service_fee_amount' => $data['service_fee_amount']]);
                // session(['total_cost'         => $data['data']->task->total_cost ]);
                // session(['grand_total'         => $data['grand_total'] ]);
                
        
                return $this->respondWithSuccess(
                    'Offer and task details retrieved.',
                    $data
                );

            } catch (Exception $e) {
                Log::info($e->getMessage());
                return $this->respondWithSuccess(
                    'This offer doesn\'t belong to the task.',
                    []
                );
            }
        }

    }


    public function applyCoupon($couponCode){
   
        try {

            $coupon = Coupon::where('promo_code', $couponCode);

            if (!$coupon->exists()) {

                return $this->respondWithError(
                    'Invalid promo code.',
                    [], 422
                );
            }

            // Auth User
            $user = Auth::user();
            $checkApplied = $user->whereHas('appliedCoupons', function($c) use($couponCode){
                $c->where('promo_code', $couponCode);
            });


            if ($checkApplied->exists()) {
                return $this->respondWithError(
                    'This code already used.',
                    [], 422
                );
            }

            $validCoupon = $coupon->where('started_at', '<=', now())
                ->where('expired_at', '>=', now())
                ->first();

            if($validCoupon){
                
                // $promo_amount = ceil((session('total_cost')/100) * $validCoupon->discount_percentage);
                
                // session(['promo_code_id' => $validCoupon->id ]);
                // session(['promo_amount' => $promo_amount]);

                // $grandTotalPromo = session('grand_total') - $promo_amount ;

                // session(['grandTotalPromo'         => $grandTotalPromo ]);


                $data = [];
                $data['promo_id']             = $validCoupon->id;
                $data['promo_code']           = $validCoupon->promo_code;
                $data['discount_percentage']  = $validCoupon->discount_percentage;


                return $this->respondWithSuccess(
                    'Coupon details retrieved.',
                    $data
                ); 
            }


            return $this->respondWithError(
                'Promo code is expired.'
                [], 422
            );
             
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return $this->respondWithError(
                'Something is wrong. Try again.',
                [],
                500
            );
        }
    }

    /**
     *  Stripe Checkout
     *
     */
    public function checkOutProcess(Request $request, $taskId, $offerId)
    {   
        // we just need Stripe token
        // {
        //     "_token": "w31msyGAQOWbsdClnn1O6fo0KxsB2a0JNWI7Dh9n",
        //     "stripeToken": "tok_1J0r7bKFiujq1hZX8FCrRSyk"
        // }

        $amount = $request->grand_total;

        $final_amount   = $amount  * 100;
        $currency       = 'usd';

        DB::beginTransaction();

        try {
            
            // Checkout
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $charge = Stripe\Charge::create ([
                    "amount" => $final_amount,
                    "currency" => $currency,
                    "source" => $request->stripe_token,
                    "description" => "This payment is testing purpose of Pendu Service",
            ]);

            
            if($charge['status'] == "succeeded" &&  $charge['paid'] == true){


                // Save Task Order
                $taskOrder = new TaskOrder();

                $taskOrder->order_id	    = rand(100000000,999999999);
                $taskOrder->task_id	        = $taskId;
                $taskOrder->task_offer_id	= $offerId;
                $taskOrder->coupon_id	    = $request->coupon_id ?? null;
                $taskOrder->payment_method_id = 1;  // stripe
                $taskOrder->service_fee     = $request->service_fee;
                $taskOrder->promo_amount    = $request->promo_discount ?? null;
                $taskOrder->grand_total     = $amount;
                $taskOrder->user_id         = $request->user()->id;

                $taskOrder->save();

                // Save Transaction data
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

                if($request->coupon_id ){
                    $user->appliedCoupons()->attach($request->coupon_id);
                }


                $task = Task::findOrFail($taskId);
                $task->update([
                    'request_status' => Task::REQUEST_ACCEPTED,
                    'offer_id' => $offerId
                ]);

                DB::commit();


                return $this->respondWithSuccess(
                    'Payment is done successfully.',
                    []
                ); 
            }
            
            DB::rollBack();

            return $this->respondWithError(
                'Payment failed. Please try again.',
                [],
            );
            
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return $this->respondWithError(
                'Invalid Stripe token.',
                [],
                500
            );
        }
    }

    public function storeReview($taskOrderId, Request $request){

        try {                     
            $orderReview = TaskOrderReview::create([
                'task_order_id'  => $taskOrderId,
                'accuracy'       => $request->accuracy,
                'rating'         => $request->rating,
                'review'         => $request->review,  
            ]);
            
            return $this->respondWithSuccess(
                'Review is submitted.', $orderReview
            );

        } catch (Exception $e) {
            Log::info($e->getMessage());

            return $this->respondWithError(
                'Something is wrong. Try again.',
                [],
                500
            );
        }
    }

    public function storeTips($taskOrderId, Request $request){

        try {                     
            TaskOrderTip::create([
                'task_order_id'  => $taskOrderId,
                'tip_amount'       => $request->tip_amount
            ]);
            
            return $this->respondWithSuccess(
                'Tips is submitted.'
            );

        } catch (Exception $e) {
            Log::info($e->getMessage());

            return $this->respondWithError(
                'Something is wrong. Try again.',
                [],
                500
            );
        }
    }
 
}
