<?php

namespace App\Http\Controllers\Api\V1\User\Auth;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Mail\Password\PasswordReset;
use Carbon\Carbon;
use Exception;
use DB;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends ApiController
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct() {
       
    }

    /**
     * Check email address exist or not
     * Send Email with OTP
     */

    public function index(Request $request){


        if(User::where('email',$request->email)->exists()){
            DB::beginTransaction();
            try {
                $otp = rand(10000,99999);

                DB::table('password_resets')->insert([
                    'email' => $request->email, 
                    'otp' => $otp, 
                    'created_at' => Carbon::now()
                ]);

                Mail::to($request->email)->send(
                    new PasswordReset($otp)
                );

                DB::commit();
                return $this->respondWithSuccess(
                    'A mail with otp has been sent. Please check you email.',
                    []
                );
            }
            catch (Exception $e) {

                DB::rollBack();

                Log::info($e->getMessage());

                return $this->respondWithError(
                    'Something is wrong. Try again.',
                    $e->getMessage(),
                    500
                );
            }
        }

        return $this->respondWithError(
            'We can\'t find a user with that email address.',
            [],
            404
        );
        // We can't find a user with that email address.
    }

    /**
     * Confirm otp is valid or not
     *
     * @param Request $request
     * @return void
     */
    public function confirm(Request $request){

        $updatePassword = DB::table('password_resets')
            ->where('email', $request-> email)
            ->where('otp', $request->otp);


        if($updatePassword->exists()){
            
            return $this->respondWithSuccess(
                'OTP is correct. Now proceed to submission.',
                []
            );
        }    
   

        return $this->respondWithError(
            'Otp is incorrect.',
            [],
            404
        );
    }

    /**
     * Reset Password
     *
     * @param Request $request
     * @return void
     */
    public function reset(Request $request){
        
        $updatePassword = DB::table('password_resets')
            ->where('email', $request-> email)
            ->where('otp', $request->otp)
            ->exists();

        
        if( !$updatePassword){
            return $this->respondWithError(
                'Otp is incorrect.',
                [],
                404
            );
        }

        if( !User::where('email', $request->email)->exists()){
            return $this->respondWithError(
                'We can\'t find a user with that email address.',
                [],
                404
            );
        }

        DB::beginTransaction();
            try {
                $user = User::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);


                DB::table('password_resets')->where(['email'=> $request->email])->delete();
                DB::commit();
                return $this->respondWithSuccess(
                    'Your password has been changed!',
                    []
                );
            }
            catch (Exception $e) {

                DB::rollBack();

                Log::info($e->getMessage());

                return $this->respondWithError(
                    'Something is wrong. Try again.',
                    $e->getMessage(),
                    500
                );
            }
    }
}
