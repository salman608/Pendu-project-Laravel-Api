<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // \App\Models\User::factory(10)->create();
        //  \App\Models\Category::factory(20)->create();
        //  \App\Models\Post::factory(20)->create();

        // //database seeder for user table 
        // $this->call(UsersTableSeeder::class);
        $this->call(DropperSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ServiceCategorySeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(DeliveryTimeSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(DeliveryTimeSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');



        // {address: "Mirpur-1, Dhaka, Bangladesh", lat: 23.7956037, lng: 90.3536548}
        // {address: "Uttara Sector 11 Park, Dhaka, Bangladesh", lat: 23.8764744, lng: 90.39197949999999}

        // {address: "Savar New Market, 1340, Savar Union, Bangladesh", lat: 23.8506918, lng: 90.259203}
        // {address: "Dhanmondi 32 Road Bridge, Dhanmondi Bridge, Dhaka, Bangladesh", lat: 23.7509735, lng: 90.373582}

    }
}