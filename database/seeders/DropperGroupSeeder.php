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


        // dropper_group_rules
        \DB::table('dropper_group_rules')->truncate();
        $group_rules = collect([
            // Rising
            [
                'title'             => 'Rating - 3-5 Star rating', 
                'dropper_group_id'  =>  1
            ],
            [
                'title'             => 'Minimum AOA - 60%', 
                'dropper_group_id'  =>  1
            ],
            [
                'title'             => 'Successful completion - 60%', 
                'dropper_group_id'  =>  1
            ],
            [
                'title'             => 'Minimum monthly Total Tasks - 0', 
                'dropper_group_id'  =>  1
            ],

            // Experts
            [
                'title'             => 'Rating - 4-5 Star rating', 
                'dropper_group_id'  =>  2
            ],
            [
                'title'             => 'Minimum AOA - 80%', 
                'dropper_group_id'  =>  2
            ],
            [
                'title'             => 'Successful completion - 80%', 
                'dropper_group_id'  =>  2
            ],
            [
                'title'             => 'Minimum monthly Total Tasks - 50', 
                'dropper_group_id'  =>  2
            ],
            // Pro
            [
                'title'             => 'Rating - 4.5-5 Star rating', 
                'dropper_group_id'  =>  3
            ],
            [
                'title'             => 'Minimum AOA - 90% or above', 
                'dropper_group_id'  =>  3
            ],
            [
                'title'             => 'Successful completion - 90% or above', 
                'dropper_group_id'  =>  3
            ],
            [
                'title'             => 'Minimum monthly Total Tasks - 100', 
                'dropper_group_id'  =>  3
            ],
        ]);

        $group_rules->each(function($group_rule){
            \DB::table('dropper_group_rules')->insert([
                'title'             => $group_rule['title'],
                'dropper_group_id'  => $group_rule['dropper_group_id'],
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
        });
    }
}
