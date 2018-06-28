<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad_Fisica extends Model
{
    protected $table = 'actividadesFisicas';

    protected $fillable = ['paciente_id','nivelActividad','actividadFisica'];

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
