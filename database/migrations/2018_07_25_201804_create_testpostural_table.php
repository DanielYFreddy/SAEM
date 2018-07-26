<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestposturalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testpostural', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->integer('movimiento_id')->unsigned();
            $table->enum('lado',['Izquierda','Derecha','Ninguno'])->default('Ninguno');

            $table->foreign('paciente_id')->references('id')->on('paciente');
            $table->foreign('movimiento_id')->references('id')->on('movimiento');
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
        Schema::dropIfExists('testpostural');
    }
}
