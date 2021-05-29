<?php

namespace App\Http\Controllers\Api\V1\Others;

use App\Http\Controllers\ApiController;
use App\Models\Vehicle;


class VehicleController extends ApiController
{
    //======== Admin Dalivery Time List=======
    public function index(){
        return $this->respondWithSuccess(
            "Vehicles are retrieved",
            Vehicle::all()
        );
    }
}
