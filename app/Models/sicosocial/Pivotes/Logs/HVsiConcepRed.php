<?php

namespace app\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiConcepRed extends Model
{
    protected $table = 'h_vsi_concep_red';
    protected $fillable = [
        'parametro_id',
        'vsi_concepto_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
