<?php

namespace App\Http\Controllers\Api\V1\Dropper\Auth;

use App\Models\Dropper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\Controller;

class DropperAuthController extends Controller
{
    public function __construct() {
        // $this->middleware('auth:dropper-api', ['except' => ['login', 'register']]);
        $this->middleware('jwt.verify', ['except' => ['login', 'register']]);
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

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (! $token = Auth::guard('dropper-api')->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->createNewToken($token);
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
            'phone' => 'required|string|max:16',
            'abn' => 'required|string',
            'vehicle_id' => 'required',
            'license_front' => 'required',
            'license_back' => 'required',
            'profile_image' => 'required',
            'password' => 'required|string|confirmed|min:6',
        ]);

         //profile image part
         if ($request->hasFile('profile_image')) {
            $path = $request->profile_image->store('uploads/dropper/photos');

        }

        //licensef_front_side image part
        if ($request->hasFile('license_front')) {
            $path = $request->license_front->store('uploads/dropper/photos');
        }

        //licensef_back_side image part
        if ($request->hasFile('license_back')) {
            $path = $request->license_back->store('uploads/dropper/photos');
        }

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }


        $dropper = Dropper::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));
            $dropper->services()->attach($request->services);

        return response()->json([
            'message' => 'dropper successfully registered',
            'dropper' => $dropper
        ], 201);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {

        Auth::guard('dropper-api')->logout();

        return response()->json(['message' => 'Dropper successfully signed out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth('dropper-api')->refresh());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function profile() {
        $dropper = Auth::guard('dropper-api')->user();
        return response()->json($dropper);
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
