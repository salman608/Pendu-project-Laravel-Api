<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_checkouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_id');
            $table->unsignedBigInteger('task_offer_id');
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->unsignedBigInteger('payment_method_id');
            $table->double('sub_total')->default(0);
            $table->double('delivery_fee')->default(0);
            $table->double('service_fee')->default(0);
            $table->double('promo_discount')->default(0);
            $table->double('total')->default(0);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('task_checkouts');
    }
}
