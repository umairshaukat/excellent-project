<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_cars', function (Blueprint $table) {
            $table->id();
            $table->integer('driver_id');
            $table->string('car_brand');
            $table->string('car_model');
            $table->string('car_color');
            $table->string('car_no_plate');
            $table->biginteger('driver_licence_no');
            $table->string('coverd_area');
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
        Schema::dropIfExists('driver_cars');
    }
}
