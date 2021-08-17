<?php

namespace App\Models\Simianti\Inf;

use Illuminate\Database\Eloquent\Model;

class IfDetalleAsistenciaDiaria extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'if_detalle_asistencia_diaria';
    // protected $primaryKey = 'id_composicion_familiar';
    protected $fillable =
    [
        'id_planilla',
        'dia1',
        'dia2',
        'dia3',
        'dia4',
        'dia5',
        'dia6',
        'dia7',
        'semana',
        'mes',
        'id_nnaj',
        'tipo',
        'fechad1',
        'fechad2',
        'fechad3',
        'fechad4',
        'fechad5',
        'fechad6',
        'fechad7',
        'ano',
        'fecha_insercion',
        
    ];


}
