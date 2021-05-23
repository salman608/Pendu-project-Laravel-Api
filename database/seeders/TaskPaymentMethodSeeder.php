<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaskPaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        task_payment_methods

        \DB::table('task_payment_methods')->truncate();
        $payment_methods = collect([
            ['title' => 'Paypal'],
            ['title' => 'VISA'],
            ['title' => 'Master']
        ]);

        $payment_methods->each(function($method){
            \DB::table('task_payment_methods')->insert([
                'title' => $method['title']
            ]);
        });
    }
}
