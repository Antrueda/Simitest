<?php

namespace app\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiRelSociale extends Model
{
    protected $fillable = [
        'vsi_id',
        'descripcion',
        'prm_dificultad_id',
        'completa',
        'user_crea_id',
        'user_edita_id',
        'i_prm_linea_base_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
