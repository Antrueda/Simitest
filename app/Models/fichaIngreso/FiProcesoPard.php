<?php

namespace App\Models\fichaIngreso;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiProcesoPard extends Model
{
  protected $fillable = [
    'i_prm_ha_estado_pard_id',
    'i_prm_actualmente_pard_id',
    'i_prm_tipo_tiempo_pard_id',
    'i_cuanto_pard',
    'i_prm_motivo_pard_id',
    's_nombre_defensor',
    's_telefono_defensor',
    's_lugar_abierto_pard',
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
  
}
