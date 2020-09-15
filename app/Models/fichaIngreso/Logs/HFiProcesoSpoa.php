<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiProcesoSpoa extends Model
{
    protected $fillable = [
        'fi_justrest_id',
        'i_prm_ha_estado_spoa_id',
        'i_prm_actualmente_spoa_id',
        'i_prm_tipo_tiempo_spoa_id',
        'i_cuanto_spoa',
        'i_prm_motivo_spoa_id',
        'i_prm_mod_cumple_pena_id',
        'i_prm_ha_estado_preso_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
