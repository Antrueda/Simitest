<?php

namespace app\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiSituacionEspecial extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'i_prm_tipo_id',
        'i_tiempo',
        'i_prm_ttiempo_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
