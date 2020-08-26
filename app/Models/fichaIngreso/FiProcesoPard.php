<?php

namespace App\Models\fichaIngreso;

use app\Models\User;
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
    'fi_justicia_restaurativa_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];
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
  public static function transaccion($dataxxxx,  $objetoxx, $justicia)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx, $justicia) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != null) {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['fi_justicia_restaurativa_id'] = $justicia->id;
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = FiProcesoPard::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
