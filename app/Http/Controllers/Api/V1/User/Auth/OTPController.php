<?php

namespace App\Http\Controllers\Api\V1\User\Auth;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class OTPController extends ApiController
{   

    /**
     *  Verify user phone number
     *
     */
    public function verifyPhone(Request $request){
        $code = (int) $request->otp;

        if($code != 123456){
            return $this->respondWithError(
                'Your entered otp is incorrect.',
                [],
                422
            );
        }
        if(auth('api')->user()->hasVerifiedPhone()){
            return $this->respondWithSuccess(
                'You phone number already verified',
                []
            );
        }

        auth('api')->user()->update(['phone_verified_at'=> now()]);

        return $this->respondWithSuccess(
            'You phone number is verified successfully',
            []
        );
    }

}

