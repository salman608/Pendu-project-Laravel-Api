<?php

namespace App\Http\Controllers\Api\V1\Others;

use App\Http\Controllers\ApiController;
use App\Models\ServiceCategory;


class ServiceCategoryController extends ApiController
{
        
    public function index(){

       return $this->respondWithSuccess(
           'Service categories are retrieved.', 
           ServiceCategory::all()
        );
    }
}
