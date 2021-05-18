<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Contracts\CouponContract;

class CouponController extends Controller
{   

    protected $couponRepository;

    public function __construct(CouponContract $couponRepository)
    {
        $this->couponRepository = $couponRepository;
    }

    public function index(){
        $data =  $this->couponRepository->listCoupons();

        return response()->json(['from'=> 'Api', 'data' => $data]);
    }

    public function create(){
        // will move to store method

        $newcoupon = ['title' => 'New_Driver22', 'coupon_code' => 'ABCsA32243', 'discount_percent' => 5];

        $coupon = $this->couponRepository->createCoupon($newcoupon);

        return $coupon;
    }
}
