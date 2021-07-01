<?php

use App\Models\TaskOffer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_offers', function (Blueprint $table) {
            $table->id();
            
            $table->double('amount');
            $table->unsignedBigInteger('task_id');
            $table->unsignedBigInteger('dropper_id');
            

            $table->enum('status', [
                TaskOffer::STATUS_PENDING,
                TaskOffer::STATUS_CONFIRMED,
                TaskOffer::STATUS_IN_PROGRESS,
                TaskOffer::STATUS_STARTED,
                TaskOffer::STATUS_SHOP_COMPLETED,
                TaskOffer::STATUS_DELIVERED,
                TaskOffer::STATUS_COMPLETED,
            ])->default(TaskOffer::STATUS_PENDING);
            
            // For Timeline
            // Driving to pickup if Confirmed
            // Shopping started if In Progress
            // Start delivery if 


            $table->timestamp('accepted_at')->nullable();
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
        Schema::dropIfExists('task_offers');
    }
}
