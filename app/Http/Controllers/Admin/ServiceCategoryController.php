<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    // ========Service  List=========
    public function index(){
        return view('admin.pages.service_category.index');
      }

      // ========Service  create=========
      public function create(){
          return view('admin.pages.service_category.create');
      }

      // ========Service  store=========
      public function store(Request $request){
          $request->validate([
              'title'=>'required|unique:services,title|max:255',
              'icon'=>'required',
            ]);

         //Service Image part
           $service_icon = $request->file('icon');
           $name_gen=hexdec(uniqid()).'.'.$service_icon->getClientOriginalExtension();
           Image::make($service_icon)->resize(270,270)->save('upload/service/'.$name_gen);
           $service_icon = 'upload/service/'.$name_gen;

           $service=new ServiceCategory();
           $service->title=$request->title;
           $service->slug=Str::slug($request->title);
           $service->icon=$service_icon;
           $service->save();
           return back();

      }

      // ========Service  edit=========
      public function edit(){
          return view('admin.pages.service_category.edit');
      }

      // ========Service  update=========
      public function update(Request $request,$service_id){

        $service=ServiceCategory::FindOrFail($service_id);

        //Service Image part
        $service_image = $request->file('icon');
        $name_gen=hexdec(uniqid()).'.'.$service_image->getClientOriginalExtension();
        Image::make($service_image)->resize(270,270)->save('upload/service/'.$name_gen);
        $service_icon = 'upload/service/'.$name_gen;


        $service->title=$request->title;
        $service->slug=Str::slug($request->title);
        $service->icon=$service_icon;
        $service->save();
        return back();
      }

      // ========Service  delete=========
      public function delete($service_id){
         $service=ServiceCategory::FiadOrFail($service_id)->delete();
         return back();
      }

      // ========Service  active=========
      public function active(){

      }

      // ========Service  inactive=========
      public function inactive(){

      }
}
