<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosicionMovimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posicion_movimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('posicion_id')->unsigned();
            $table->integer('movimiento_id')->unsigned();

            $table->foreign('posicion_id')->references('id')->on('posicion');
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
        Schema::dropIfExists('posicion_movimiento');
    }
}
