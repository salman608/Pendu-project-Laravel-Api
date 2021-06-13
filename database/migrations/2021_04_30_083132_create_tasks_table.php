<?php

use App\Models\Task;
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
            $table->string('task_id');
            $table->string('title');

            $table->string('image')->nullable();
            $table->string('from');
            $table->string('from_lat');
            $table->string('from_lng');
            $table->string('to');
            $table->string('to_lat');
            $table->string('to_lng');
            $table->string('notes')->nullable();
            
            $table->double('total_cost')->nullable();
            
            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('delivery_time_id');

            // 1 = shop & drop, 2 = collect & delivery, 3 = movers
            $table->unsignedBigInteger('service_category_id');
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->unsignedBigInteger('quote_dropper_id')->nullable();
            $table->unsignedBigInteger('offer_id')->nullable();
            
            $table->enum('task_type', [
                Task::TASK_SIMPLE,
                Task::TASK_QUOTE
            ])->default(Task::TASK_SIMPLE);

            $table->enum('request_status', [
                Task::REQUEST_RECEIVED,
                Task::REQUEST_REVIEW,
                Task::REQUEST_ONLINE,
                Task::REQUEST_ACCEPTED,
                Task::REQUEST_PROCESSING,
                Task::REQUEST_COMPLETED,
            ])->default(Task::REQUEST_PROCESSING);

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
