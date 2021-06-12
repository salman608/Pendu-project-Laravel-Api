<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Task;
use App\Models\TaskProduct;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class TaskShopDropSeeder extends Seeder
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
                "task_id" => rand(100000000,999999999), 
                "title" => "Weekend party", 
                "from" => "Savar, Bangladesh", 
                "from_lat" => "23.8478798", 
                "from_lng" => "90.2575646", 
                "to" => "Uttara Sector 11 Park, Dhaka, Bangladesh", 
                "to_lat" => "23.8764744", 
                "to_lng" => "90.3919795", 
                "notes" => "asdfsd", 
                "total_cost" => 780, 
                "user_id" => 1, 
                "delivery_time_id" => 3, 
                "service_category_id" => 1, 
                "task_type" =>  Task::TASK_SIMPLE,
                "request_status" => Task::REQUEST_PROCESSING,
                "created_at" => now(), 
                "updated_at" => now()
            ],

            [
                'task_id' => rand(100000000,999999999), 
                'title' => 'Dinner groceries',
                'from' => 'Sirajganj, Bangladesh',
                'from_lat' => '24.4526459',
                'from_lng' => '89.6816208',
                'to' => 'Sylhet, Bangladesh',
                'to_lat' => '24.8949294',
                'to_lng' => '91.8687063',
                'notes' => 'erer',
                'total_cost' => 894,
                'user_id' => 1,
                "delivery_time_id" => 2, 
                "service_category_id" => 1, 
                "task_type" =>  Task::TASK_SIMPLE,
                "request_status" => Task::REQUEST_PROCESSING,
                "created_at" => now(), 
                "updated_at" => now()
            ],
            [
                "task_id" => rand(100000000,999999999), 
                "title" => "Buy some groceries for me", 
                "from" => "Sirajganj, Bangladesh", 
                "from_lat" => "24.4526459", 
                "from_lng" => "89.6816208", 
                "to" => "Dhaka New Market, Mirpur Road, Dhaka, Bangladesh", 
                "to_lat" => "23.7331937", 
                "to_lng" => "90.3837664", 
                "notes" => "sdfds", 
                "total_cost" => 560, 
                "user_id" => 1, 
                "delivery_time_id" => 2, 
                "service_category_id" => 1, 
                "task_type" =>  Task::TASK_SIMPLE,
                "request_status" => Task::REQUEST_PROCESSING,
                "created_at" => now(), 
                "updated_at" => now()
            ]      
        ]);

        $shop_drop->each(function($task){
            $new_task = Task::create($task);

            $new_task->products()->save(new TaskProduct([
                "name" => "Apple", 
                "price" => rand(50,480), 
                "qty" => rand(1,20),
            ]));
            $new_task->products()->save(new TaskProduct([
                "name" => "Chips", 
                "price" => rand(50,480), 
                "qty" => rand(1,20),
            ]));
            $new_task->products()->save(new TaskProduct([
                "name" => "Juice", 
                "price" => rand(50,480), 
                "qty" => rand(1,20),
            ]));
        });


            // "amount": 90,
            // "task_id": 2,
            // "dropper_id": 1,
            // "status": "Pending",
            // "accepted_at": null,

            DB::table('task_offers')->truncate();

            for($i = 1; $i <= 10; $i++){
                DB::table('task_offers')->insert([
                    'task_id' => rand(1,3),
                    'dropper_id' => rand(1,10),
                    'amount'=>rand(100, 600)
                ]);
            }

        // Collect & Delivery
        // Movers
    }
}
