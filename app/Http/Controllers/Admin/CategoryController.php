<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class CategoryController extends Controller
{
    // ========Service Caregory List=========
    public function index(){
      return view('admin.pages.service_category.index');
    }

    // ========Service Caregory create=========
    public function create(){
        return view('admin.pages.service_category.create');
    }

    // ========Service Caregory store=========
    public function store(Request $request){
        $request->validate([
            'cat_name'=>'required|unique:categories,cat_name|max:255',
            'cat_cover_image'=>'required',
          ]);

       //Category Image part
         $cat_image = $request->file('cat_cover_image');
         $name_gen=hexdec(uniqid()).'.'.$cat_image->getClientOriginalExtension();
         Image::make($cat_image)->resize(270,270)->save('upload/category/'.$name_gen);
         $img_cat = 'upload/category/'.$name_gen;

         $category=new Category();
         $category->cat_name=$request->cat_name;
         $category->slug=Str::slug($request->cat_name);
         $category->cat_cover_image=$img_cat;
         $category->save();
         return back();

    }

    // ========Service Caregory edit=========
    public function edit(){
        return view('admin.pages.service_category.edit');
    }

    // ========Service Caregory update=========
    public function update(Request $request,$cat_id){

      $category=Category::FindOrFail($cat_id);

      //Category Image part
      $cat_image = $request->file('cat_cover_image');
      $name_gen=hexdec(uniqid()).'.'.$cat_image->getClientOriginalExtension();
      Image::make($cat_image)->resize(270,270)->save('upload/category/'.$name_gen);
      $img_cat = 'upload/category/'.$name_gen;


      $category->cat_name=$request->cat_name;
      $category->slug=Str::slug($request->cat_name);
      $category->cat_cover_image=$img_cat;
      $category->save();
      return back();
    }

    // ========Service Caregory delete=========
    public function delete($cat_id){
       $category=Category::FiadOrFail($cat_id)->delete();
       return back();
    }

    // ========Service Caregory active=========
    public function active(){

    }

    // ========Service Caregory inactive=========
    public function inactive(){

    }

    // ========Service Caregory get all category api  =========
    public function getaAllCat(){
     return response()->json(Category::all(), 200);
    }


}
