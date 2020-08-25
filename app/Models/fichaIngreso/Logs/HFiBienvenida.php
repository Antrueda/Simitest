<?php

namespace app\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiBienvenida extends Model
{
    protected $fillable = [
        'i_prm_quiere_entrar_id',
        'sis_depen_id',
        'i_prm_servicio_id',
        's_porque_quiere_entrar',
        's_que_gustaria_hacer',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
