<?php

namespace app\Models\Acciones\Grupales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAgResponsable extends Model
{
    protected $fillable = [
        'i_prm_responsable_id',
        'ag_actividad_id',
        'sis_obse_id',
        'user_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
