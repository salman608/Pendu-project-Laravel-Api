<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Mail\Referrals\ReferralReceived;
use Illuminate\Support\Facades\Mail;

class ReferralController  extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *  Get refer and earn page
     *
     */
    public function index(){
        return view('user.profile.refer_n_earn');
    }

    /**
     *  Store referral resource
     *
     */    
    public function store(Request $request){

        $request->validate([
            'email' => 'required'       
        ]);

        $referral = $request->user()->referrals()->create(
            array_merge( $request->only('email'),[ 'token' => STR::random(50)])
        );

        Mail::to($referral->email)->send(
            new ReferralReceived($request->user(), $referral)
        );

        return redirect()->back()->with('success', 'Your invitation has been sent.');
        // return $request->all();
        // return view('user.profile.refer_n_earn');
    }
}
