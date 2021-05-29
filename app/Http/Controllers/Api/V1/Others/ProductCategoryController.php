<?php

namespace App\Http\Controllers\Api\V1\Others;

use App\Http\Controllers\ApiController;
use App\Models\ProductCategory;

class ProductCategoryController extends ApiController
{
        
    public function index(){

       return $this->respondWithSuccess(
           'Product categories are retrieved.', 
           ProductCategory::all()
       );
    }
}
