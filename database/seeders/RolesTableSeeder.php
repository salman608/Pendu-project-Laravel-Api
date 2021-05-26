<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
    //admin area
    DB::table('roles')->insert([
        "name"=>'admin',
        'created_at'        => now(),
        'updated_at'        => now()
    ]);

    //user area
    DB::table('roles')->insert([
        "name"=>'user',
        'created_at'        => now(),
        'updated_at'        => now()
    ]);


    //Driver area
    DB::table('roles')->insert([
        "name"=>'driver',
        'created_at'        => now(),
        'updated_at'        => now()
    ]);


    }
}
