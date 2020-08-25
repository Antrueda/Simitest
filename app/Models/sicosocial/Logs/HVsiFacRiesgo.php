<?php

namespace app\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiFacRiesgo extends Model
{
    protected $fillable = [
        'vsi_id',
        'riesgo',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
