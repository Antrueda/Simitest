<?php

namespace app\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiGeneracionIngreso extends Model
{
    protected $fillable = [
        'i_prm_actividad_genera_ingreso_id',
        's_trabajo_formal',
        'i_prm_trabajo_informal_id',
        'i_prm_otra_actividad_id',
        'i_prm_razon_no_genera_ingreso_id',
        'i_dias_buscando_empleo',
        'i_meses_buscando_empleo',
        'i_anos_buscando_empleo',
        'i_prm_jornada_genera_ingreso_id',
        's_hora_inicial',
        's_hora_final',
        'i_prm_frec_ingreso_id',
        'i_total_ingreso_mensual',
        'i_prm_tipo_relacion_laboral_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
