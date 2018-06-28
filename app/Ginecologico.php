<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ginecologico extends Model
{
    protected $table = 'ginecologicos';

    protected $fillable = ['id','paciente_id','embarazo','abortos','periodoMestrual','tratamiento','observacion'];
}
