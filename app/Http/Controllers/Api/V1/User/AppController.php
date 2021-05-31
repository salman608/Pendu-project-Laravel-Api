<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\ApiController;
use App\Models\UserAppSetting;
use Illuminate\Http\Request;

class AppController extends ApiController
{
    public function __construct() {

    }
    
    public function appPermission(){

        return $this->respondWithSuccess(
            'Permissions is retrieved',
            UserAppSetting::all()
        );
    }

    public function updateAppPermission($id, Request $request){
        return "updateAppPermission";
    }
}
