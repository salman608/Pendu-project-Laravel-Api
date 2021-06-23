<?php

namespace App\Http\Controllers\Api\V1\User\Auth;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class AuthController extends ApiController
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct() {
        // $this->middleware('jwt.verify', ['except' => ['login', 'register']]);
        // $this->middleware('auth:api', ['except' => ['login', 'register']]);
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

        if (! $token = auth('api')->attempt($validator->validated())) {
            return $this->respondWithError(
                'Unauthorized',
                null, 401
            );
        }


        return $this->respondWithSuccess(
            'User access token retrieved.',
            ['access_token' => $token, 'user' => auth('api')->user()  ]
        );
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'phone' => 'required|string',
            'suburb' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        if($validator->fails()){
            return $this->respondWithError(
                'Validation Error',
                $validator->errors(),
                422
            );
        }

        $user = User::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));

        return $this->respondWithSuccess(
            'New user has been created.',
            $user
        );
    }


    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {
        auth('api')->logout();

        return response()->json(['message' => 'User successfully signed out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {

        return $this->respondWithSuccess(
            'User access token refreshed.',
            $this->createNewToken(auth('api')->refresh())
        );
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function profile() {

        return $this->respondWithSuccess(
            'User data retrieved.',
            auth('api')->user() 
        );
    }


    /**
     * Update a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'string|between:2,100',
            'phone' => 'string',
            'suburb' => 'string',
        ]);

        // if($validator->fails()){
        //     return $this->respondWithError(
        //         'Validation Error',
        //         $validator->errors(),
        //         422
        //     );
        // }

        $user = $request->user()->update($validator->validated());

        return $this->respondWithSuccess(
            'User profile has been updated.',
            $request->user()
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
        return [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ];
    }
}
