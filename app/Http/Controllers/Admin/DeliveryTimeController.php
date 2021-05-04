<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeliveryTime;
use Illuminate\Http\Request;
use Image;
use Carbon\Carbon;

class DeliveryTimeController extends Controller
{
    //======== Admin Dalivery Time List=======
    public function index(){
        return view('admin.pages.delivery_time.index');
     }

     //======== Admin Dalivery Time Create=======
     public function create(){
         return view('admin.pages.delivery_time.create');
     }

     //======== Admin Dalivery Time Store=======
     public function store(Request $request){

         $this->validate($request,[
             'type' => 'required',
             'icon' => 'required',
             'time' => 'required',
             ]);

     // ----Delivery Time Icon----
         $t_icon = $request->file('icon');
         $name_gen=hexdec(uniqid()).'.'.$t_icon->getClientOriginalExtension();
         Image::make($t_icon)->resize(270,270)->save('upload/deliveryTime/'.$name_gen);
         $img_icon = 'upload/deliveryTime/'.$name_gen;

         DeliveryTime::insert([
          'type'      =>$request->type,
          'icon'      =>$img_icon,
          'time'      =>$request->time,
          'created_at'=>Carbon::now(),

         ]);

         return redirect()->route('dtime.list');

     }

     //======== Admin Dalivery Time Edit=======
     public function edit(){
         return view('admin.pages.delivery_time.edit');
     }

     //======== Admin Dalivery Time Update=======
     public function update(Request $request,$time_id){
         $this->validate($request,[
             'type' => 'required',
             'icon' => 'required',
             'time' => 'required',
             ]);

     // ----Delivery Time Icon----
         $t_icon = $request->file('icon');
         $name_gen=hexdec(uniqid()).'.'.$t_icon->getClientOriginalExtension();
         Image::make($t_icon)->resize(270,270)->save('upload/deliveryTime/'.$name_gen);
         $img_icon = 'upload/deliveryTime/'.$name_gen;

         DeliveryTime::findOrFail($time_id)->update([
          'type'      =>$request->type,
          'icon'      =>$img_icon,
          'time'      =>$request->time,
          'created_at'=>Carbon::now(),

         ]);

         return redirect()->route('dtime.list');
     }

     //======== Admin Dalivery Time Delete=======
     public function delete($time_id){
         DeliveryTime::findOrFail($time_id)->delete();
         return back();

     }

     //======== Admin Dalivery Time Active=======
     public function active(){

     }

     //======== Admin Dalivery Time Inacrive=======
     public function inactive(){

     }
}
