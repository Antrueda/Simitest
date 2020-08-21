<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiProcesoFamilia extends Model
{
    protected $fillable = [
        'fi_justicia_restaurativa_id',
        'fi_composicion_fami_id',
        's_proceso',
        'i_prm_vigente_id',
        'i_numero_veces',
        's_motivo',
        'i_hace_cuanto',
        'i_prm_tipo_tiempo_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
