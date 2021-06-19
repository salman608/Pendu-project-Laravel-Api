<?php

namespace App\Http\Controllers\Api\V1\User\Auth;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class ResetPasswordController extends ApiController
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct() {
       
    }

    // We can't find a user with that email address.

    public function index(Request $request){
        // We can't find a user with that email address.
    }
}
