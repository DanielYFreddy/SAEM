<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patologia extends Model
{
    protected $table = 'patologias';

    protected $fillable = ['sistema_id','nombre'];

    public function sistema()
    {
        return $this->belongsTo('App\Sistema');
    }

    public function pacientes()
    {
        return $this->belongsToMany('App\Paciente');
    }
}
