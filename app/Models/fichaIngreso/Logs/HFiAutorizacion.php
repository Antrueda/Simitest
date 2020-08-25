<?php

namespace app\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiAutorizacion extends Model
{
    protected $fillable = [
        'i_prm_autorizo_id',
        'fi_composicion_fami_id',
        'i_prm_parentesco_id',
        'd_autorizacion',
        'i_prm_tipo_diligencia_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
