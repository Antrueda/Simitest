<?php

namespace App\Models\Simianti\Sis;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio';
    protected $primaryKey = 'codigo_municipio';
    protected $connection = 'simiantiguo';

    protected $fillable = [
        'codigo_municipio',
        'nombre_municipio',
        'codigo_departamento',
        'estado',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
    ];
}
