<?php

use App\Models\TaskOrder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_orders', function (Blueprint $table) {
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
            
            
            $table->enum('status', [
                TaskOrder::STATUS_ASSIGNED,
                TaskOrder::STATUS_IN_PROGRESS,
                TaskOrder::STATUS_COLLECTED,
                TaskOrder::STATUS_DELIVERED,
            ])->default(TaskOrder::STATUS_ASSIGNED);
            
            
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
