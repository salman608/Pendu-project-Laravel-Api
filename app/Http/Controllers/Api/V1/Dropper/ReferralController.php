<?php


namespace App\Http\Controllers\Api\V1\Dropper;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Mail\Referrals\ReferralReceived;
use App\Rules\NotRefferingExisting;
use Illuminate\Support\Facades\Mail;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\ApiController;
use Validator;


class ReferralController  extends ApiController
{


    /**
     *  Store referral resource
     *
     */    
    public function store(Request $request){
        // return $request->user('dropper-api')->referrals;
        $validator = Validator::make($request->all(), [
            'email' => [
                'required',
                new NotRefferingExisting($request->user('dropper-api'))   
            ]
                 
        ]);

        if($validator->fails()){
            return $this->respondWithError(
                'Validation Error',
                $validator->errors(),
                422
            );
        }

        DB::beginTransaction();

        try {
            $referral = $request->user('dropper-api')->referrals()->create(
                array_merge( $request->only('email'),[ 'token' => STR::random(50)])
            );
    
            Mail::to($referral->email)->send(
                new ReferralReceived($request->user('dropper-api'), $referral, true)
            );
            DB::commit();
            
            return $this->respondWithSuccess(
                'Your invitation has been sent'
            );

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            return $this->respondWithError(
                'Your invitation has not been sent. Try again later.',
                [],
                500
            );
        }


    }
}
