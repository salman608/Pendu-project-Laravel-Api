<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;
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
        $nowTimeDate = Carbon::now();

        \DB::table('delivery_times')->truncate();
        $delivery_times = collect([
            ['title' => 'ASAP', 'time' => Carbon::now()],
            ['title' => '4Hrs', 'time' => Carbon::now()->addHours(4)],
            ['title' => '6Hrs', 'time' => Carbon::now()->addHours(6)],
            ['title' => 'Same Day', 'time' => Carbon::now()->today()],
            ['title' => 'Next Day', 'time' => Carbon::now()->tomorrow()],
            ['title' => 'Set Later', 'time' => null],
        ]);
    
        $delivery_times->each(function($delivery_time){
            \DB::table('delivery_times')->insert([
                'title' => $delivery_time['title'],
                'slug' => Str::slug($delivery_time['title']),
                'time' => $delivery_time['time'],
            ]);
        });
    }
}
