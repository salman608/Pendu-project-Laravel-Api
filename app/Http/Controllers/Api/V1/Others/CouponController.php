<?php
namespace App\Http\Controllers\Api\V1\Others;

use App\Models\Coupon;
use App\Repositories\CouponRepository;
use App\Http\Controllers\ApiController;

class CouponController extends ApiController
{   


    public function __construct( )
    {
    }

    public function index(){
        $coupons = Coupon::all();

        return $this->respondWithSuccess(
            'All coupons are retrieved.',
            $coupons
        );
    }

    public function show($id){

        $coupon = Coupon::with('info')->where('id', $id)->first();

        return $this->respondWithSuccess(
            'Coupon details is retrieved.',
            $coupon
        );
    }
}
