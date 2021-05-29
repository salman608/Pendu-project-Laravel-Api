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
        DB::table('users')->insert([
            "name"=>'user',
            "email"=>'user@gmail.com',
            "phone" => '01638173361',
            "suburb" => 'suburb',
            "password"=>bcrypt('password'),
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
