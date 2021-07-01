<?php


namespace App\Http\Controllers\Api\V1\Dropper;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\Task;
use App\Models\TaskOffer;
use App\Models\TaskOrder;
use App\Models\TaskOrderReview;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;

class TaskController  extends ApiController
{   
    // Get list of active tasks
    public function activeTasks(Request $request){
        
        $taskOffer = TaskOffer::with(['task.user','task','task.productCategories','task.serviceCategory','task.products'])->where('dropper_id', $request->user('dropper-api')->id)->where('status', TaskOffer::STATUS_IN_PROGRESS)->latest()->get();


        if($taskOffer->isEmpty()){
            return $this->respondWithSuccess(
                'There are no active tasks.',
                []
            );
        }
        return $this->respondWithSuccess(
            'All active tasks retrieved',
            $taskOffer
        );

    }

    // Get list of Task for google Map
    public function tasksMapShow(){
        $tasks = Task::with('products','serviceCategory','productCategories','deliveryTime')->withCount('offers')->where('request_status', Task::REQUEST_PROCESSING)->latest()->get();

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
        $task = Task::with('user','products','serviceCategory','productCategories','deliveryTime')->withCount('offers')->where('request_status', Task::REQUEST_PROCESSING)->where('id', $taskId)->first();

        if(!$task){
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

    
    // Get single task info for Task View without task status logic
    public function singleTaskView(Request $request, $offerId){


        $taskOffer = TaskOffer::with(['task','task.productCategories','task.serviceCategory','task.products'])->where('dropper_id', $request->user('dropper-api')->id)->first();

        if(!$taskOffer){
            return $this->respondWithSuccess(
                'Task id is not exist.',
                []
            );
        }
        return $this->respondWithSuccess(
            'Task details retrieved for task view',
            $taskOffer
        );

    }

    // Get all the pending tasks
    public function pendingTasks(Request $request){
        $taskOffer = TaskOffer::with(['task.user','task','task.productCategories','task.serviceCategory','task.products'])->where('dropper_id', $request->user('dropper-api')->id)->where('status', TaskOffer::STATUS_PENDING)->latest()->get();

        if($taskOffer->isEmpty()){
            return $this->respondWithSuccess(
                'Your pending tasks list is empty. ',
                []
            );
        } 

        return $this->respondWithSuccess(
            'Your pending tasks list retrieved.',
            $taskOffer
        );
    }

    // Get all the confirmed tasks
    public function confirmedTasks(Request $request){
        $taskOffer = TaskOffer::with(['task.user','task','task.productCategories','task.serviceCategory','task.products'])->where('dropper_id', $request->user('dropper-api')->id)->where('status', TaskOffer::STATUS_CONFIRMED)->latest()->get();

        if($taskOffer->isEmpty()){
            return $this->respondWithSuccess(
                'Your confirmed tasks list is empty. ',
                []
            );
        } 

        return $this->respondWithSuccess(
            'Your confirmed tasks list retrieved.',
            $taskOffer
        );
    }

    // Get all the in progress tasks
    public function inProgressTasks(Request $request){
        
        $taskOffer = TaskOffer::with(['task.user','task','task.productCategories','task.serviceCategory','task.products'])->where('dropper_id', $request->user('dropper-api')->id)->where('status', TaskOffer::STATUS_IN_PROGRESS)->latest()->get();

        if($taskOffer->isEmpty()){
            return $this->respondWithSuccess(
                'Your in progress tasks list is empty. ',
                []
            );
        } 

        return $this->respondWithSuccess(
            'Your in progress tasks list retrieved.',
            $taskOffer
        );
    }

    // Get all the complete tasks
    public function completedTasks(Request $request){
    
        $taskOffer = TaskOffer::with(['task.user','task','task.productCategories','task.serviceCategory','task.products'])->where('dropper_id', $request->user('dropper-api')->id)->where('status', TaskOffer::STATUS_COMPLETED)

        // ->addSelect(['review' => function($query) use($request){
            
        //     $request->user('dropper-api')->taskReview;
        //     // ->limit(1);
        // }])
        
        ->latest()->get();

        if($taskOffer->isEmpty()){
            return $this->respondWithSuccess(
                'Your completed tasks list is empty. ',
                []
            );
        } 

        return $this->respondWithSuccess(
            'Your completed tasks list retrieved.',
            $taskOffer
        );
    }
}
