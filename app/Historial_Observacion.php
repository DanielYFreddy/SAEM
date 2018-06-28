<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial_Observacion extends Model
{
    protected $table = 'historialesObservaciones';

    protected $fillable = ['paciente_id','observaciones'];

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
