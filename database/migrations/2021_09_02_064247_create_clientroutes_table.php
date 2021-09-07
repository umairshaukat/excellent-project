<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientroutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientroutes', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->string('from_address');
            $table->string('from_radius');
            $table->string('from_display_name');
            $table->string('to_address');
            $table->string('to_radius');
            $table->string('to_display_name');
            $table->string('pickup_tick_for_both');
            $table->string('car_servces');
            $table->string('passengers');
            $table->string('laguage');
            $table->string('price');
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
        Schema::dropIfExists('clientroutes');
    }
}
