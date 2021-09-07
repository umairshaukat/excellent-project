<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver__payments', function (Blueprint $table) {
            $table->id();
            $table->integer('driver_id');
            $table->string('currency');
            $table->string('account');
            $table->string('payment_method');
            $table->string('payment_period');
            $table->string('payment_status');
            $table->string('widral_status');
            $table->float('total');
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
        Schema::dropIfExists('driver__payments');
    }
}
