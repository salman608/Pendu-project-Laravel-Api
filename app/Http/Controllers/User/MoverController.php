<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\DeliveryTime;
use App\Models\Dropper;
use App\Models\ProductCategory;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Session;
use App\Repositories\TaskRepository;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;

class MoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Dropper $dropper)
    {
        // return view('User.collect_n_drop.collect_n_drop', compact('dropper'));
        $data = [];
        $data['product_cats']   =ProductCategory::all();
        $data['delivery_times'] =DeliveryTime::all();
        $data['vehicles']       =Vehicle::all();
        return view('User.mover.mover',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $shop_address       =  json_decode($request->shop_address);
            $delivery_address   =  json_decode($request->delivery_address);
            $products           =  json_decode($request->products, true);

            $data = [];

            $data['title']              = $request->title;
            $data['from']               = $shop_address->address;
            $data['from_latlng']['lat'] = $shop_address->lat;
            $data['from_latlng']['lng'] = $shop_address->lng;

            $data['to']                 = $delivery_address->address;
            $data['to_latlng']['lat']   = $delivery_address->lat;
            $data['to_latlng']['lng']   = $delivery_address->lng;

            $data['notes']              = $request->additional_note;
            $data['total_cost']         = $request->product_cost;
            $data['delivery_time_id']   = $request->delivery_time;
            $data['service_category_id']   = 1;

            $task = TaskRepository::saveTaskData($data);

            $task->products()->createMany($products);
            $task->productCategories()->attach($request-> product_cats);

            DB::commit();

            Session::flash('success', 'Your task request is submitted!');
            return redirect()->route('mover');

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            Session::flash('error', 'Your task request is failed!');
            return redirect()->route('mover');
        }

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
