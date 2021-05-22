<?php

namespace App\Http\Controllers\Api\V1\Dropper;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\TaskOffer;

class DropperTaskController extends ApiController
{
    public function __construct() {
        $this->middleware('jwt.verify');
    }

    public function submitOffer($taskId, Request $request){

        try {

            $task_offer             = new TaskOffer();
            $task_offer->amount     = $request->amount;
            $task_offer->dropper_id = request()->user()->id;
            $task_offer->task_id    = $taskId;
            $task_offer->save();


            return $this->respondWithSuccess(
                'Your offer is submitted',
                $task_offer->refresh()
            );

        } catch (Exception $e) {
            Log::info($e->getMessage());

            return $this->respondWithError(
                'Something is wrong. Try again.',
                $e->getMessage(),
                500
            );
        }
    }
}
