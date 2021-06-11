<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Post;
use App\Models\User;
use App\Models\Dropper;
use App\Models\Task;
use App\Models\TaskOffer;
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
        $data['tasks'] = Task::with('products')->where('user_id', auth()->id())->latest()->get()
            ->groupBy(function($task){
                return $task->created_at->format('j F Y');
            });

        // return $data['tasks']->toArray();

        return view('user.profile.tasks', $data);
    }

    public function profile()
    {
        return view('User.Profile.profile');
    }

    // Currently index
    public function tasks()
    {
        return "Currently index";
        return auth()->user();
        //return view('User.Profile.tasks');
    }

    public function TaskOfferJson($id){
        $offers =  TaskOffer::with(['dropper', 'dropper.vehicle'])->where('task_id',$id)->latest()->get();
        return response()->json(['offers' => $offers->toArray()]);
    }

    // ==============Promo offer===========

    public function promoOffer(){
        $offers=Coupon::latest()->get();
        return view('User.Profile.offer',compact('offers'));
    }

    public function offerDetails($id){
        $offerDetails=Coupon::find($id);
        return response()->json(['offerDetails' => $offerDetails]);
    }

    public function history(){
        return view('User.Profile.history');
    }

    public function delivery(){
        return view('User.Profile.delivery');
    }

    public function payment(){
        return view('User.Profile.payment');
    }
    public function notifications(){
        return view('User.Profile.notification');
    }
    public function refarAndEarn(){
        return view('User.Profile.refer_n_earn');
    }

    public function support(){
        return view('User.Profile.support');
    }

    public function faq(){
        return view('User.Profile.faq');
    }

    public function termAndCondition(){
        return view('User.Profile.term_n_condition');
    }
}
