<?php

namespace app\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiFormacion extends Model
{
    protected $fillable = [
        'i_prm_lee_id',
        'i_prm_escribe_id',
        'i_prm_operaciones_id',
        'i_prm_estudia_id',
        'i_prm_jornada_estudio_id',
        'i_prm_naturaleza_entidad_id',
        'sis_institucion_edu_id',
        'i_dias_sin_estudio',
        'i_meses_sin_estudio',
        'i_anos_sin_estudio',
        'i_prm_ultimo_nivel_estudio_id',
        'i_prm_ultimo_grado_aprobado_id',
        'i_prm_certificado_ultimo_nivel_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
