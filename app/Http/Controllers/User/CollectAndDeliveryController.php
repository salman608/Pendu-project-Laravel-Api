<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\DeliveryTime;
use App\Models\Dropper;
use App\Models\ProductCategory;
use App\Models\Vehicle;
use App\Notifications\Task\TaskNetwork;
use Illuminate\Http\Request;
use Session;
use App\Repositories\TaskRepository;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;


class CollectAndDeliveryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Dropper $dropper)
    {
        $data = [];
        $data['product_cats']  =ProductCategory::all();
        $data['delivery_times']=DeliveryTime::all();
        $data['vehicles']      =Vehicle::all();
        // return view('User.collect_n_drop.collect_n_drop', compact('dropper'));
        return view('user.collect_n_deliver.collect_n_deliver',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.Dropper.Add_Dropper');
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

            $data['notes']              = $request->additional_note ?? null;
            $data['total_cost']         = $request->product_cost;
            $data['delivery_time_id']   = $request->delivery_time;
            $data['vehicle_id']         = $request->vahicle_id;
            $data['service_category_id']   = 2;

            $task = TaskRepository::saveTaskData($data);

            $task->products()->createMany($products);
            // $task->productCategories()->attach($request-> product_cats);

            // Send notification
            auth()->user()->notify(new TaskNetwork($task));

            
            DB::commit();


            Session::flash('success', 'Your task request is submitted!');
            return redirect()->route('collect_n_drop');

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            Session::flash('error', $e->getMessage());
            return redirect()->route('collect_n_drop');
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
