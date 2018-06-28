<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $table = 'pacientes';

    protected $fillable = ['nombre','cedula','ocupacion','nacionalidad','fecha_nacimiento','genero','region','direccion','telefono','movil','email','estado_civil'];

    
}
