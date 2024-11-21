<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserEmission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_emission', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('emission_activity');
            $table->string('type');
            $table->string('emitter');
            $table->integer('number_of_emitters');
            $table->integer('consumption_rate');
            $table->unsignedDecimal('usage_time', 8, 2);
            $table->unsignedDecimal('emission_factor',8,2);
            $table->unsignedDecimal('carbon_emission',8,2);
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
        Schema::dropIfExists('user_emission');
    }
}
