<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;

class VsiDinFamiliar extends Model{
	protected $fillable = ['vsi_id', 'prm_familiar_id', 'prm_hogar_id', 'lugar', 'descripcion', 'user_crea_id', 'user_edita_id', 'activo'];

    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function familiar(){
        return $this->belongsTo(Parametro::class, 'prm_familiar_id');
    }

    public function hogar(){
        return $this->belongsTo(Parametro::class, 'prm_hogar_id');
    }

    public function calles(){
        return $this->belongsToMany(Parametro::class,'vsi_dinfam_calle', 'vsi_dinfamiliar_id', 'parametro_id');
    }

    public function delitos(){
        return $this->belongsToMany(Parametro::class,'vsi_dinfam_delito', 'vsi_dinfamiliar_id', 'parametro_id');
    }

    public function prostituciones(){
        return $this->belongsToMany(Parametro::class,'vsi_dinfam_prostitucion', 'vsi_dinfamiliar_id', 'parametro_id');
    }

    public function libertades(){
        return $this->belongsToMany(Parametro::class,'vsi_dinfam_libertad', 'vsi_dinfamiliar_id', 'parametro_id');
    }

    public function consumo(){
        return $this->belongsToMany(Parametro::class,'vsi_dinfam_consumo', 'vsi_dinfamiliar_id', 'parametro_id');
    }

    public function salud(){
        return $this->belongsToMany(Parametro::class,'vsi_dinfam_salud', 'vsi_dinfamiliar_id', 'parametro_id');
    }

    public function cuidador(){
        return $this->belongsToMany(Parametro::class,'vsi_dinfam_cuidador', 'vsi_dinfamiliar_id', 'parametro_id');
    }

    public function ausencia(){
        return $this->belongsToMany(Parametro::class,'vsi_dinfam_ausencia', 'vsi_dinfamiliar_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}