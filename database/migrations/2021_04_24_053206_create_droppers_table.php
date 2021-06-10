<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDroppersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('droppers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('password');
            $table->string('abn');
            $table->double('balance')->default(0);
            $table->integer('vehicle_id');
            $table->unsignedBigInteger('dropper_group_id')->default(1);
            $table->string('license_front')->nullable();
            $table->string('license_back')->nullable();
            $table->string('profile_image')->nullable();
            $table->double('rating')->nullable();
            $table->integer('average_accuracy')->nullable();
            $table->integer('success_rate')->nullable();

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
        Schema::dropIfExists('droppers');
    }
}
