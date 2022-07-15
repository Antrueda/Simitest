<?php

namespace App\Models\Simianti\Ped;

use Illuminate\Database\Eloquent\Model;

class GeGrupo extends Model
{
    protected $connection = 'simiantiguo';
     protected $table = 'ge_grupo';
   
     protected $fillable = [
        'nombre',       
    ];
}
