<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMycompanyembededcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mycompanyembededcodes', function (Blueprint $table) {
            $table->id();
            $table->longText('mycompanyembededcode_Direct_booking_link');
            $table->longText('mycompanyembededcode_IFrame_Integration');
            $table->string('mycompanyembededcode_Phone');
            $table->string('mycompanyembededcode_Initial_GPS_Coordinates');
            $table->longText('mycompanyembededcode_Terms_Cond');
            $table->longText('mycompanyembededcode_Custom_CSS');
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
        Schema::dropIfExists('mycompanyembededcodes');
    }
}
