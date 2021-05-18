<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        //  \App\Models\Category::factory(20)->create();
        //  \App\Models\Post::factory(20)->create();

        // //database seeder for user table 
        // $this->call(UsersTableSeeder::class);
        $this->call(DropperSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(DeliveryTimeSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(DeliveryTimeSeeder::class);






    }
}