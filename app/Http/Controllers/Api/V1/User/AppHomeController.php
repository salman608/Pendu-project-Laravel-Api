<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\ApiController;
use App\Models\Dropper;
use App\Models\UserAppSetting;
use Illuminate\Http\Request;

class AppHomeController extends ApiController
{
    public function __construct() {

    }
    
    public function proDriver(){
        $pro_drivers = Dropper::whereHas('level', function($query){
            $query->where('title', '=' , 'Pro'); })
            ->with('services')->get();
        
        return $this->respondWithSuccess(
            'All Pro drivers data retrieved.',
            $pro_drivers 
        );
    }
}
