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
use App\Models\Dropper;


class TaskReviewController extends ApiController
{
    public function __construct() {

    }

    public function reviewSubmit($taskOrderId, Request $request){

        DB::beginTransaction();

        try {

            
          // $orderReview = new TaskOrderReview();
            // $orderReview->save();

            $user = Auth('api')::user();
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
            
            return $this->respondWithSuccess(
                'Review is submitted successfully.', 
                []
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

        DB::beginTransaction();

        try {
            
            $amount     = (int)$request->tip_amount;
            $final_amount   = $amount  * 100;
            $currency       = 'usd';

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $charge = Stripe\Charge::create ([
                "amount" => $final_amount,
                "currency" => $currency,
                "source" => $request->stripe_token,
                "description" => "This payment is testing purpose of Pendu Service",
            ]);
                
                
            
            if($charge['status'] == "succeeded" &&  $charge['paid'] == true){

                $taskOrder = TaskOrder::where('id', $taskOrderId)->first();

                // Save Tips details
                $taskOrderTip = new TaskOrderTip();
                $taskOrderTip->task_order_id = $taskOrderId;
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

                return $this->respondWithSuccess(
                    'Tips request is submitted successfully.', 
                    []
                );
            }
            
               
            DB::rollBack();

            return $this->respondWithError(
                'Tips request is failed.Please try again',
                []
            );

        } catch (Exception $e) {
            Log::info($e->getMessage());

            return $this->respondWithError(
                'Your stripe token is Invalid.',
                [],
                500
            );
        }
    }
 
}
