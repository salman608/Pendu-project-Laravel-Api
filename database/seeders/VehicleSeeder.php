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
        $vehicles = collect([
            ['title' => 'Bike','icon' => 'bike.png','status'=>1],
            ['title' => 'car','icon' => 'car.png','status'=>1],
            ['title' => 'Track','icon' => 'track.png','status'=>1],
            ['title' => 'Ute','icon' => 'utte.png','status'=>1],
            ['title' => 'Van','icon' => 'van.png','status'=>1],
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
