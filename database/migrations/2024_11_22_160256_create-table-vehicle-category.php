<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVehicleCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_category', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('fuel_type');
            $table->unsignedDecimal('consumption',8,2);
            $table->unsignedDecimal('emission_factor',8,3);
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
        Schema::dropIfExists('vehicle_category');
    }
}
