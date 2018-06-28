<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patologia_Heredofamiliar extends Model
{
    protected $table = 'patologiasHeredofamiliares';

    protected $fillable = ['id','paciente_id','patologia_id'];
}
