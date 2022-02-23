<?php

namespace App\Models\Acciones\Grupales\Asistencias\Diaria;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsdDiaria extends Model
{
    use SoftDeletes;

    protected $fillable = [
        // Todo: Colocar los campos
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

    //protected $table = 'asd_diarias';

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
