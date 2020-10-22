<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiCsdvsi extends Model
{
    protected $fillable = [
        'vsi_id',
        'csd_id',
        'fi_datos_basico_id',
        'sis_esta_id',
        'user_crea_id',
        'created_csd',
        'updated_csd',
        'created_vsi',
        'updated_vsi',
        'user_edita_id',
        'id_old',
        'metodoxx',
        'rutaxxxx',
        'ipxxxxxx'
    ];
}
