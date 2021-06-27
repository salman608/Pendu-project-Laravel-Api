<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\ApiController;
use App\Models\Task;
use App\Models\TaskOffer;
use Illuminate\Http\Request;

class TaskOfferController extends ApiController
{
    public function __construct() {

    }

    /**
     * Get a list of Task offers from driver
     *
     */
    public function index(Request $request, $taskId){

        // Check if task owner is logged user & task is not payment yet.
        $taskNotAssigned = Task::where('id', $taskId)->where('user_id', $request->user('api')->id)->whereNull('offer_id');
        if(!$taskNotAssigned->exists()){
            return $this->respondWithSuccess(
                'A offer already accepted for this task.',
                []
            );
        }
        
       $task_offers = TaskOffer::with(['dropper', 'dropper.vehicle'])->where('task_id',$taskId)->get();

        if($task_offers->isEmpty()){
            return $this->respondWithSuccess(
                'No offers placed yet for this task.',
                []
            );
        }

       return $this->respondWithSuccess(
            'Offers of the given task retrieved.',
            $task_offers
        );
    }

}
