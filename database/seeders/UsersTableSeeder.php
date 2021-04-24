<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //this is admin area
        DB::table('users')->insert([
            "name"=>'admin',
            "role_id"=>'1',
            "email"=>'admin@gmail.com',
            "phone" => '01638173361',
            "suburb" => 'suburb',
            "password"=>bcrypt(12345678)
        ]);

        //this is user area
        DB::table('users')->insert([
            "name"=>'user',
            "role_id"=>'2',
            "email"=>'user@gmail.com',
            "phone" => '01638173361',
            "suburb" => 'suburb',
            "password"=>bcrypt(12345678)
        ]);


        //this is user area
        DB::table('users')->insert([
            "name"=>'driver',
            "role_id"=>'3',
            "email"=>'driver@gmail.com',
            "phone" => '01638173361',
            "suburb" => 'suburb',
            "password"=>bcrypt(12345678)
        ]);
    }
}
