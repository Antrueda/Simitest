<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use App\Models\Sistema\SisUpz;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisUpzbarri;

class CsdResidencia extends Model{

    protected $fillable = ['csd_id',
    'prm_tipo_id',
    'prm_es_id',
    'prm_dir_tipo_id',
    'prm_dir_zona_id',
    'prm_dir_via_id',
    'dir_nombre',
    'prm_dir_alfavp_id',
    'prm_dir_bis_id',
    'prm_dir_alfabis_id',
    'prm_dir_cuadrantevp_id',
    'dir_generadora',
    'prm_dir_alfavg_id',
    'dir_placa',
    'prm_dir_cuadrantevg_id',
    'prm_estrato_id',
    'dir_complemento',
    // 'sis_localidad_id',
    // 'sis_upz_id',
    'sis_upzbarri_id',
    'telefono_uno',
    'telefono_dos',
    'telefono_tres',
    'email',
    'prm_piso_id',
    'prm_muro_id',
    'prm_higiene_id',
    'prm_tipofuen_id',
    'prm_ventilacion_id',
    'prm_iluminacion_id',
    'prm_orden_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'];

    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function tipo(){
        return $this->belongsTo(Parametro::class, 'prm_tipo_id');
    }

    public function es(){
        return $this->belongsTo(Parametro::class, 'prm_es_id');
    }

    public function dirTipo(){
        return $this->belongsTo(Parametro::class, 'prm_dir_tipo_id');
    }

    public function dirZona(){
        return $this->belongsTo(Parametro::class, 'prm_dir_zona_id');
    }

    public function dirVia(){
        return $this->belongsTo(Parametro::class, 'prm_dir_via_id');
    }

    public function dirAlfavp(){
        return $this->belongsTo(Parametro::class, 'prm_dir_alfavp_id');
    }

    public function dirBis(){
        return $this->belongsTo(Parametro::class, 'prm_dir_bis_id');
    }

    public function dirAlfabis(){
        return $this->belongsTo(Parametro::class, 'prm_dir_alfabis_id');
    }

    public function dirCuadrantevp(){
        return $this->belongsTo(Parametro::class, 'prm_dir_cuadrantevp_id');
    }

    public function dirAlfavg(){
        return $this->belongsTo(Parametro::class, 'prm_dir_alfavg_id');
    }

    public function dirCuadrantevg(){
        return $this->belongsTo(Parametro::class, 'prm_dir_cuadrantevg_id');
    }

    public function estrato(){
        return $this->belongsTo(Parametro::class, 'prm_estrato_id');
    }



    public function sis_upzbarri(){
        return $this->belongsTo(SisUpzbarri::class, 'sis_upzbarri_id');
    }

    public function piso(){
        return $this->belongsTo(Parametro::class, 'prm_piso_id');
    }

    public function muro(){
        return $this->belongsTo(Parametro::class, 'prm_muro_id');
    }

    public function higiene(){
        return $this->belongsTo(Parametro::class, 'prm_higiene_id');
    }

    public function ventilacion(){
        return $this->belongsTo(Parametro::class, 'prm_ventilacion_id');
    }

    public function iluminacion(){
        return $this->belongsTo(Parametro::class, 'prm_iluminacion_id');
    }

    public function orden(){
        return $this->belongsTo(Parametro::class, 'prm_orden_id');
    }

    public function ambientes(){
        return $this->belongsToMany(Parametro::class,'csd_reside_ambiente', 'csd_residencia_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
