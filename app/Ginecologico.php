<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ginecologico extends Model
{
    protected $table = 'ginecologicos';

    protected $fillable = ['paciente_id','embarazo','abortos','periodoMestrual','tratamiento','observacion'];

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
