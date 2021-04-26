<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Image;

class VehicleController extends Controller
{
    // ======== Vehicle List=========
    public function index(){
        return view('admin.pages.vehicle.index');
      }

      // ========Vehicle create=========
      public function create(){
          return view('admin.pages.vehicle.create');
      }

      // ========Vehicle store=========
      public function store(Request $request){
          $request->validate([
              'vehicle_name'=>'required|unique:categories,vehicle_name|max:255',
              'vehicle_image'=>'required',
            ]);

         //Vehicle Image part
           $vehicle_image = $request->file('vehicle_image');
           $name_gen=hexdec(uniqid()).'.'.$vehicle_image->getClientOriginalExtension();
           Image::make($vehicle_image)->resize(270,270)->save('upload/vehicle/'.$name_gen);
           $vehicle_image = 'upload/vehicle/'.$name_gen;

           $vehicle=new Vehicle();
           $vehicle->vehicle_name=$request->vehicle_name;
           $vehicle->slug=Str::slug($request->vehicle_name);
           $vehicle->vehicle_image=$vehicle_image;
           $vehicle->save();
           return back();

      }

      // ========Vehicle edit=========
      public function edit(){
          return view('admin.pages.vehicle.edit');
      }

      // ======== Vehicle update=========
      public function update(Request $request,$vehicle_id){

        $vehicle=Vehicle::FindOrFail($vehicle_id);

        //Vehicle Image part
        $vehicle_image = $request->file('vehicle_image');
        $name_gen=hexdec(uniqid()).'.'.$vehicle_image->getClientOriginalExtension();
        Image::make($vehicle_image)->resize(270,270)->save('upload/vehicle/'.$name_gen);
        $vehicle_image = 'upload/vehicle/'.$name_gen;


        $vehicle->vehicle_name=$request->vehicle_name;
        $vehicle->slug=Str::slug($request->vehicle_name);
        $vehicle->vehicle_image=$vehicle_image;
        $vehicle->save();
        return back();
      }

      // ========Service Vehicle delete=========
      public function delete($vehicle_id){
         $vehicle=Vehicle::FiadOrFail($vehicle_id)->delete();
         return back();
      }

      // ========Service Vehicle active=========
      public function active(){

      }

      // ========Service Vehicle inactive=========
      public function inactive(){

      }
}
