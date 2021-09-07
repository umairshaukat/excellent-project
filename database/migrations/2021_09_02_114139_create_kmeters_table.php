<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKmetersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kmeters', function (Blueprint $table) {
            $table->id();
            $table->integer('car_id');
            $table->string('pickup_rate');
            $table->string('next_mile');
            $table->string('next_pickup');
            $table->string('remaining_journey');
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
        Schema::dropIfExists('kmeters');
    }
}
