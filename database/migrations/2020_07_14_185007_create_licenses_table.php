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
            $table->string('license_number')->primary();
            $table->bigInteger('business_type_id');
            $table->bigInteger('entity_id');
            $table->bigInteger('applicant_details_id');
            $table->bigInteger('business_details_id');
            $table->timestamps();
        });

        Schema::create('license_histories', function (Blueprint $table) {
            $table->id();
            $table->string('license_number');
            $table->date('date_of_issue');
            $table->date('expiry_date');
            $table->bigInteger('application_id');
            $table->timestamps();
        });
//        $value = "AAAA111AA1";
//        DB::update("ALTER TABLE users AUTO_INCREMENT = $value;");
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
