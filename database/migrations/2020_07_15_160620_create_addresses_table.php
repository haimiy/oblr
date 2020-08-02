<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('region_id');
            $table->timestamps();
        });

        Schema::create('addresses', function (Blueprint $table){
            $table->id();
            $table->bigInteger('addressable_id')->nullable();
            $table->string('addressable_type')->nullable();
            $table->unsignedInteger('region_id');
            $table->unsignedInteger('district_id');
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
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
        Schema::dropIfExists('addresses');
        Schema::dropIfExists('regions');
        Schema::dropIfExists('districts');
    }
}
