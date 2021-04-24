<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
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
    }
}