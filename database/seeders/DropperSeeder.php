<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DropperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //this is admin area
        DB::table('droppers')->truncate();
        DB::table('droppers')->insert([
            "first_name"=>'mr.',
            "last_name"=>'dropper',
            "email"=>'dropper@gmail.com',
            "phone" => '01638173361',
            "abn" => 'suburb',
            "vehicle_id" => 123456,
            "password"=>bcrypt('password'),
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
