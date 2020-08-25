<?php

namespace app\Models\Acciones\Grupales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAgTema extends Model
{
    protected $fillable = [
        's_tema',
        'area_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        's_descripcion',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
