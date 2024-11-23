<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPerKillometerColumnOnVehicleCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicle_category', function (Blueprint $table) {
            //
        $table->integer('distance')->default(0)->after('consumption');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicle_category', function (Blueprint $table) {
            //
            $table->integer('distance')->default(0)->after('consumption');
        });
    }
}
