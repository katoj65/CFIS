<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldEmissionIdTableUserRecommendation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_recommendation', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('emission_id')->after('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_recommendation', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('emission_id')->after('id');
        });
    }
}
