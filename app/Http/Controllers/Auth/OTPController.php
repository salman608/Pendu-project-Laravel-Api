<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class OTPController extends Controller
{   
    /**
     *  Show otp view file
     *
     */
    public function index(){
        return view('auth.otp-verify');
    }

    /**
     *  Verify user phone number
     *
     */
    public function verifyPhone(Request $request){
        $inputCode = $request->num1.$request->num2.$request->num3.$request->num4.$request->num5.$request->num6;
        $code = (int)$inputCode;

        if($code != 123456){
            session('error', 'You verification code is invalid.');

            return redirect()->back();
        }

        auth()->user()->update(['phone_verified_at'=> now()]);

        return redirect()->route('home');
    }

}

