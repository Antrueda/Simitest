<?php

namespace app\Models\Acciones\Grupales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAgRelacion extends Model
{
    protected $fillable = [
        'ag_actividad_id',
        'ag_recurso_id',
        'i_cantidad',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
