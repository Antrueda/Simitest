<?php

namespace App\Models\Acciones\Grupales\Asistencias\Diaria;

use App\Models\User;
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
        'sis_servicio_id',
        'prm_lugactiv_id',
        'sis_localidad_id',
        'sis_upz_id',
        'sis_barrio_id',
        'sis_departam_id',
        'sis_municipio_id',
        'prm_actividad_id',
        'prm_grupo_id',
        'numepagi',
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

    public function asdSisNnajs()
    {
        return $this->hasMany(AsdSisNnaj::class);
    }
}
