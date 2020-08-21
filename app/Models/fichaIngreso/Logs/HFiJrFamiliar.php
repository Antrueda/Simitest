<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiJrFamiliar extends Model
{
    protected $fillable = [
        's_proceso',
        'i_tiempo',
        'i_veces',
        'fi_composicion_fami_id',
        'i_prm_vigente_id',
        'i_prm_motivo_id',
        'i_prm_tiempo_id',
        'fi_justicia_restaurativa_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
