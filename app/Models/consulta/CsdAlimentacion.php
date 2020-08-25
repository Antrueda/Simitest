<?php

namespace app\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use app\Models\Parametro;
use app\Models\User;

class CsdAlimentacion extends Model{

  protected $fillable = [
    'csd_id', 'user_crea_id', 'user_edita_id', 'cant_personas', 'prm_horario_id','sis_esta_id',
    'prm_apoyo_id', 'prm_entidad_id','prm_tipofuen_id'
  ];

  protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

  public function csd(){
    return $this->belongsTo(Csd::class, 'csd_id');
  }

  public function frecuencia(){
    return $this->belongsToMany(Parametro::class,'csd_aliment_frec', 'csd_alimentacion_id', 'parametro_id');
  }

  public function compra(){
    return $this->belongsToMany(Parametro::class,'csd_aliment_compra', 'csd_alimentacion_id', 'parametro_id');
  }

  public function ingeridas(){
    return $this->belongsToMany(Parametro::class,'csd_aliment_inge', 'csd_alimentacion_id', 'parametro_id');
  }

  public function horario(){
    return $this->belongsTo(Parametro::class, 'prm_horario_id');
  }

  public function prepara(){
    return $this->belongsToMany(Parametro::class,'csd_aliment_prepara', 'csd_alimentacion_id', 'parametro_id');
  }

  public function apoyo(){
    return $this->belongsTo(Parametro::class, 'prm_apoyo_id');
  }

  public function entidad(){
    return $this->belongsTo(Parametro::class, 'prm_entidad_id');
  }

  public function creador(){
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor(){
    return $this->belongsTo(User::class, 'user_edita_id');
  }
}
