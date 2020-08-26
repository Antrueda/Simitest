<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiSalud extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_atencion_id',
        'prm_condicion_id',
        'prm_medicamento_id',
        'prm_prescripcion_id',
        'prm_sexual_id',
        'prm_activa_id',
        'prm_embarazo_id',
        'prm_hijo_id',
        'prm_interrupcion_id',
        'medicamento',
        'descripcion',
        'edad',
        'embarazo',
        'hijo',
        'interrupcion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}