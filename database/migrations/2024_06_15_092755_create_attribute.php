<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttribute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->string('address');
            $table->string('location');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('email');
            $table->string('website');
            $table->string('logo');
            $table->string('slogan');
            $table->date('founded_on')->nullable();
            $table->mediumText('about')->nullable()->default('N/A');
            $table->mediumText('mission')->nullable()->default('N/A');
            $table->mediumText('vision')->nullable()->default('N/A');
            $table->mediumText('objectives')->nullable()->default('N/A');
            $table->mediumText('activites')->nullable()->default('activities');
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
        Schema::dropIfExists('attribute');
    }
}
