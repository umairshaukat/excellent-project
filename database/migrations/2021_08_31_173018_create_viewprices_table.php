<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewpricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viewprices', function (Blueprint $table) {
            $table->id();
            $table->integer('region_id');
            $table->string('car_name');
            $table->string('min_trip_price');
            $table->string('hourly_price');
            $table->string('min_hours_to_book');
            $table->string('max_hours_to_book');
            $table->string('meet_and_greet');
            $table->string('child_seat_price');
            $table->string('millage_price_id');
            $table->string('km_price_id');
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
        Schema::dropIfExists('viewprices');
    }
}
