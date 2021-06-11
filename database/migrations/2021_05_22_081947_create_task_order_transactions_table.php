<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskOrderTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_order_transactions', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('task_order_id');
            $table->string('tran_id');
            $table->double('amount');
            $table->string('currency');
            $table->string('balance_transaction');
            $table->string('description');
            $table->string('card_id');
            $table->string('card_brand');
            $table->integer('card_exp_month');
            $table->integer('card_exp_year');
            $table->integer('card_last4');
            $table->string('receipt_url');
            $table->string('country');

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
        Schema::dropIfExists('task_order_transactions');
    }
}
