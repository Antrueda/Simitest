<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiDiasGeneraIngreso extends Model
{
    protected $fillable = [
        'fi_generacion_ingreso_id',
        'i_prm_dia_genera_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
