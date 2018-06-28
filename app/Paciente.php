<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $table = 'pacientes';

    protected $fillable = ['nombre','cedula','ocupacion','nacionalidad','fecha_nacimiento','genero','region','direccion','telefono','movil','email','estado_civil'];

    public function signos()
    {
        return $this->hasMany('App\Signo');
    }

    public function noPatologicos()
    {
        return $this->hasMany('App\No_Patologico');
    }

    public function historialesObservaciones()
    {
        return $this->hasMany('App\Historial_Observacion');
    }

    public function ginecologicos()
    {
        return $this->hasMany('App\Ginecologico');
    }

    public function diagnosticos()
    {
        return $this->hasMany('App\Diagnostico');
    }

    public function actividadesFisicas()
    {
        return $this->hasMany('App\Actividad_Fisica');
    }
}
