<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;

class VsiGenIngreso extends Model{
  
    protected $fillable = [
        'vsi_id', 'prm_actividad_id', 'trabaja', 'prm_informal_id', 'prm_otra_id', 'prm_no_id', 'cuanto', 'prm_periodo_id', 'jornada_entre', 'prm_jor_entre_id', 'jornada_a', 'prm_jor_a_id', 'prm_frecuencia_id', 'aporte', 'prm_laboral_id', 'prm_aporta_id', 'porque', 'cuanto_aporta', 'expectativa', 'descripcion', 'user_crea_id', 'user_edita_id', 'activo',
    ];
  
    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function actividad(){
        return $this->belongsTo(Parametro::class, 'prm_actividad_id');
    }

    public function informal(){
        return $this->belongsTo(Parametro::class, 'prm_informal_id');
    }

    public function otra(){
        return $this->belongsTo(Parametro::class, 'prm_otra_id');
    }

    public function no(){
        return $this->belongsTo(Parametro::class, 'prm_no_id');
    }

    public function periodo(){
        return $this->belongsTo(Parametro::class, 'prm_periodo_id');
    }

    public function jorEntre(){
        return $this->belongsTo(Parametro::class, 'prm_jor_entre_id');
    }

    public function jorA(){
        return $this->belongsTo(Parametro::class, 'prm_jor_a_id');
    }

    public function frecuencia(){
        return $this->belongsTo(Parametro::class, 'prm_frecuencia_id');
    }

    public function laboral(){
        return $this->belongsTo(Parametro::class, 'prm_laboral_id');
    }

    public function aporta(){
        return $this->belongsTo(Parametro::class, 'prm_aporta_id');
    }

    public function dias(){
        return $this->belongsToMany(Parametro::class,'vsi_gening_dias', 'vsi_geningreso_id', 'parametro_id');
    }

    public function quienes(){
        return $this->belongsToMany(Parametro::class,'vsi_gening_quien', 'vsi_geningreso_id', 'parametro_id');
    }

    public function labores(){
        return $this->belongsToMany(Parametro::class,'vsi_gening_labor', 'vsi_geningreso_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}