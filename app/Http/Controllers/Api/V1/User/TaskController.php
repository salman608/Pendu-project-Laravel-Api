<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\ApiController;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;
use Validator;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;

class TaskController extends ApiController
{
    public function __construct() {

    }

    public function saveShopDrop(Request $request){
      

        $validator = Validator::make($request->all(), [
            
            'title' => 'required|string',

            'from' => 'required|string',
            'from_latlng' => 'required',
            'to' => 'required|string',
            'to_latlng' => 'required',
            
            'notes' => 'required|string',

            'total_cost' => 'required',
            'user_id' => 'required',
            'delivery_time_id' => 'required',
            'service_category_id' => 'required',
            'products' => 'required',
            'product_category_ids' => 'required',
        ]);

        if($validator->fails()){
            return $this->respondWithError(
                'Validation Error',
                $validator->errors(),
                422
            );
        }

        DB::beginTransaction();

        try {
            $data = $validator->validated();
            $task = TaskRepository::saveShopDropData($data);
            $task->products()->createMany($data['products']);
            $task->productCategories()->attach($data['product_category_ids']);
            
            DB::commit();
            
            $task->load(['products','productCategories']);
            return $this->respondWithSuccess(
                'Task request is submitted',
                $task
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
