<?php

namespace App\Http\Controllers\Api\V1\Dropper\Auth;

use App\Http\Controllers\ApiController;
use App\Models\Dropper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\Controller;

class DropperAuthController extends ApiController
{
    public function __construct() {
        // $this->middleware('auth:dropper-api', ['except' => ['login', 'register']]);
        // Below one working..
        // $this->middleware('jwt.verify', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request){
    	$validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if($validator->fails()){
            return $this->respondWithError(
                'Validation Error',
                $validator->errors(),
                422
            );
        }

        if (! $token = Auth::guard('dropper-api')->attempt($validator->validated())) {
            return $this->respondWithError(
                'Unauthorized',
                null, 401
            );
        }

        return $this->respondWithSuccess(
            'Dropper access token retrieved.',
            [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => Auth::guard('dropper-api')->factory()->getTTL(),
                'dropper' => Auth::guard('dropper-api')->user()
                
            ]
        );
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request) {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|between:2,100',
            'last_name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:droppers',
            'phone' => 'required|string|max:16|unique:droppers',
            'abn' => 'required|string',
            'vehicle_id' => 'required',
            // 'license_front' => 'required',
            // 'license_back' => 'required',
            // 'profile_image' => 'required',
            // 'password' => 'required|string|confirmed|min:6',
            'password' => 'required|string|min:6',
        ]);

         //profile image part
         if ($request->hasFile('profile_image')) {
            $path = $request->profile_image->store('/public/uploads/dropper/photos');

        }

        //licensef_front_side image part
        if ($request->hasFile('license_front')) {
            $path = $request->license_front->store('/public/uploads/dropper/photos');
        }

        //licensef_back_side image part
        if ($request->hasFile('license_back')) {
            $path = $request->license_back->store('/public/uploads/dropper/photos');
        }

        if($validator->fails()){
            return $this->respondWithError(
                'Validation Error',
                $validator->errors(),
                422
            );
        }

        $dropper = Dropper::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));

        $dropper->services()->attach($request->service_ids);


        return $this->respondWithSuccess(
            'Dropper successfully registered.',
            $dropper
        );
    }

    
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {

        Auth::guard('dropper-api')->logout();

        return $this->respondWithSuccess(
            'Dropper successfully signed out.'
        );
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        // return $this->createNewToken(auth('dropper-api')->refresh());

        return $this->respondWithSuccess(
            'Dropper access token refreshed.',
            [
                'access_token' => auth('dropper-api')->refresh(),
                'token_type' => 'bearer',
                'expires_in' => Auth::guard('dropper-api')->factory()->getTTL(),
                
            ]
        );
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function profile(Request $request ) {
        
        $dropper = Auth::guard('dropper-api')->user();

        if($request->has('level')){
            $dropper->load(
                ['level', 'level.perkStatus', 'level.rules']
            );
        }

        return $this->respondWithSuccess(
            'Dropper data retrieved.',
            $dropper
        );
    }

    
    /**
     * Update a dropper.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request) {

        // $validator = Validator::make($request->all(), [
        //     'first_name' => 'required|string|between:2,100',
        //     'last_name' => 'required|string|between:2,100',
        //     'email' => 'required|string|email|max:100|unique:droppers',
        //     'phone' => 'required|string|max:16|unique:droppers',
        //     'abn' => 'required|string',
        //     'vehicle_id' => 'required',
        //     // 'license_front' => 'required',
        //     // 'license_back' => 'required',
        //     // 'profile_image' => 'required',
        //     // 'password' => 'required|string|confirmed|min:6',
        //     'password' => 'required|string|min:6',
        // ]);

        //  //profile image part
        //  if ($request->hasFile('profile_image')) {
        //     $path = $request->profile_image->store('/public/uploads/dropper/photos');

        // }

        // //licensef_front_side image part
        // if ($request->hasFile('license_front')) {
        //     $path = $request->license_front->store('/public/uploads/dropper/photos');
        // }

        // //licensef_back_side image part
        // if ($request->hasFile('license_back')) {
        //     $path = $request->license_back->store('/public/uploads/dropper/photos');
        // }

        // if($validator->fails()){
        //     return $this->respondWithError(
        //         'Validation Error',
        //         $validator->errors(),
        //         422
        //     );
        // }

        $dropper = $request->user('dropper-api')->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'abn' => $request->abn,
        ]);

        // $dropper->services()->attach($request->service_ids);


        return $this->respondWithSuccess(
            'Dropper profile updated successfully.',
            $request->user('dropper-api')
        );
    }


    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::guard('dropper-api')->factory()->getTTL() * 60,
            'dropper' => Auth::guard('dropper-api')->user()
        ]);
    }
}
