<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DropperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        //this is admin area
        DB::table('droppers')->truncate();
        DB::table('dropper_service_category')->truncate();

        for($i = 1; $i <= 10; $i++){
            DB::table('droppers')->insert([
                "first_name"=>'mr.',
                "last_name"=>'dropper'.$i,
                "email"=>'dropper'.$i.'@gmail.com',
                "phone" => '018855443'.rand(10,50),
                "abn" => 'suburb',
                "vehicle_id" => rand(1,4),
                "password"=>bcrypt('password'),
                "rating"=>rand(2,5),
                "average_accuracy"=>rand(30,90),
                "success_rate"=> rand(30,90),
                "profile_image"=> "pro_driver".rand(1,3).".png",
                'created_at'        => now(),
                'updated_at'        => now()
            ]);

            DB::table('dropper_service_category')->insert([
                'dropper_id' => $i,
                'service_category_id' => rand(1,2)
            ]);

            DB::table('dropper_service_category')->insert([
                'dropper_id' => $i,
                'service_category_id' => 3
            ]);
        }

        for($i = 11; $i <= 15; $i++){
            DB::table('droppers')->insert([
                "first_name"=>'mr.',
                "last_name"=>'dropper'.$i,
                "email"=>'dropper'.$i.'@gmail.com',
                "phone" => '018855443'.rand(51, 99),
                "abn" => 'suburb',
                "vehicle_id" => rand(1,4),
                "dropper_group_id" => 3,
                "password"=>bcrypt('password'),
                "rating"=>5,
                "average_accuracy"=>rand(90,99),
                "success_rate"=> rand(90,99),
                "profile_image"=> "pro_driver".rand(1,3).".png",
                'created_at'        => now(),
                'updated_at'        => now()
            ]);

            DB::table('dropper_service_category')->insert([
                'dropper_id' => $i,
                'service_category_id' => rand(1,2)
            ]);

            DB::table('dropper_service_category')->insert([
                'dropper_id' => $i,
                'service_category_id' => 3
            ]);
        }
    }
}
