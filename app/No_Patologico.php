<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class No_Patologico extends Model
{
    protected $table = 'noPatologicos';

    protected $fillable = ['paciente_id','alcohol','tabaco','medicacion'];

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
