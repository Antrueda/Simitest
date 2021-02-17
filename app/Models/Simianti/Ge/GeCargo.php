<?php

namespace App\Models\Simianti\Ge;

use Illuminate\Database\Eloquent\Model;

class GeCargo extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'ge_cargo';
    protected $primaryKey = 'id_cargo';

    protected $fillable = [
        'id_cargo',
        'id_dependencia',
        'nombre_cargo',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'estado',
    ];
}
