<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vehicle Dummy Data
        \DB::table('vehicles')->truncate();

        // $url = url('/frontend/assets/images/Icons/')
        $vehicles = collect([
            ['title' => 'car','icon' => 'vehicle_car.svg','status'=>1],
            ['title' => 'Truck','icon' => 'vehicle_truck.svg','status'=>1],
            ['title' => 'Ute','icon' => 'vehicle_ute.svg','status'=>1],
            ['title' => 'Van','icon' => 'vehicle_van.svg','status'=>1],
        ]);

        $vehicles->each(function($vehicle){
            \DB::table('vehicles')->insert([
                'title' => $vehicle['title'],
                'icon' => $vehicle['icon'],
                'status'=>$vehicle['status'],
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
        });
    }
}
