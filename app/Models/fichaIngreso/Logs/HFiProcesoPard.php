<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiProcesoPard extends Model
{
    protected $fillable = [
        'fi_justrest_id',
        'i_prm_ha_estado_pard_id',
        'i_prm_actualmente_pard_id',
        'i_prm_tipo_tiempo_pard_id',
        'i_cuanto_pard',
        'i_prm_motivo_pard_id',
        's_nombre_defensor',
        's_telefono_defensor',
        's_lugar_abierto_pard',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
