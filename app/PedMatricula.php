<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedMatricula extends Model
{
    protected $fillable = [
        'id_matricula',
        'ano',
        'fecha_inscripcion',
        'nnaj_id',
        'grado',
        'estrategia',
        'upi_id',
        'grupo',
        'fecha_insercion',
        'fecha_modificacion',
        'usuario_insercion',
        'usuario_modificacion',
        'nivel_educacion',
        'observaciones',
        'numero_matricula',
        'id_estrategia'
    ];
}
