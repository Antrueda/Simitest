<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiDinfamPadre extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_convive_id',
        'dia',
        'mes',
        'ano',
        'hijo',
        'prm_separa_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
