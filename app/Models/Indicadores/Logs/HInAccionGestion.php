<?php

namespace App\Models\Indicadores\Logs;
use Illuminate\Database\Eloquent\Model;

class HInAccionGestion extends Model
{
    protected $fillable = [
        'sis_actividad_id',
        'i_prm_ttiempo_id',
        'in_lineabase_nnaj_id',
        'sis_documento_fuente_id',
        'user_crea_id',
        'user_edita_id',
        'i_tiempo',
        'i_porcentaje',
        'sis_esta_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
