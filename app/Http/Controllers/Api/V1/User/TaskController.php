<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\ApiController;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;
use Validator;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;
use Image;
use Illuminate\Support\Str;
class TaskController extends ApiController
{
    public function __construct() {

    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [

            'title' => 'required|string',

            'from' => 'required|string',
            'from_latlng' => 'required',
            'to' => 'required|string',
            'to_latlng' => 'required',

            'notes' => 'required|string',

            'total_cost' => 'required',
            'vehicle_id' => 'sometimes|required',
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

            // image upload
            if ($file = $request->file('image')) {

                $name = Str::random(5).date('mdYHis').uniqid() .'.' . $file->getClientOriginalExtension();
                Image::make($file)->resize(270,270)->save('uploads/images/tasks/'.$name);
                $data['image'] = $name;

                // $name = uniqid() . $file->getClientOriginalName();
                // $name = strtolower(str_replace(' ', '-', $name));
                // // $file->move('images/tasks/', $name);
                // Image::make($file)->resize(270,270)->save('upload/images/tasks/'.$name);
                // return $data['image'] = $name;
            }




            $task = TaskRepository::saveTaskData($data);
            $task->products()->createMany($data['products']);
            $task->productCategories()->attach($data['product_category_ids']);

            DB::commit();

            if(!empty($data['vehicle_id'])){
                $task->load(['products','productCategories','vehicle']);
            } else{
                $task->load(['products','productCategories']);
            }

            return $this->respondWithSuccess(
                'Task request is submitted',
                $task
            );

        } catch (Exception $e) {
            DB::rollBack();

            if(!empty($data['image']) && file_exists('uploads/images/tasks/'.$data['image'])){
				unlink('uploads/images/tasks/'.$data['image']);
			}


            Log::info($e->getMessage());

            return $this->respondWithError(
                'Something is wrong. Try again.',
                $e->getMessage(),
                500
            );
        }
    }

}
