<?php

namespace App\Models\intervencion\Logs;
use Illuminate\Database\Eloquent\Model;

class HIsDatosBasico extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'sis_depen_id',
        'd_fecha_diligencia',
        'i_prm_tipo_atencion_id',
        'i_prm_area_ajuste_id',
        'i_prm_subarea_ajuste_id',
        's_tema',
        's_objetivo_sesion',
        's_desarrollo_sesion',
        's_conclusiones_sesion',
        's_tareas',
        'i_prm_subarea_emocional_id',
        'i_prm_avance_emocional_id',
        'i_prm_subarea_familiar_id',
        'i_prm_avance_familiar_id',
        'i_prm_subarea_sexual_id',
        'i_prm_avance_sexual_id',
        'i_prm_subarea_compor_id',
        'i_prm_avance_compor_id',
        'i_prm_subarea_social_id',
        'i_prm_avance_social_id',
        'i_prm_subarea_academ_id',
        'i_prm_avance_academ_id',
        'i_prm_area_emocional_id',
        'i_prm_area_sexual_id',
        'i_prm_area_comportam_id',
        'i_prm_area_academica_id',
        'i_prm_area_social_id',
        'i_prm_area_familiar_id',
        's_observaciones',
        'd_fecha_proxima',
        'i_primer_responsable',
        'i_segundo_responsable',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}