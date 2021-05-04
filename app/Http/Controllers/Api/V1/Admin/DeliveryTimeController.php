<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeliveryTime;
use Illuminate\Http\Request;


class DeliveryTimeController extends Controller
{
    //======== Admin Dalivery Time List=======
    public function getDeliveryTime(){
        return response()->json(DeliveryTime::all(), 200);
    }
}
