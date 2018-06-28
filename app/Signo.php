<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signo extends Model
{
    protected $table = 'signos';

    protected $fillable = ['id','paciente_id','presionArterial','frecuenciaCardiaca','frecuenciaRespiratoria','peso','talla'];
}
