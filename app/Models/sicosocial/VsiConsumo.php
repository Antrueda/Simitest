<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;

class VsiConsumo extends Model{
    protected $fillable = [
        'vsi_id', 'prm_consumo_id', 'cantidad', 'inicio', 'prm_contexto_ini_id', 'prm_consume_id', 'prm_contexto_man_id', 'prm_problema_id', 'porque', 'prm_motivo_id', 'prm_familia_id', 'descripcion', 'user_crea_id', 'user_edita_id', 'activo',
    ];
  
    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function consumo(){
        return $this->belongsTo(Parametro::class, 'prm_consumo_id');
    }

    public function contextoIni(){
        return $this->belongsTo(Parametro::class, 'prm_contexto_ini_id');
    }

    public function consume(){
        return $this->belongsTo(Parametro::class, 'prm_consume_id');
    }

    public function contextoMan(){
        return $this->belongsTo(Parametro::class, 'prm_contexto_man_id');
    }

    public function problema(){
        return $this->belongsTo(Parametro::class, 'prm_problema_id');
    }

    public function motivo(){
        return $this->belongsTo(Parametro::class, 'prm_motivo_id');
    }

    public function familia(){
        return $this->belongsTo(Parametro::class, 'prm_familia_id');
    }

    public function quienes(){
        return $this->belongsToMany(Parametro::class,'vsi_consumo_quien', 'vsi_consumo_id', 'parametro_id');
    }
    
    public function expectativas(){
        return $this->belongsToMany(Parametro::class,'vsi_consumo_expectativa', 'vsi_consumo_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}