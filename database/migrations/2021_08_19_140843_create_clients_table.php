<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->biginteger('phone_no')->nullable();
            $table->string('email');
            $table->string('discount');
            $table->string('gender');
            $table->string('language');
            $table->string('payment_method');
            $table->string('currency');
            $table->integer('booking_price_instant')->default('0');
            $table->integer('booking_price_never_show')->default('0');
            $table->integer('send_driver_details_by_email')->default('0');
            $table->integer('send_driver_details_by_sms')->default('0');
            $table->integer('send_driver_gps_by_email')->default('0');
            $table->integer('send_driver_gps_by_sms')->default('0');
            $table->string('account_status');
            $table->integer('company_id');
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
        Schema::dropIfExists('clients');
    }
}
