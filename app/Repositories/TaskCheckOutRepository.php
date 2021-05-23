<?php

namespace App\Repositories;

use App\Models\TaskCheckout;
use Illuminate\Http\Request;

class TaskCheckOutRepository  
{

    public static function saveCheckOutData($taskId, $offerId, $data){
            
            $task_checkout                      = new TaskCheckout();
            $task_checkout->task_id             = $taskId;
            $task_checkout->task_offer_id       = $offerId;
            $task_checkout->coupon_id           = $data['coupon_id'];
            $task_checkout->payment_method_id   = $data['coupon_id'];

            $task_checkout->delivery_fee    = $data['delivery_fee'];
            $task_checkout->service_fee     = $data['service_fee'];
            $task_checkout->promo_discount  = $data['promo_discount'];
            $task_checkout->sub_total       = $data['sub_total'];
            $task_checkout->total           = $data['total'];
            $task_checkout->save();

            return $task_checkout;
    }
}
