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
            $table->unsignedBigInteger('task_order_id');
            $table->integer('review_by')->default(1); // 1 user, 2 dropper
            $table->integer('rating');
            $table->integer('accuracy');
            $table->string('review');
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
