<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSourceIdOnEmissionSourceItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emission_source_items', function (Blueprint $table) {
            //
            $table->integer('source_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emission_source_items', function (Blueprint $table) {
            //
            $table->integer('source_id')->after('id');
        });
    }
}
