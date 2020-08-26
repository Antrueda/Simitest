<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use app\Models\Parametro;
use app\Models\User;

class CsdBienvenida extends Model{
  
  protected $fillable = [
    'csd_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id', 'prm_persona_id','prm_tipofuen_id'
  ];

  protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

  public function csd(){
    return $this->belongsTo(Csd::class, 'csd_id');
  }

  public function persona(){
    return $this->belongsTo(Parametro::class, 'prm_persona_id');
  }

  public function motivos(){
    return $this->belongsToMany(Parametro::class,'csd_bienvenidas_motivos', 'csd_bienvenida_id', 'parametro_id');
  }

  public function creador(){
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor(){
    return $this->belongsTo(User::class, 'user_edita_id');
  }
}