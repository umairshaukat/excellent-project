<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllowcompanythingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allowcompanythings', function (Blueprint $table) {
            $table->id();
            $table->string('allowmycompanythings_Save_card');
            $table->string('allowmycompanythings_Charge_client_percentage');
            $table->string('allowmycompanythings_Send_email');
            $table->string('allowmycompanythings_Send SMS');
            $table->string('allowmycompanythings_send_Confirmation_Email_to_user');
            $table->string('allowmycompanythings_send_Confirmation_sms_to_user');
            $table->string('allowmycompanythings_When_user_send_contact');
            $table->string('allowmycompanythings_Source_email');
            $table->string('allowmycompanythings_Company_name');
            $table->string('allowmycompanythings_Company_address');
            $table->string('allowmycompanythings_Additional_address');
            $table->string('allowmycompanythings_Driver_Email');
            $table->string('allowmycompanythings_Driver_SMS');
            $table->string('allowmycompanythings_Client_Email');
            $table->string('allowmycompanythings_Client_SMS');
            $table->string('allowmycompanythings_bid_Email');
            $table->string('allowmycompanythings_bid_sms');
            $table->string('allowmycompanythings_reminder_to_the_Customer');
            $table->string('allowmycompanythings_Email_reminder_Customer');
            $table->string('allowmycompanythings_sms_reminder_Customer');
            $table->string('allowmycompanythings_reminder_to_the_Driver');
            $table->string('allowmycompanythings_Email_reminder_Driver');
            $table->string('allowmycompanythings_sms_reminder_Driver');
            $table->string('allowmycompanythings_finished_booking_driver_review');
            $table->integer('mycompanyinfo_id');
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
        Schema::dropIfExists('allowcompanythings');
    }
}
