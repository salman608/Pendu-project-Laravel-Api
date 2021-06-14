<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Post;
use App\Models\User;
use App\Models\Dropper;
use App\Models\Task;
use App\Models\TaskOffer;
use App\Models\TaskOrder;
use Auth;
use Illuminate\Support\Facades\Request;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $data = [];
        $data['tasks'] = Task::with('products','order','serviceCategory','acceptedOffer','acceptedOffer.dropper')->where('user_id', auth()->id())->latest()->get()
            ->groupBy(function($task){
                return $task->created_at->format('j F Y');
            });

        // return $data['tasks'];


        return view('user.profile.tasks', $data);
    }

    public function profile()
    {
        return view('user.profile.profile');
    }

    // Currently index
    public function tasks()
    {
        return "Currently index";
        return auth()->user();
        //return view('user.profile.tasks');
    }

    public function TaskOfferJson($id){
        $offers =  TaskOffer::with(['dropper', 'dropper.vehicle'])->where('task_id',$id)->latest()->get();
        return response()->json(['offers' => $offers->toArray()]);
    }

    public function TaskOrderJson($orderId){

        $taskOrder = TaskOrder::select('status')->where('order_id', $orderId)->first();

        $orderStatuses = ['Assigned' => 0,'In Progress' => 1,'Collected' => 2, 'Delivered' => 3];

        
        return response()->json(['order_status' => $orderStatuses[$taskOrder->status] ]);
    }

    // ==============Promo offer===========

    public function promoOffer(){
        $offers=Coupon::latest()->get();
        return view('user.profile.offer',compact('offers'));
    }

    public function offerDetailsJson($id){
        $offerDetails=Coupon::find($id);
        return response()->json(['offerDetails' => $offerDetails]);
    }

    public function history(){
        return view('user.profile.history');
    }

    public function delivery(){
        return view('user.profile.delivery');
    }



    public function payment(){
        return view('user.profile.payment');
    }


    public function penduPay(){
        return view('user.profile.pendu-pay');
    }

    public function notifications(){
        return view('user.profile.notification');
    }
    public function refarAndEarn(){
        return view('user.profile.refer_n_earn');
    }

    public function support(){
        return view('user.profile.support');
    }

    public function faq(){
        return view('user.profile.faq');
    }

    public function termAndCondition(){
        return view('user.profile.term_n_condition');
    }
}
