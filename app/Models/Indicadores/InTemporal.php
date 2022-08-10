<?php

namespace App\Models\Indicadores;

use Illuminate\Database\Eloquent\Model;

class InTemporal extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'sis_nnaj_id',
        'sis_tabla_id',
        'registro_id',
    ];
}
