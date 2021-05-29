<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
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
        DB::table('coupons')->truncate();
        $coupons = collect([
            ['title' => 'New_User', 'coupon_code' => 'ABC343', 'discount_price' => 20],
            ['title' => 'Eid_Offer', 'coupon_code' => 'ABC344', 'discount_price' => 30],
            ['title' => 'New_Year', 'coupon_code' => 'ABC344', 'discount_price' => 40],
        ]);

        $coupons->each(function($coupon){
            DB::table('coupons')->insert([
                'title' => $coupon['title'],
                'coupon_code' => $coupon['coupon_code'],
                'discount_price' => $coupon['discount_price'],
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
        });
    }
}
