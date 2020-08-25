<?php

namespace app\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiRedsocActual extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_tipo_id',
        'nombre',
        'servicio',
        'telefono',
        'direccion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}