<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiProcesoSpoa extends Model
{
  protected $fillable = [
    'i_prm_ha_estado_spoa_id',
    'i_prm_actualmente_spoa_id',
    'i_prm_tipo_tiempo_spoa_id',
    'i_cuanto_spoa',
    'i_prm_motivo_spoa_id',
    'i_prm_mod_cumple_pena_id',
    'i_prm_ha_estado_preso_id',
    'fi_justrest_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];
  
  public function fi_justrest()
  {
    return $this->belongsTo(FiJustrest::class);
  }
  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public function i_prm_ha_estado_spoa()
  {
      return $this->belongsTo(Parametro::class, 'i_prm_ha_estado_spoa_id');
  }

  public function i_prm_actualmente_spoa()
  {
      return $this->belongsTo(Parametro::class, 'i_prm_actualmente_spoa_id');
  }

  public function i_prm_tipo_tiempo_spoa()
  {
      return $this->belongsTo(Parametro::class, 'i_prm_tipo_tiempo_spoa_id');
  }

  public function i_prm_motivo_spoa()
  {
      return $this->belongsTo(Parametro::class, 'i_prm_motivo_spoa_id');
  }

  public function i_prm_mod_cumple_pena()
  {
      return $this->belongsTo(Parametro::class, 'i_prm_mod_cumple_pena_id');
  }

  public function i_prm_ha_estado_preso()
  {
      return $this->belongsTo(Parametro::class, 'i_prm_ha_estado_preso_id');
  }
}
