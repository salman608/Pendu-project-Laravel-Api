<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Repositories\CouponRepository;
use Illuminate\Http\Request;
use App\Contracts\CouponContract;

class CouponController extends Controller
{   


    public function __construct( )
    {
    }

    public function index(){
        return response()->json(['from'=> 'Api', 'data' => CouponRepository::list()]);
    }

    public function create(){
        // will move to store method

        $newcoupon = ['title' => 'New_Driver22', 'coupon_code' => 'ABCsA32243', 'discount_percent' => 5];

        $coupon = CouponRepository::store($newcoupon);
        return $coupon;
    }
}
