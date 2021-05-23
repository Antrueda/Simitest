<?php

namespace App\Models\Simianti\Sis;

use Illuminate\Database\Eloquent\Model;

class SisSpa extends Model
{
    protected $table = 'sis_spa';
    protected $primaryKey = 'id_spa';
    protected $connection = 'simiantiguo';
    protected $fillable = [
        'nombre_spa',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'estado',
        'puntaje',
        'tipo_spa',
    ];
}
