<?php

namespace app\Models\Acciones\Grupales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAgTaller extends Model
{
    protected $fillable = [
        's_taller',
        's_descripcion',
        'ag_tema_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
