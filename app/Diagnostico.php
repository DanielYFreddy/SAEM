<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnosticos';

    protected $fillable = ['paciente_id','diagnostico','tratamientoFarmacologico','evolucion','referenciaMedica','antecedentes','cirugias','traumaticos'];
}
