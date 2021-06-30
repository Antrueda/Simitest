<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiRazone extends Model
{
    protected $fillable = [
        's_porque_ingresar',
        'observaciones',
        'userd_id',
        'sis_depend_id',
        'userr_id',
        'sis_depenr_id',
        'i_prm_estado_ingreso_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
