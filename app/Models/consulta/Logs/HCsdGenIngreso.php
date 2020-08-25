<?php

namespace app\Models\consulta\Logs;

use Illuminate\Database\Eloquent\Model;

class HCsdGenIngreso extends Model
{
    protected $fillable = [
        'csd_id',
        'observacion',
        'prm_actividad_id',
        'trabaja',
        'prm_informal_id',
        'prm_otra_id',
        'prm_laboral_id',
        'prm_frecuencia_id',
        'intensidad',
        'prm_dificultad_id',
        'razon',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'prm_tipofuen_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
