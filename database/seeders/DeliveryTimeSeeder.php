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
            ['title' => 'ASAP', 'icon'=>'ASAP.svg','time' => Carbon::now()],
            ['title' => '4Hrs', 'icon'=>'4hrs.png','time' => Carbon::now()->addHours(4)],
            ['title' => '6Hrs', 'icon'=>'6hrs.png','time' => Carbon::now()->addHours(6)],
            ['title' => 'Same Day', 'icon'=>'same day.svg','time' => Carbon::now()->today()],
            ['title' => 'Next Day', 'icon'=>'next_day.png','time' => Carbon::now()->tomorrow()],
            ['title' => 'Set Later', 'icon'=>'set_later.png','time' => null],
        ]);

        $delivery_times->each(function($delivery_time){
            \DB::table('delivery_times')->insert([
                'title' => $delivery_time['title'],
                'slug' => Str::slug($delivery_time['title']),
                'time' => $delivery_time['time'],
                'icon' => $delivery_time['icon'],
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
        });
    }
}
