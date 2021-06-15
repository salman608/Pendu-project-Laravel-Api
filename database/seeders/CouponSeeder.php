<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
            ['title' => 'New_User', 'discount_percentage' => 2],
            ['title' => 'Eid_Offer', 'discount_percentage' => 3],
            ['title' => 'New_Year',  'discount_percentage' => 4],
        ]);

        $coupons->each(function($coupon){
                $now = Carbon::now();
                
            DB::table('coupons')->insert([
                'title'         => $coupon['title'],
                'promo_code'    => strtoupper(Str::random(8)),
                'details'       => "Lorem". rand(1,20) ." ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
                'discount_percentage'   => $coupon['discount_percentage'],
                'started_at'            => now(),
                'expired_at'            => $now->addDays(rand(7,20)),
                'created_at'            => now(),
                'updated_at'            => now()
            ]);
        });

        //this is admin area
        DB::table('coupon_infos')->truncate();
        for($i = 1; $i <= 10; $i++){
            DB::table('coupon_infos')->insert([
                "info"=>'ipsum dolor sit amet, consectetur adipiscing elit'.$i,
                "coupon_id"=> rand(1,3)
            ]);
        }
    }
}
