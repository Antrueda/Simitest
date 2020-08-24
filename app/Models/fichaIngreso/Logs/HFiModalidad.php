<?php

namespace App\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiModalidad extends Model
{
    protected $fillable = [
        'fi_autorizacion_id',
        'i_prm_modalidad_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
