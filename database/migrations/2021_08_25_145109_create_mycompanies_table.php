<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMycompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mycompanies', function (Blueprint $table) {
            $table->id();
            $table->string('mycompanyinfo_domain');
            $table->string('mycompanyinfo_campany_name');
            $table->string('mycompanyinfo_discription');
            $table->string('mycompanyinfo_timezone');
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
        Schema::dropIfExists('mycompanies');
    }
}
