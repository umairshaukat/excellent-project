<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMycompanylogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mycompanylogos', function (Blueprint $table) {
            $table->id();
            $table->string('mycompanylogos_Admin_Logo');
            $table->string('mycompanylogos_Login_Register_Logo');
            $table->string('mycompanylogos_Invoice_Logo');
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
        Schema::dropIfExists('mycompanylogos');
    }
}
