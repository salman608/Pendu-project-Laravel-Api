<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\DeliveryTime;
use App\Models\ProductCategory;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;
use Session;

class ShopAndDropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['product_cats']=ProductCategory::all();
        $data['delivery_times']=DeliveryTime::all();

        return view('User.shop_n_drop.shop_n_drop',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('User.Dropper.Add_Dropper');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        // $products           =  json_decode($request->products,true);
        // var_dump($products);
        // return true;

        // return $request-> product_cats;
        // "title": null,
        // "product_cats": ["3","4"],
        //  "additional_note": null,
        // "product_cost": null,
        // "delivery_time": "4",

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

            $task = TaskRepository::saveShopDropData($data);

            $task->products()->createMany($products);
            $task->productCategories()->attach($request-> product_cats);

            DB::commit();

            Session::flash('success', 'Your task request is submitted!'); 
            return redirect()->route('shop_n_drop');
            
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            Session::flash('error', 'Your task request is failed!'); 
            return redirect()->route('shop_n_drop');
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
