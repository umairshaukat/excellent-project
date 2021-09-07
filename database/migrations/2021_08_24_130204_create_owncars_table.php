<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwncarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owncars', function (Blueprint $table) {
            $table->id();
            $table->string('owncar_class');
            $table->string('owncar_brand');
            $table->string('owncar_model');
            $table->string('owncar_color');
            $table->string('owncar_car_no_plate');
            $table->string('owncar_log_book_exp_date');
            $table->integer('owncar_log_book_doc_no');
            $table->string('owncar_log_book_photo')->nullable();
            $table->string('owncar_phv_licence_exp_date');
            $table->integer('owncar_phv_licence_doc_no');
            $table->string('owncar_phv_licence_photo')->nullable();
            $table->string('owncar_mot_licence_exp_date');
            $table->integer('owncar_mot_licence_doc_no');
            $table->string('owncar_mot_licence_photo')->nullable();
            $table->string('owncar_car_insurance_exp_date');
            $table->integer('owncar_car_insurance_doc_no');
            $table->string('owncar_car_insurance_photo')->nullable();

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
        Schema::dropIfExists('owncars');
    }
}
