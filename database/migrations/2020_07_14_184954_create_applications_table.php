<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('applicant_id');
            $table->bigInteger('entity_type_id');
            $table->bigInteger('business_type_id');
            $table->bigInteger('applicant_details_id');
            $table->bigInteger('business_details_id');
            $table->boolean('status');
            $table->enum('application_type', ['new', 'renewal']); //need license no
            $table->text('comment');
            $table->timestamps();
        });

        Schema::create('applicant_details', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->date('dob');
            $table->string('nationality');
            $table->bigInteger('address_id');
            $table->bigInteger('application_id');
            $table->timestamps();
        });

        Schema::create('business_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->bigInteger('address_id');
            $table->enum('address_status', ['surveyed', 'un-surveyed']);
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
        Schema::dropIfExists('applications');
        Schema::dropIfExists('applicant_details');
        Schema::dropIfExists('business_details');
        Schema::dropIfExists('applicant_details');
    }
}
