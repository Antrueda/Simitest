<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiGenIngreso extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_actividad_id',
        'trabaja',
        'prm_informal_id',
        'prm_otra_id',
        'prm_no_id',
        'cuanto',
        'prm_periodo_id',
        'prm_jornada_genera_ingreso_id',
        'jornada_entre',
        'prm_jor_entre_id',
        'jornada_a',
        'prm_jor_a_id',
        'prm_frecuencia_id',
        'aporte',
        'prm_laboral_id',
        'prm_aporta_id',
        'porque',
        'cuanto_aporta',
        'expectativa',
        'descripcion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
