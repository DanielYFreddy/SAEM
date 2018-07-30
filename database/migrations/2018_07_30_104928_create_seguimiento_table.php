<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->mediumText('motivoConsulta');
            $table->mediumText('DXFT')->nullable($value = true);
            $table->longText('observaciones')->nullable($value = true);
            $table->integer('escalaDolor')->nullable($value = true);
            $table->mediumText('tratamiento')->nullable($value = true);
            $table->mediumText('parametros')->nullable($value = true);
            $table->mediumText('evolucion')->nullable($value = true);

            $table->foreign('paciente_id')->references('id')->on('paciente');
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
        Schema::dropIfExists('seguimiento');
    }
}
