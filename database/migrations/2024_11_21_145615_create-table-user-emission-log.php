<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserEmissionLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_emission_log', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('emission_id');
            $table->string('emission_activity');//E.g energy consumption
            $table->string('type');//E.g type electricity(Hydro, solar)
            $table->string('emitter');//Emitting activity such as lighting cooking
            $table->unsignedDecimal('annual_emission',8,2);
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
        Schema::dropIfExists('user_emission_log');
    }
}
