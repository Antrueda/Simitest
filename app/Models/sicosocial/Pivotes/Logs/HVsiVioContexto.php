<?php

namespace app\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiVioContexto extends Model
{
    protected $table = 'h_vsi_vio_contexto';
    protected $fillable = [
        'parametro_id',
        'vsi_violencia_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
