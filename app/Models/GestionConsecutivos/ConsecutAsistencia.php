<?php

namespace App\Models\Acciones\Grupales\Asistencias\Semanal;

use Illuminate\Database\Eloquent\Model;

class ConsecutAsistencia extends Model
{
    protected $fillable = [
        'id',
        'consecutivo',
        'mesxxxxx',
        'anioxxxx',
        'sis_depen_id',
        'sis_servicio_id',
        'asis_planilla'
    ];
    

}
