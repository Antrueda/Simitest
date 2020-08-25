<?php

namespace app\Models\Logs;

use Illuminate\Database\Eloquent\Model;

class HNnajSitMil extends Model
{
    protected $fillable = [
        'fi_datos_basico_id',
        'prm_situacion_militar_id',
        'prm_clase_libreta_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'sis_docfuen_id',
                               
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
