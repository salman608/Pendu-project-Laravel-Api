<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCat;
use Illuminate\Http\Request;


class ProductCategoryController extends Controller
{

          public function proCatList(){
              return response()->json(ProductCat::all(),200);
          }
}
