<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Repositories\TaskRepository;
use App\Repositories\UserTaskRepository;
use Validator;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;
use Image;
use Illuminate\Support\Str;

class TaskController extends Controller
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

    if ($file = $request->file('image')) {

        $name = Str::random(5).date('mdYHis').uniqid() .'.' . $file->getClientOriginalExtension();
        Image::make($file)->resize(270,270)->save('uploads/images/tasks/'.$name);
        $data['image'] = $name;
    }

    $task   = new Task();
    $task->task_id      = Str::random(12);
    $task->title=$request->title;
    $task->from=$request->from;
    $task->from_lat=$request->from_lat;
    $task->to=$request->to;
    $task->to_lat=$request->to_lat;
    $task->notes=$request->notes;
    $task->total_cost=$request->total_cost;
    $task->vehicle_id=$request->vehicle_id;
    $task->delivery_time_id=$request->delivery_time_id;
    $task->service_category_id=$request->service_category_id;
    // $task->products=$request->products;
    // $task->product_category_ids=$request->product_category_ids;
    $task->image=$request->image;
    $task->save();
    $task->products()->createMany($request['products']);
    $task->productCategories()->attach($request['product_category_ids']);
    return route('home');

    // DB::beginTransaction();

    // try {
    //     $data = $validator->validated();

    //     // image upload
    //     if ($file = $request->file('image')) {

    //         $name = Str::random(5).date('mdYHis').uniqid() .'.' . $file->getClientOriginalExtension();
    //         Image::make($file)->resize(270,270)->save('uploads/images/tasks/'.$name);
    //         $data['image'] = $name;
    //     }




    //     $task = TaskRepository::saveTaskData($data);
    //     $task->products()->createMany($data['products']);
    //     $task->productCategories()->attach($data['product_category_ids']);

    //     DB::commit();

    //     if(!empty($data['vehicle_id'])){
    //         $task->load(['products','productCategories','deliveryTime','vehicle']);
    //     } else{
    //         $task->load(['products','productCategories','deliveryTime']);
    //     }

    //     return redirect()->route('home');

    // } catch (Exception $e) {
    //     DB::rollBack();

    //     if(!empty($data['image']) && file_exists('uploads/images/tasks/'.$data['image'])){
    //         unlink('uploads/images/tasks/'.$data['image']);
    //     }


    //     Log::info($e->getMessage());

    //     return response()->json([
    //         'message' => $e->getMessage(),
    //         'error' => true,
    //         'code' => 500
    //     ], 500);
    // }
}
   }

