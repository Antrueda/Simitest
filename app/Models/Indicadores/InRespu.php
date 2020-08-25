<?php

namespace app\Models\Indicadores;

use app\Models\Parametro;
use app\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InRespu extends Model
{
  protected $fillable = [
    'in_doc_pregunta_id',
    'prm_respuesta_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];

  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public function in_doc_pregunta()
  {
    return $this->belongsTo(InDocPregunta::class);
  }
  public function respuesta()
  {
    return $this->belongsTo(Parametro::class,'prm_respuesta_id');
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
