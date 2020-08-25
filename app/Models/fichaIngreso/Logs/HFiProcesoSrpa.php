<?php

namespace app\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiProcesoSrpa extends Model
{
    protected $fillable = [
        'fi_justicia_restaurativa_id',
        'i_prm_ha_estado_srpa_id',
        'i_prm_actualmente_srpa_id',
        'i_prm_tipo_tiempo_srpa_id',
        'i_cuanto_srpa',
        'i_prm_motivo_srpa_id',
        'i_prm_sancion_srpa_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
