<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGinecologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ginecologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->enum('embarazo',['Si','No'])->default('No');
            $table->enum('abortos',['Si','No'])->default('No');
            $table->enum('periodoMestrual',['Si','No'])->default('No');
            $table->enum('tratamiento',['Si','No'])->default('No');
            $table->string('observacion');

            $table->foreign('paciente_id')->references('id')->on('pacientes');
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
        Schema::dropIfExists('ginecologicos');
    }
}
