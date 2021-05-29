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

    public function applyCoupon($coupon){

        return $this->respondWithSuccess(
            'Coupon details is retrieved.',
            Coupon::where('coupon_code', $coupon)->get()
        );
    }
}
