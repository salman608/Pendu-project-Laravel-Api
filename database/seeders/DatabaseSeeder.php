<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         \App\Models\Category::factory(20)->create();
         \App\Models\Post::factory(20)->create();

        //database seeder for user table 
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);




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