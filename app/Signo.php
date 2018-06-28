<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signo extends Model
{
    protected $table = 'signos';

    protected $fillable = ['paciente_id','presionArterial','frecuenciaCardiaca','frecuenciaRespiratoria','peso','talla'];
}
