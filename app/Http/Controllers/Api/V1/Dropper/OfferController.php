<?php


namespace App\Http\Controllers\Api\V1\Dropper;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\Task;
use App\Models\TaskOffer;
use Exception;
use Illuminate\Support\Facades\Log;

class OfferController  extends ApiController
{   
    // Submit offer for a Task
    public function submitOffer(Request $request, $taskId){
       
        // Check if user already placed an offer
        $checkOffer = TaskOffer::where('task_id', $taskId)->where('dropper_id', auth('dropper-api')->user()->id);

        if($checkOffer->exists()){
            return $this->respondWithSuccess(
                'You have already placed an offer to this task.',
                []
            );
        }

        try {


            $task_offer             = new TaskOffer();
            $task_offer->amount     = $request->amount;

            $task_offer->dropper_id = auth('dropper-api')->user()->id;
            $task_offer->task_id    = $taskId;
            $task_offer->save();

            return $this->respondWithSuccess(
                'You offer has been submitted successfully',
            );

        } catch (Exception $e) {
            Log::info($e->getMessage());

            return $this->respondWithError(
                'Your task offer is not submitted',
                [],
                500
            );
        }

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
