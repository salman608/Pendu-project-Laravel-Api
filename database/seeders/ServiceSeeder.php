<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Service Dummy Data
        \DB::table('services')->truncate();
        $services = collect([
            ['title' => 'Shop and drop','icon' => 'shop_and_drop.png'],
            ['title' => 'Collect and drop','icon' => 'collect_and_drop.png'],
            ['title' => 'Mover','icon' => 'mover.png'],
        ]);

        $services->each(function($service){
            \DB::table('services')->insert([
                'title' => $service['title'],
                'slug' => Str::slug( $service['title']),
                'icon' => $service['icon'],
            ]);
        });
    }
}
