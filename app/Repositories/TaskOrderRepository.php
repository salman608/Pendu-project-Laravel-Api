<?php

namespace App\Repositories;

use App\Models\TaskOrder;
use Illuminate\Http\Request;

class TaskOrderRepository  
{

    public static function saveTaskOrderData($taskId, $offerId, $data){
            
            $task_order                      = new TaskOrder();
            $task_order->task_id             = $taskId;
            $task_order->task_offer_id       = $offerId;
            $task_order->coupon_id           = $data['coupon_id'];
            $task_order->payment_method_id   = $data['coupon_id'];

            $task_order->delivery_fee    = $data['delivery_fee'];
            $task_order->service_fee     = $data['service_fee'];
            $task_order->promo_discount  = $data['promo_discount'];
            $task_order->sub_total       = $data['sub_total'];
            $task_order->total           = $data['total'];
            $task_order->save();

            return $task_order;
    }
}
