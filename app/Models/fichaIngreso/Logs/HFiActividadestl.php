<?php

namespace app\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiActividadestl extends Model
{
    protected $fillable = [
        'i_horas_permanencia_calle',
        'i_dias_permanencia_calle',
        'i_prm_pertenece_parche_id',
        's_nombre_parche',
        'i_prm_acceso_recreacion_id',
        'i_prm_practica_religiosa_id',
        'i_prm_religion_practica_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
