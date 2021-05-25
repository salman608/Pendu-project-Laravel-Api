<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\ApiController;
use App\Models\TaskOrder;
use App\Repositories\TaskOrderRepository;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;
use Validator;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;
use Image;
use Illuminate\Support\Str;
class TaskOrderController extends ApiController
{
    public function __construct() {

    }

    public function store($taskId, $offerId, Request $request){

        DB::beginTransaction();

        try {                     
            $task_order = TaskOrderRepository::saveTaskOrderData($taskId, $offerId, $request->all());


            DB::commit();
            
            return $this->respondWithSuccess(
                'Your checkout request is submitted.',
                $task_order
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
