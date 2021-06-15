<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\TaskOrder;
use App\Models\TaskOrderReview;
use App\Models\TaskOrderTip;
use Illuminate\Http\Request;
use Session;

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
        return view('User.review.track_order');
    }

    public function trackOrderStatus(Request $request){

        return $request->all();
        // return $order = TaskOrder::where('order_id', $orderId)->first();

        return view('User.review.track_order');
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

        $task = TaskOrder::with('task')->where('order_id', $orderId)->first()
             ->task
             ->update(['request_status'=> Task::REQUEST_COMPLETED]);


        Session::flash('success', 'Your request is submitted!');
        return redirect()->route('user.order-tips', $orderId);


        // return $request->all();
        // $orderTip = new TaskOrderTip();

        // $orderTip->tip_amount = $request->tips_amount;
        // $orderTip->task_order_id = $orderId;

        // $orderTip->save();

        // redirect()
    }
}
