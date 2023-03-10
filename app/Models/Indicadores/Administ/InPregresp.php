<?php

namespace App\Models\Indicadores\Administ;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InPregresp extends Model
{
  protected $fillable = [
    'in_grupregu_id',
    'prm_respuest_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];

  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
  public function userCrea()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function userEdita()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public function inGrupregu()
  {
    return $this->belongsTo(InGrupregu::class);
  }

  public function prmRespuest()
  {
    return $this->belongsTo(Parametro::class,'prm_respuest_id');
  }

  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = InRespu::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
  /**
   * Este método permite encontrar la(s) linea(s) base a la(s) que pertenece(n) la(s) respuesta(s) dada(s)
   */
  public static function getExisteRespuesta($dataxxxx)
  {
    if (!is_array($dataxxxx['i_prm_respuesta_id'])) {
      $dataxxxx['i_prm_respuesta_id'] = [$dataxxxx['i_prm_respuesta_id']];
    }
    $respuest = InRespu::whereIn('i_prm_respuesta_id', $dataxxxx['i_prm_respuesta_id'])->where('in_doc_pregunta_id', $dataxxxx['in_doc_pregunta_id'])->get();
    return count($respuest) == 0 ? false : $respuest;
  }
}
