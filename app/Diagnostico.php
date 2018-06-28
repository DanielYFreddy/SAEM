<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnosticos';

    protected $fillable = ['id','paciente_id','diagnostico','tratamientoFarmacologico','evolucion','referenciaMedica','antecedentes','cirugias','traumaticos'];
}
