<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User\HelperController;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Auth;
use Illuminate\Http\Request;
use DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TaskRequest $request)
    {
        $reqData = $request->all();

        // dd($reqData);

        if ($request->hasFile('task_image')) {
            $reqData['task_image'] = $request->task_image->store('uploads/movers/photos');
        }

        $reqData['total_products'] = 0;
        $reqData['order_no']       = HelperController::getOrderNo();
        $reqData['created_by']     = Auth::user()->id;

        DB::beginTransaction();
        try {
            $isCreate = Task::create($reqData);

        } catch (Throwable $th) {
            DB::rollback();
            dd($th);

            $notification = array(
                'message'   => 'Unsuccessful to create task.',
                'alertType' => 'error',
            );

            return response()->json($notification);
        }

        DB::commit();
        $notification = array(
            'message'   => 'Successfully created task.',
            'alertType' => 'success',
        );

        return response()->json($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
