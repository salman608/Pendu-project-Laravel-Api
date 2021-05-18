<?php

namespace App\Repositories;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;


class CouponRepository  
{
    public function __construct()
    {
        # code...
    }

    public static function list()
    {
        return Coupon::all();
    }

    public static function store($newcoupon)
    {
        try {
            $coupon = new Coupon($newcoupon);
            $coupon->save();

            return $coupon;
        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }
}