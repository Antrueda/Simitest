<?php

namespace app\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiSituacionVulneracion extends Model
{
    protected $fillable = [
        'fi_situacion_especial_id',
        'i_prm_situacion_vulnera_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}