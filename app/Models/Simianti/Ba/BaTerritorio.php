<?php

namespace App\Models\Simianti\Ba;

use Illuminate\Database\Eloquent\Model;

class BaTerritorio extends Model
{
    protected $connection = 'simiantiguo';
    // protected $table = 'ge_nnaj_documento';
    // protected $primaryKey = 'id_nnaj';

    protected $fillable = [
        'id',
        'tipo',
        'nombre',
        'id_padre',
        'perimetro',
        'area',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'estado',
        'plan_75',
    ];
}
