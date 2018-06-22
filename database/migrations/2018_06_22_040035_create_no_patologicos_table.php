<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoPatologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noPatologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->enum('alcohol',['Mucho','Poco','Nunca'])->default('Nunca');
            $table->enum('tabaco',['Mucho','Poco','Nunca'])->default('Nunca');
            $table->enum('medicacion',['Mucho','Poco','Nunca'])->default('Nunca');

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
        Schema::dropIfExists('noPatologicos');
    }
}
