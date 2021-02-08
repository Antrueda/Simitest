<?php

namespace App\Models\Simianti\Sis;

use Illuminate\Database\Eloquent\Model;

class SisMultivalore extends Model
{
    protected $primaryKey = 'tabla';
    protected $connection = 'simiantiguo';
    protected $fillable = [
        'tabla',
        'codigo',
        'descripcion',
        'fecha_insercion_1',
        'usuario_insercion',
        'fecha_modificacion_2',
        'usuario_modificacion',
        'estado',
        'puntaje',
        'fecha_insercion',
        'fecha_modificacion',
    ];
}
