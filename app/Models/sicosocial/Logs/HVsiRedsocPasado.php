<?php

namespace app\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiRedsocPasado extends Model
{
    protected $fillable = [
        'vsi_id',
        'nombre',
        'servicio',
        'dia',
        'mes',
        'ano',
        'ano_prestacion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}