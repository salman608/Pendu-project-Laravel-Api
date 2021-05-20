<?php

namespace App\Repositories;

use App\Models\Coupon;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Illuminate\Support\Str;

class TaskRepository  
{
    public function __construct()
    {
        # code...
    }

    public static function list()
    {
        return Task::all();
    }

    // public static function store($newcoupon)
    // {
    //     try {
    //         $coupon = new Coupon($newcoupon);
    //         $coupon->save();

    //         return $coupon;
    //     } catch (QueryException $exception) {
    //         throw new InvalidArgumentException($exception->getMessage());
    //     }
    // }

    public static function saveTaskData($data){
 
        // 1 = shop & drop, 2 = collect & delivery, 3 = movers
        $task   = new Task();
        $task->task_id      = Str::random(12);
        $task->title        = $data['title'];
        $task->from         = $data['from'];
        $task->from_lat     = $data['from_latlng']['lat'];
        $task->from_lng     = $data['from_latlng']['lng'];
        $task->to           = $data['to'];
        $task->to_lat       = $data['to_latlng']['lat'];
        $task->to_lng       = $data['to_latlng']['lng'];
        $task->notes        = $data['notes'];
        $task->total_cost   = $data['total_cost'];
        $task->user_id      = request()->user()->id;
        $task->delivery_time_id      = $data['delivery_time_id'];
        $task->service_category_id   = $data['service_category_id'];

        if(!empty($data['vehicle_id'])){
            $task->vehicle_id   = $data['vehicle_id'];
        }

        if(!empty($data['image'])){
            $task->image   = $data['image'];
        }

        $task->save();

        return $task;
    }
}
