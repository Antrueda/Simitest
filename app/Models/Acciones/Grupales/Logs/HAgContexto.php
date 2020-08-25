<?php

namespace app\Models\Acciones\Grupales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAgContexto extends Model
{
    protected $fillable = [
        's_contexto',
        's_descripcion',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
