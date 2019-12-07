<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;

class VsiSitEspecial extends Model{
    protected $fillable = ['vsi_id', 'prm_victima_id', 'user_crea_id', 'user_edita_id', 'activo'];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function victima(){
        return $this->belongsTo(Parametro::class, 'prm_victima_id');
    }

    public function victimas(){
        return $this->belongsToMany(Parametro::class,'vsi_sitesp_victima', 'vsi_sitespecial_id', 'parametro_id');
    }

    public function riesgos(){
        return $this->belongsToMany(Parametro::class,'vsi_sitesp_riesgo', 'vsi_sitespecial_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}