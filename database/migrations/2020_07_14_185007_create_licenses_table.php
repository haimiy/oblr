<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->string('license_number');
            $table->bigInteger('business_type_id');
            $table->bigInteger('entity_id');
            $table->timestamps();
        });

        Schema::create('licenses_history', function (Blueprint $table) {
            $table->id();
            $table->date('date_of_issue');
            $table->date('expiry_date');
            $table->bigInteger('application_id');
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
        Schema::dropIfExists('licenses');
        Schema::dropIfExists('licenses_history');
    }
}
