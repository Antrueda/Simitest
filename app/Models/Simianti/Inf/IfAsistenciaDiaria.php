<?php

namespace App\Models\Simianti\Inf;

use Illuminate\Database\Eloquent\Model;

class IfAsistenciaDiaria extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'if_asistencia_diaria';
    protected $primaryKey = 'id_planilla';
    protected $fillable =
    [
        'id_planilla',
        'no_planilla',
        'responsable_registro',
        'responsable_revisa',
        'observación',
        'responsable_asistencia',
        'estrategia',
        'actividad',
        'grupo_intervencion',
        'servicio',
        'usuario_insercion',
        'fecha_insercion',
        'usuario_modificacion',
        'fecha_modificacion',
        'upi',
        'convenio_entidad',
        'programa_sede',
        'grupo',
        'modulo',
        'programa',
        'grado',
        'fecha_inicio',
        'fecha_fin',
        'id_estrategia',
        'tipo_planilla',
        
        
    ];


}
