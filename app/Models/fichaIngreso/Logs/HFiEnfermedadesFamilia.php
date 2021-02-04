<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiEnfermedadesFamilia extends Model
{
    protected $fillable = [
        'fi_salud_id',
        'fi_compfami_id',
        's_tipo_enfermedad',
        'prm_recimedi_id',
        's_medicamento',
        'prm_rectrata_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
