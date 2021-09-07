<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->biginteger('phone_no')->nullable();
            $table->string('email');
            $table->string('d_o_b');
            $table->string('time_zone');
            $table->string('image');
            $table->string('gender');
            $table->string('nationality');
            $table->string('preferred_service');
            $table->string('driver_licence_type');
            $table->string('add_info_disp');
            $table->string('add_info_client');
            $table->string('address_discription');
            $table->string('language');
            $table->string('driver_status');
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
        Schema::dropIfExists('drivers');
    }
}
