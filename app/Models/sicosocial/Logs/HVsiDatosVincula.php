<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiDatosVincula extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_razon_id',
        'prm_persona_id',
        'dia',
        'mes',
        'ano',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
