<?php

namespace App\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisMapaProc extends Model
{
    protected $fillable = [
        'version',
        'sis_entidad_id',
        'vigencia',
        'cierre',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
