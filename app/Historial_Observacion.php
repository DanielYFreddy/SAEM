<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial_Observacion extends Model
{
    protected $table = 'historialesObservaciones';

    protected $fillable = ['paciente_id','observaciones'];
}
