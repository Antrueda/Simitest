<?php

namespace App\Models\Simianti\Inf;

use Illuminate\Database\Eloquent\Model;

class IfPlanillaAsistencia extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'if_planilla_asistencia';
    protected $primaryKey = 'id_planilla_asistencia';
    protected $fillable =
    [
        'id_planilla_asistencia',
        'id_upi',
        'fecha_asistencia',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'servicio',
        'id_barrio',
        'tipo_lugar_contacto',
        'id_coordinador',
        'id_facilitador',
        'estado',
        'id_actividad',
        'observaciones',
        
        
        
    ];


}
