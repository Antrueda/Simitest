<?php

namespace App\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiRedsocAceso extends Model
{
    protected $table = 'h_vsi_redsoc_acceso';
    protected $fillable = [
        'parametro_id',
        'vsi_redsocial_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
