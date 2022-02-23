<?php

namespace App\Models\Acciones\Grupales\Asistencias\Diaria;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsdSisNnaj extends Model
{
    use SoftDeletes;

    //protected $table = 'asisdiar_sis_nnaj';

    protected $fillable = [
        'asisdiar_id',
        'sis_nnaj_id',
        // Todo: Colocar los campos de asistencia

        'consecut',
        'fechdili',
        'sis_depen_id',
        'prm_luga_acti_id',
        'sis_localidad_id',
        'sis_upz_id',
        'sis_barrio_id',
        'sis_departam_id',
        'sis_municipio_id',
        'prm_actividad_id',
        'prm_grupo_id',
        'num_pag',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
  
    ];

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
