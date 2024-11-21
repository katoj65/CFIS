<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEmissionRecommendation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emission_recommendation', function (Blueprint $table) {
            $table->id();
            $table->string('emission_activity');
            $table->string('type');
            $table->string('emitter');
            $table->unsignedDecimal('emission_level',8,2);
            $table->mediumText('action');
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
        Schema::dropIfExists('emission_recommendation');
    }
}
