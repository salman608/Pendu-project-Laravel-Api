<?php

namespace App\Repositories;

use App\Models\TaskOffer;
use Illuminate\Http\Request;

class TaskOfferRepository  
{

    public static function saveTaskOfferData($taskId, $data){
            
            $task_offer             = new TaskOffer();
            $task_offer->amount     = $data['amount'];
            $task_offer->dropper_id = request()->user()->id;
            $task_offer->task_id    = $taskId;
            $task_offer->save();

            return $task_offer;
    }
}
