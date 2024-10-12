<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisationProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisation_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignID('user_id')->constrained();
            $table->string('name');
            $table->enum('type_of_organisation',['business','ngo','government','other']);
            $table->string('business_type');
            $table->string('address');
            $table->string('tel');
            $table->string('email');
            $table->date('date_founded');
            $table->string('country_of_origin');
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
        Schema::dropIfExists('organisation_profiles');
    }
}
