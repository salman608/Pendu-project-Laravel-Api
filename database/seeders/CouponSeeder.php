<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // Coupon Dummy Data
        \DB::table('coupons')->truncate();
        $coupons = collect([
            ['title' => 'New_User', 'coupon_code' => 'ABC343', 'discount_percent' => 20],
            ['title' => 'Eid_Offer', 'coupon_code' => 'ABC344', 'discount_percent' => 30],
            ['title' => 'New_Year', 'coupon_code' => 'ABC344', 'discount_percent' => 40],
        ]);

        $coupons->each(function($coupon){
            \DB::table('coupons')->insert([
                'title' => $coupon['title'],
                'coupon_code' => $coupon['coupon_code'],
                'discount_percent' => $coupon['discount_percent']
            ]);
        });
    }
}
