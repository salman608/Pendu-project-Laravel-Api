<?php


namespace App\Http\Controllers\Api\V1\Dropper;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\Task;

class TaskController  extends ApiController
{   
    // Get list of Task for google Map
    public function tasksMapShow(){
        $tasks = Task::with('products','serviceCategory','deliveryTime')->withCount('offers')->where('request_status', Task::REQUEST_PROCESSING)->latest()->get();

        if($tasks->isEmpty()){
            return $this->respondWithSuccess(
                'There are no tasks.',
                []
            );
        }
        return $this->respondWithSuccess(
            'All tasks retrieved for maps',
            $tasks
        );

    }

    // Get single task info for submit offer
    public function singleTaskInfo($taskId){
        $task = Task::with('user','products','serviceCategory','deliveryTime')->withCount('offers')->where('request_status', Task::REQUEST_PROCESSING)->where('id', $taskId)->get();

        if($task->isEmpty()){
            return $this->respondWithSuccess(
                'Task id is not exist.',
                []
            );
        }
        return $this->respondWithSuccess(
            'Task details retrieved',
            $task
        );

    }
}
