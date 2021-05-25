<?php

namespace App\Http\Controllers\Api\V1\Dropper;

use App\Http\Controllers\ApiController;
use App\Repositories\TaskOfferRepository;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;

class DropperTaskController extends ApiController
{
    public function __construct() {
        $this->middleware('jwt.verify');
    }

    public function submitOffer($taskId, Request $request){

        try {

            $task_offer = TaskOfferRepository::saveTaskOfferData($taskId, $request->all());

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
