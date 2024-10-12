<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsageFieldToCarbonEmission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carbon_emissions', function (Blueprint $table) {
            //
        $table->enum('usage',['lighting','cooking','freezing','heating'])->default('lighting')->after('source');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carbon_emissions', function (Blueprint $table) {
            //
            $table->enum('usage',['lighting','cooking','freezing','heating']);
        });
    }
}
