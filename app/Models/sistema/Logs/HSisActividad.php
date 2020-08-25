<?php

namespace app\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisActividad extends Model
{
    protected $fillable = [
        'nombre',
        'sis_documento_fuente_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}