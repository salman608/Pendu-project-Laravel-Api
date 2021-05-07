<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeliveryTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DeliveryTime
        \DB::table('delivery_times')->truncate();
        $delivery_times = collect(['ASAP','4Hrs', '6Hrs', 'Same Day', 'Next Day']);
    
        $delivery_times->each(function($delivery_time){
            \DB::table('delivery_times')->insert([
                'title' => $delivery_time
            ]);
        });
    }
}
