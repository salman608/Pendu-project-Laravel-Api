<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_quotes', function (Blueprint $table) {
            $table->id();
            $table->double('offer_fee');
            $table->unsignedBigInteger('dropper_id');
            $table->unsignedBigInteger('task_id');
            $table->tinyInteger('quote_status')->unsigned()->default(0);
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
        Schema::dropIfExists('task_quotes');
    }
}
