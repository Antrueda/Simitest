<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use app\Models\Parametro;
use app\Models\User;

class CsdGeningAporta extends Model{
	protected $fillable = ['csd_id', 'prm_aporta_id', 'mensual', 'aporte', 'jornada_entre', 'prm_entre_id', 'jornada_a', 'prm_a_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id','prm_tipofuen_id'];

    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }
    
    public function aporta(){
        return $this->belongsTo(Parametro::class, 'prm_aporta_id');
    }

    public function entre(){
        return $this->belongsTo(Parametro::class, 'prm_entre_id');
    }

    public function a(){
        return $this->belongsTo(Parametro::class, 'prm_a_id');
    }

    public function dias(){
        return $this->belongsToMany(Parametro::class,'csd_gening_dias', 'csd_geningreso_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}