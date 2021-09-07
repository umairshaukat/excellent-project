<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyltdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myltds', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_street_address');
            $table->string('company_additional_address');
            $table->string('cmpany_city');
            $table->string('company_zip_code');
            $table->string('company_coutry');
            $table->string('company_phone');
            $table->string('vat_number');
            $table->string('vat_percentage');
            $table->string('bank_account_name');
            $table->string('bank_name');
            $table->string('bank_account_iban');
            $table->string('bank_account_number');
            $table->string('bank_account_short_code');
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
        Schema::dropIfExists('myltds');
    }
}
