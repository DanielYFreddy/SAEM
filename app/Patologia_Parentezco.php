<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patologia_Parentezco extends Model
{
    protected $table = 'patologiasParentezcos';

    protected $fillable = ['id','paciente_id','patologia_id'];
}
