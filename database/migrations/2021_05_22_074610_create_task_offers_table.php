<?php

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
            $table->integer('status')->default(0);
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
