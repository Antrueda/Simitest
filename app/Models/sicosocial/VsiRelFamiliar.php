<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;

class VsiRelFamiliar extends Model{
    protected $fillable = [
        'vsi_id', 
        'prm_representativa_id',
        'representativa',
        'prm_mala_id',
        'prm_relacion_id',
        'prm_gusto_id',
        'porque',
        'prm_familia_id',
        'prm_denuncia_id',
        'descripcion',
        'prm_pareja_id',
        'prm_dificultad_id',
        'dia',
        'mes',
        'ano',
        'prm_responde_id',
        'descripcion1',
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function representativa(){
        return $this->belongsTo(Parametro::class, 'prm_representativa_id');
    }
    
    public function mala(){
        return $this->belongsTo(Parametro::class, 'prm_mala_id');
    }

    public function relacion(){
        return $this->belongsTo(Parametro::class, 'prm_relacion_id');
    }

    public function gusto(){
        return $this->belongsTo(Parametro::class, 'prm_gusto_id');
    }

    public function familia(){
        return $this->belongsTo(Parametro::class, 'prm_familia_id');
    }

    public function denuncia(){
        return $this->belongsTo(Parametro::class, 'prm_denuncia_id');
    }

    public function pareja(){
        return $this->belongsTo(Parametro::class, 'prm_pareja_id');
    }

    public function dificultad(){
        return $this->belongsTo(Parametro::class, 'prm_dificultad_id');
    }

    public function responde(){
        return $this->belongsTo(Parametro::class, 'prm_responde_id');
    }

    public function motivos(){
        return $this->belongsToMany(Parametro::class,'vsi_relfam_motivo', 'vsi_relfamiliar_id', 'parametro_id');
    }

    public function famDificultades(){
        return $this->belongsToMany(Parametro::class,'vsi_relfam_dificultad', 'vsi_relfamiliar_id', 'parametro_id');
    }
    
    public function acciones(){
        return $this->belongsToMany(Parametro::class,'vsi_relfam_acciones', 'vsi_relfamiliar_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}