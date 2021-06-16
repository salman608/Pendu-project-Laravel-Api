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
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $data = [];
   
        // group by date
        // $data['tasks'] = Task::with('products','order','serviceCategory','acceptedOffer','acceptedOffer.dropper')->where('user_id', auth()->id())->latest()->get()
        //     ->groupBy(function($task){
        //         return $task->created_at->format('j F Y');
        //     });

        // return $data['tasks'];


        $data['tasks'] = Task::with('products','order','serviceCategory','acceptedOffer','acceptedOffer.dropper')->where('request_status', '!=', Task::REQUEST_COMPLETED)->where('user_id', auth()->id())->latest()->get();

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


        $offers=Coupon::with(['appliedCoupons'])->latest()->get();

        return view('user.profile.offer',compact('offers'));
    }

    public function offerDetailsJson($id){
        $coupon=Coupon::with('info')->find($id);

        return response()->json(['coupon' => $coupon]);
    }

    public function history(){
        $data = [];
        $data['tasks'] = Task::with('products','order','order.review','serviceCategory')->where('request_status', Task::REQUEST_COMPLETED)->where('user_id', auth()->id())->latest()->get();


        return view('user.profile.history', $data);
    }

    public function delivery(){
        $data = [];
        $data['tasks'] = Task::with('products','order','order.review','order','serviceCategory', 'acceptedOffer.dropper')->where('request_status', Task::REQUEST_COMPLETED)->where('user_id', auth()->id())->latest()->get();

        // return $data['tasks'];
        return view('user.profile.delivery', $data);
    }



    public function payment(){
        $data = [];
        // $data['cards']  = auth()->user()->with('cards')->get();
        $data['cards'] = [];
        return view('user.profile.payment', $data);
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
