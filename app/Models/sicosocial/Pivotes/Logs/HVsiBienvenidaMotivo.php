<?php

namespace App\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiBienvenidaMotivo extends Model
{
    protected $table = 'h_vsi_bienvenida_motivo';
    protected $fillable = [
        'parametro_id',
        'vsi_bienvenida_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
