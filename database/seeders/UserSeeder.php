<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //this is admin area
        DB::table('users')->truncate();

        for($i = 1; $i <= 10; $i++){
            DB::table('users')->insert([
                "name"=>'user'.$i,
                "email"=>'user'.$i.'@gmail.com',
                "phone" => '018855443'.rand(10,50),
                "suburb" => 'suburb',
                "password"=>bcrypt('password'),
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
        }
    }
}
