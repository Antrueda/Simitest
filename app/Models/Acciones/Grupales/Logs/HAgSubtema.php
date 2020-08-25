<?php

namespace app\Models\Acciones\Grupales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAgSubtema extends Model
{
    protected $fillable = [
        'ag_taller_id',
        's_subtema',
        's_descripcion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
