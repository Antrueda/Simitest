<?php

namespace App\Models\sistema\Logs;

use Illuminate\Database\Eloquent\Model;

class HSisEntidadSalud extends Model
{
    protected $fillable = [
        's_nombre_entidad',
        'i_prm_tentidad_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
