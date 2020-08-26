<?php

namespace app\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiDinfamLibertad extends Model
{
    protected $table = 'h_vsi_dinfam_libertad';
    protected $fillable = [
        'parametro_id',
        'vsi_dinfamiliar_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
