<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMycompanyauthoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mycompanyauthorities', function (Blueprint $table) {
            $table->id();
            $table->string('mycompanyauthority_cancel_booking_time');
            $table->string('mycompanyauthority_Booking_address_defined_reigon');
            $table->string('mycompanyauthority_Booking_address_worldwide');
            $table->string('mycompanyauthority_TxtToLocal_username');
            $table->string('mycompanyauthority_TxtToLocal_key');
            $table->string('mycompanyauthority_Twilio_account');
            $table->string('mycompanyauthority_Twilio_token');
            $table->string('mycompanyauthority_From_number');
            $table->string('mycompanyauthority_Google_Maps_Api_keys');
            $table->string('mycompanyauthority_Payment_Info_Currency');
            $table->string('mycompanyauthority_Payment_method');
            $table->string('mycompanyauthority_Stripe_public_key');
            $table->string('mycompanyauthority_Stripe_server_key');
            $table->string('mycompanyauthority_PayPal_Client_ID');
            $table->string('mycompanyauthority_PayPal_Client_Secret');
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
        Schema::dropIfExists('mycompanyauthorities');
    }
}
