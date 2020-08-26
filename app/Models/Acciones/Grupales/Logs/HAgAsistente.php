<?php

namespace App\Models\Acciones\Grupales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAgAsistente extends Model
{
    protected $fillable = [
        'ag_actividad_id',
        'fi_dato_basico_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
