<?php

namespace App\Http\Controllers\Api\V1\Others;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Models\DeliveryTime;
use Illuminate\Http\Request;


class DeliveryTimeController extends ApiController
{
    //======== Admin Dalivery Time List=======
    public function index(){
        return $this->respondWithSuccess(
            'Delivery times are retrieved',
            DeliveryTime::all()
        );
    }
}
