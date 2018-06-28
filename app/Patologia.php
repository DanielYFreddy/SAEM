<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patologia extends Model
{
    protected $table = 'patologias';

    protected $fillable = ['id','sistema_id','nombre'];
}
