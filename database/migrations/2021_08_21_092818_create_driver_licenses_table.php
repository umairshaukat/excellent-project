<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_licenses', function (Blueprint $table) {
            $table->id();
            $table->integer('driver_id');
            $table->string('driver_licence_exp_date');
            $table->string('doc_no');
            $table->string('front_photo');
            $table->string('back_photo');
            $table->string('pco_licence_exp_date');
            $table->string('pco_doc_no');
            $table->string('pco_photo');
            $table->string('insurance_photo');
            $table->string('insurance_no');
            $table->string('insurance_expire');
            $table->string('passport_no');
            $table->string('passport_exp_date');
            $table->string('passport_photo');
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
        Schema::dropIfExists('driver_licenses');
    }
}
