<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
        // ======== Product category List=========
        public function index(){
            return view('admin.pages.product_cat.index');
          }

          // ========Product category create=========
          public function create(){
              return view('admin.pages.product_cat.create');
          }

          // ========Vehicle store=========
          public function store(Request $request){
              $request->validate([
                  'pcat_name'=>'required|max:255',

                ]);

               $pcategory=new ProductCat();
               $pcategory->pcat_name=$request->pcat_name;
               $pcategory->slug=Str::slug($request->pcat_name);
               $pcategory->save();
               return back();

          }

          // ========Product category edit=========
          public function edit(){
              return view('admin.pages.product_cat.edit');
          }

          // ======== Product category  update=========
          public function update(Request $request,$pcat_id){

            $pcategory=ProductCat::FindOrFail($pcat_id);
            $pcategory->pcat_name=$request->pcat_name;
            $pcategory->slug=Str::slug($request->pcat_name);
            $pcategory->save();
            return back();
          }

          // ========Product category delete=========
          public function delete($pcat_id){
             $pcategory=ProductCat::FiadOrFail($pcat_id)->delete();
             return back();
          }

          // ========Product category active=========
          public function active($pcat_id){

          }

          // ========Product category inactive=========
          public function inactive($pcat_id){

          }

          //========Product category Show API=======

          public function proCatList(){
              return response()->json(ProductCat::all(),200);
          }
}
