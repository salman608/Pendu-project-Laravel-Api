<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TaskCollectDeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // shop & drop
        // https://jsontophp.com/
        // https://wtools.io/convert-json-to-php-array
        \DB::table('tasks')->truncate();
        $shop_drop = collect([
            [
                "task_id" => Str::random(12), 
                "title" => "Weekend party", 
                "from" => "Savar, Bangladesh", 
                "from_lat" => "23.8478798", 
                "from_lng" => "90.2575646", 
                "to" => "Uttara Sector 11 Park, Dhaka, Bangladesh", 
                "to_lat" => "23.8764744", 
                "to_lng" => "90.3919795", 
                "notes" => "asdfsd", 
                "total_cost" => 34343, 
                "user_id" => 1, 
                "delivery_time_id" => 3, 
                "service_category_id" => 1, 
                "task_type" =>  Task::TASK_SIMPLE,
                "request_status" => Task::REQUEST_ONLINE,
                "created_at" => now(), 
                "updated_at" => now()
            ],

            [
                'task_id' => Str::random(12), 
                'title' => 'Dinner groceries',
                'from' => 'Sirajganj, Bangladesh',
                'from_lat' => '24.4526459',
                'from_lng' => '89.6816208',
                'to' => 'Sylhet, Bangladesh',
                'to_lat' => '24.8949294',
                'to_lng' => '91.8687063',
                'notes' => 'erer',
                'total_cost' => 343,
                'user_id' => 1,
                "delivery_time_id" => 2, 
                "service_category_id" => 1, 
                "task_type" =>  Task::TASK_SIMPLE,
                "request_status" => Task::REQUEST_ONLINE,
                "created_at" => now(), 
                "updated_at" => now()
            ],
            [
                "task_id" => Str::random(12), 
                "title" => "Birthday Party", 
                "from" => "Sirajganj, Bangladesh", 
                "from_lat" => "24.4526459", 
                "from_lng" => "89.6816208", 
                "to" => "Dhaka New Market, Mirpur Road, Dhaka, Bangladesh", 
                "to_lat" => "23.7331937", 
                "to_lng" => "90.3837664", 
                "notes" => "sdfds", 
                "total_cost" => 343, 
                "user_id" => 1, 
                "delivery_time_id" => 2, 
                "service_category_id" => 1, 
                "task_type" =>  Task::TASK_SIMPLE,
                "request_status" => Task::REQUEST_ONLINE,
                "created_at" => now(), 
                "updated_at" => now()
            ]      
        ]);

        $shop_drop->each(function($task){
            \DB::table('tasks')->insert($task);
        });








        // Collect & Delivery


        // Movers


    }
}
