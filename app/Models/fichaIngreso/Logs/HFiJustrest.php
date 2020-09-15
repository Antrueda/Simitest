<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiJustrest extends Model
{
    protected $fillable = [
        'i_prm_vinculado_violencia_id',
        'i_prm_causa_vincula_vio_id',
        'i_prm_riesgo_participar_id',
        'i_prm_causa_riesgo_part_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
