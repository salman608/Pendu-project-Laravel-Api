<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\ApiController;
use App\Models\TaskCheckout;
use App\Repositories\TaskCheckOutRepository;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;
use Validator;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;
use Image;
use Illuminate\Support\Str;
class TaskCheckOutController extends ApiController
{
    public function __construct() {

    }

    public function store($taskId, $offerId, Request $request){

        DB::beginTransaction();

        try {                     
            $task_checkout = TaskCheckOutRepository::saveCheckOutData($taskId, $offerId, $request->all());


            DB::commit();
            
            return $this->respondWithSuccess(
                'Your checkout request is submitted.',
                $task_checkout
            );

        } catch (Exception $e) {
            DB::rollBack();

            Log::info($e->getMessage());

            return $this->respondWithError(
                'Something is wrong. Try again.',
                $e->getMessage(),
                500
            );
        }
    }
 
}
