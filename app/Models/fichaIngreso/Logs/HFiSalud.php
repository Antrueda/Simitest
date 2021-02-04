<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiSalud extends Model
{
    protected $fillable = [
        'prm_regisalu_id',
        'sis_entidad_salud_id',
        'prm_tiensisb_id',
        'd_puntaje_sisben',
        'prm_tiendisc_id',
        'prm_tipodisca_id',
        'prm_tiecedis_id',
        'prm_dispeind_id',
        'prm_estagest_id',
        'i_numero_semanas',
        'prm_estalact_id',
        'i_numero_meses',
        'prm_tieprsal_id',
        'prm_probsalu_id',
        'prm_consmedi_id',
        's_cual_medicamento',
        'prm_tienhijo_id',
        'i_numero_hijos',
        'prm_conometo_id',
        'prm_usametod_id',
        'prm_cualmeto_id',
        'prm_usovolun_id',
        'i_comidas_diarias',
        'prm_razcicom_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
