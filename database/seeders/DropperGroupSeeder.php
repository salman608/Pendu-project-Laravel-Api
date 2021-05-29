<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DropperGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // dropper_groups
        \DB::table('dropper_groups')->truncate();
        $dropper_groups = collect([
            ['title' => 'Rising', 'commission_rate' => 20],
            ['title' => 'Expert', 'commission_rate' => 15],
            ['title' => 'Pro', 'commission_rate' => 10],
        ]);
    
        $dropper_groups->each(function($dropper_group){
            \DB::table('dropper_groups')->insert([
                'title'             => $dropper_group['title'],
                'commission_rate'   => $dropper_group['commission_rate'],
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
        });


        // dropper_group_statuses
        \DB::table('dropper_group_statuses')->truncate();
        $experts_statuses = collect([
            'Priority notification of the tasks',
            'Low commission rate of 15%'
        ]);


        $experts_statuses = collect([
            [
                'title'             => 'Priority notification of the tasks', 
                'dropper_group_id'  =>  2
            ],
            [
                'title'             => 'Low commission rate of 15%', 
                'dropper_group_id'  =>  2
            ],
            [
                'title'             => 'Priority notification of the tasks.', 
                'dropper_group_id'  =>  3
            ],
            [
                'title'             => 'Profile is added to the home screen carousel.', 
                'dropper_group_id'  =>  3
            ],
            [
                'title'             => 'Low commission rate of 10%.', 
                'dropper_group_id'  =>  3
            ]
        ]);


        $experts_statuses->each(function($experts_status){
            \DB::table('dropper_group_statuses')->insert([
                'title'             => $experts_status['title'],
                'dropper_group_id'  => $experts_status['dropper_group_id'],
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
        });
        

    }
}
