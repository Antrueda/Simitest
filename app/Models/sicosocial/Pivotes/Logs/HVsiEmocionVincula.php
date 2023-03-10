<?php

namespace App\Models\sicosocial\Pivotes\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiEmocionVincula extends Model
{
    protected $table = 'h_vsi_emocion_vincula';
    protected $fillable = [
        'parametro_id',
        'vsi_datos_vincula_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
