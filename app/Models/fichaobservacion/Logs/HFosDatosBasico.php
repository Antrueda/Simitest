<?php

namespace app\Models\fichaobservacion\Logs;

use Illuminate\Database\Eloquent\Model;

class HFosDatosBasico extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'sis_depen_id',
        'd_fecha_diligencia',
        'area_id',
        'fos_tse_id',
        'fos_stse_id',
        's_observacion',
        'fi_composicion_fami_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}