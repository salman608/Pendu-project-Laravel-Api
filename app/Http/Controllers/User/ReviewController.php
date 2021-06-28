<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Dropper;
use App\Models\Task;
use App\Models\TaskOffer;
use App\Models\TaskOrder;
use App\Models\TaskOrderReview;
use App\Models\TaskOrderTip;
use App\Models\TaskOrderTransaction;
use Illuminate\Http\Request;
use Session;
use DB;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Stripe;

class ReviewController extends Controller
{

    /**
     *  Show review sent page
     *
     */
    public function sent()
    {
        return view("user.review.review_sent");
    }

    /**
     *  Show order taking page
     *
     */
    public function orderTraking(){
        return view('user.review.track_order');
    }


    /**
     *  Show order taking status page
     *
     */
    public function trackOrderStatus(Request $request){

        // return $request->all();
        // return $order = TaskOrder::where('order_id', $orderId)->first();

        return view('user.review.track_order');
    }


    /**
     *  Store review
     *
     */
    public function reviewSubmit(Request $request){

        DB::beginTransaction();

        try {

            $taskOrder = TaskOrder::where('order_id', $request->task_order_id)->first();


            // $orderReview = new TaskOrderReview();
            // $orderReview->save();

            $user = Auth::user();
            $user->reviews()->create(
                [

                    'task_order_id' => $taskOrder->id,
                    'rating' => $request->rate,
                    'accuracy' => $request->range,
                    'review' => $request->experience
                ]
            );



            // Update Task order as Delivered
            $taskOrder->update([
                'status' => TaskOrder::STATUS_DELIVERED
            ]);

            // Update Task as Completed
            $task = Task::findOrFail($taskOrder->task_id);
            $task->update([
                'request_status' => Task::REQUEST_COMPLETED
            ]);

            // Update Task Offer as Completed
            $taskOffer = TaskOffer::findOrFail($taskOrder->task_offer_id);
            $taskOffer->update([
                'status' => TaskOffer::STATUS_COMPLETED
            ]);

            // Cut the amount
            $user->update([
                'balance' => $user->balance - $taskOrder->grand_total
            ]);

            DB::commit();

            return redirect()->route('user.order-tips', ['orderId' => $request->task_order_id]);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            session()->flash('error', $e->getMessage());
            // return $e->getMessage();
            return redirect()->back();
        }

    }

    /**
     * Order Tips Page
     */
    public function orderTip($orderId)
    {   

        return view("user.review.review", ['orderId' => $orderId]);
    }

    /**
     *  Store tips
     *
     */
    public function submitTips(Request $request, $orderId){

        DB::beginTransaction();

        try {

            if(TaskOrderTip::where('task_order_id', $orderId)->exists()){
                throw new Exception("You have already given tips.", 1);
            }
            
            $amount     = (int)$request->tipsAmount;
            $final_amount   = $amount  * 100;
            $currency       = 'usd';

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $charge = Stripe\Charge::create ([
                "amount" => $final_amount,
                    "currency" => $currency,
                    "source" => $request->stripeToken,
                    "description" => "This payment is testing purpose of Pendu Service",
                ]);



            if($charge['status'] == "succeeded" &&  $charge['paid'] == true){

                $taskOrder = TaskOrder::where('order_id', $orderId)->first();

                // Save Tips details
                $taskOrderTip = new TaskOrderTip();
                $taskOrderTip->task_order_id = $orderId;
                $taskOrderTip->tip_amount = $amount;
                $taskOrderTip->save();

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

                $taskOrderTip->transaction()->save($orderTransaction);

                // Increase the pendu pay balance
                $taskOffer = TaskOffer::findOrFail($taskOrder->task_offer_id);
                $dropper = Dropper::findOrFail($taskOffer->dropper_id);
                $dropper->update([
                    'balance' => $dropper->balance + $amount
                ]);
                
    
                DB::commit();
                Session::flash('success', 'Your request is submitted!');

                return redirect()->route('user.order-tips', $orderId);
            }


            DB::rollBack();
            Session::flash('error', "Something is wrong try again.");
            return redirect()->back();

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            Session::flash('error',$e->getMessage());
            return redirect()->back();
        }
        // return $request->all();
        // $orderTip = new TaskOrderTip();

        // $orderTip->tip_amount = $request->tips_amount;
        // $orderTip->task_order_id = $orderId;

        // $orderTip->save();

        // redirect()
    }
}
