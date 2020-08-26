<?php

namespace app\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiEstemoEstresante extends Model
{
    protected $table = 'h_vsi_estemo_estresante';
    protected $fillable = [
        'parametro_id',
        'vsi_estemocional_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
