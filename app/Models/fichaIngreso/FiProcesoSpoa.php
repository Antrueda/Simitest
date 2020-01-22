<?php

namespace App\Models\fichaIngreso;

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
    'fi_justicia_restaurativa_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];
  public static function transaccion($dataxxxx,  $objetoxx, $justicia)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx, $justicia) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != null) {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['fi_justicia_restaurativa_id'] = $justicia->id;
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = FiProcesoSpoa::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
  public function fi_justicia_restaurativa()
  {
    return $this->belongsTo(FiJusticiaRestaurativa::class);
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
