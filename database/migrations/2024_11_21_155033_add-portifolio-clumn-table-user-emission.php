<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPortifolioClumnTableUserEmission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_emission', function (Blueprint $table) {

            //
            $table->enum('portifolio',['true','false'])->default('false')->after('carbon_emission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_emission', function (Blueprint $table) {
            //
            $table->enum('portifolio',['true','false'])->default('false')->after('carbon_emission');
        });
    }
}
