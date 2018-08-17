<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostico', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->string('diagnostico')->nullable($value = true);
            $table->string('tratamientoFarmacologico')->nullable($value = true);
            $table->string('evolucion')->nullable($value = true);
            $table->string('referenciaMedica')->nullable($value = true);
            $table->string('antecedentes')->nullable($value = true);
            $table->string('cirugias')->nullable($value = true);
            $table->string('traumaticos')->nullable($value = true);
            
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
        Schema::dropIfExists('diagnostico');
    }
}
