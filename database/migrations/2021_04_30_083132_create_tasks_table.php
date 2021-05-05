<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_no');
            $table->string('title');

            $table->double('total_cost');
            $table->double('delivery_cost');
            $table->string('image')->nullable();
            $table->string('shop_address');
            $table->string('delivery_address');
            $table->string('additional_notes');
            
            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('delivery_time_id');

            // 1 = shop & drop, 2 = collect & delivery, 3 = movers
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->unsignedBigInteger('dropper_id')->nullable();
            
            // 0 = accept pending, 1 = accepted, 2 = DELIVERED	
            $table->tinyInteger('status')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
