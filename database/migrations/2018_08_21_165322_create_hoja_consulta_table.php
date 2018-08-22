<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHojaConsultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoja_consulta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->mediumText('motivoConsulta');
            $table->mediumText('evolucion')->nullable($value = true);
            $table->longText('evaluacionesFuncionales')->nullable($value = true);
            $table->integer('escalaDolor')->nullable($value = true);
            $table->longText('observaciones')->nullable($value = true);

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
        Schema::dropIfExists('hoja_consulta');
    }
}
