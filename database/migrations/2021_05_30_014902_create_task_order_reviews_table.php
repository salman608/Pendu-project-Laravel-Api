<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskOrderReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_order_reviews', function (Blueprint $table) {
            $table->id();
            $table->morphs('reviewable');
            $table->unsignedBigInteger('task_order_id');
            $table->integer('rating');
            $table->integer('accuracy');
            $table->string('review')->nullable();
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
        Schema::dropIfExists('task_order_reviews');
    }
}
