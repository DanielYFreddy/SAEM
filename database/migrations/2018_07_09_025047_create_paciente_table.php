<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nombre');
            $table->string('cedula')->unique();
            $table->string('ocupacion');
            $table->string('nacionalidad');
            $table->date('fecha_nacimiento');
            $table->enum('genero',['Masculino','Femenino'])->default('Masculino');
            $table->string('region');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('movil');
            $table->string('email');
            $table->enum('estado_civil',['Soltero','Casado','Separado','Union Libre','Viudo'])->default('Soltero');
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
        Schema::dropIfExists('paciente');
    }
}
