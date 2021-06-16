<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\TaskOrder;
use App\Models\TaskOrderReview;
use App\Models\TaskOrderTip;
use Illuminate\Http\Request;
use Session;
use DB;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($orderId)
    {   

        return view("user.review.review", ['orderId' => $orderId]);
    }

    public function sent()
    {
        return view("user.review.review_sent");
    }


    public function orderTraking(){
        return view('user.review.track_order');
    }

    public function trackOrderStatus(Request $request){

        // return $request->all();
        // return $order = TaskOrder::where('order_id', $orderId)->first();

        return view('user.review.track_order');
    }

    public function reviewSubmit(Request $request){

        $taskOrder = TaskOrder::where('order_id', $request->task_order_id)->first();


        $orderReview = new TaskOrderReview();
        $orderReview->task_order_id = $taskOrder->id;
        $orderReview->review_by = $request->user()->id;
        $orderReview->rating = $request->rate;
        $orderReview->accuracy = $request->range;
        $orderReview->review = $request->experience;

        $orderReview->save();


        return redirect()->route('user.order-tips', ['orderId' => $request->task_order_id]);

    }

    public function submitTips(Request $request, $orderId){


        DB::beginTransaction();

        try {

                
            $task = TaskOrder::with('task')->where('order_id', $orderId)->first();
            $task->task->update(['request_status'=> Task::REQUEST_COMPLETED]);
            $task->user->update(['balance'=> $task->user->balance - $task->taskOffer->amount]);

            Session::flash('success', 'Your request is submitted!');
            return redirect()->route('user.order-tips', $orderId);
        
            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            Session::flash('error', "Something is wrong try again..");
            return redirect()->route('collect_n_drop');
        }
        // return $request->all();
        // $orderTip = new TaskOrderTip();

        // $orderTip->tip_amount = $request->tips_amount;
        // $orderTip->task_order_id = $orderId;

        // $orderTip->save();

        // redirect()
    }
}
