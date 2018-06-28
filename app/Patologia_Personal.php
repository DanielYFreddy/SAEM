<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patologia_Personal extends Model
{
 	protected $table = 'patologiasPersonales';

    protected $fillable = ['id','paciente_id','patologia_id'];
}
