<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiRedApoyoAntecedente extends Model
{
    protected $fillable = [
        'i_tiempo',
        'sis_entidad_id',
        's_servicio',
        'i_prm_tiempo_id',
        'i_prm_anio_prestacion_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
