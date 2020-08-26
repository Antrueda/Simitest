<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiRiesgoEscnna extends Model
{
    protected $fillable = [
        'fi_situacion_especial_id',
        'i_prm_riesgo_escnna_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
