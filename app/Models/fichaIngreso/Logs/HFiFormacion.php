<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiFormacion extends Model
{
    protected $fillable = [
        'i_prm_lee_id',
        'i_prm_escribe_id',
        'prm_operacio_id',
        'i_prm_estudia_id',
        'prm_jornestu_id',
        'prm_natuenti_id',
        'sis_institucion_edu_id',
        'diasines',
        'mesinest',
        'anosines',
        'prm_ultniest_id',
        'prm_ultgrapr_id',
        'prm_cerulniv_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
