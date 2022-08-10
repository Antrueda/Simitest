<?php

namespace App\Models\Acciones\Grupales\Asistencias\Diaria;

use App\Models\Acciones\Individuales\Educacion\AdmiActiAsd\AsdActividad as AdmiActiAsdAsdActividad;
use App\Models\Acciones\Individuales\Educacion\AdmiActiAsd\AsdTiactividad;
use App\Models\AdmiActi\TiposActividad;
use App\Models\AdmiActiAsd\AsdActividad;
use App\Models\Parametro;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisDepartam;
use App\Models\User;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisLocalidad;
use App\Models\sistema\SisLocalupz;
use App\Models\sistema\SisMunicipio;
use App\Models\sistema\SisServicio;
use App\Models\sistema\SisUpz;
use App\Models\sistema\SisUpzbarri;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsdDiaria extends Model
{
    use SoftDeletes;

    protected $fillable = [
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
        'asd_actividad_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'

    ];

    public function asdActividad()
    {
        return $this->belongsTo(AsdActividad::class, 'asd_actividad_id');
    }


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

    public function dependencia()
    {
        return $this->belongsTo(SisDepen::class, 'sis_depen_id');
    }

    public function sis_servicio()
    {
        return $this->belongsTo(SisServicio::class, 'sis_servicio_id');
    }

    public function prm_actividad(){
        return $this->belongsTo(Parametro::class, 'prm_lugactiv_id');
    }


    public function prm_grupo(){
        return $this->belongsTo(Parametro::class, 'prm_grupo_id');
    }
    public function barrio()
    {
        return $this->belongsTo(SisUpzbarri::class, 'sis_barrio_id');
    }

    public function sis_departam()
    {
        return $this->belongsTo(SisDepartam::class, 'sis_departam_id');
    }

    public function sis_municipi()
    {
        return $this->belongsTo(SisMunicipio::class, 'sis_municipio_id');
    }

   
 
    public function prm_programa(){
        return $this->belongsTo(Parametro::class, 'prm_actividad_id');
    }

    public function AsdNnajActividad(){
        return $this->hasMany(AsdNnajActividades::class);
    }


}
