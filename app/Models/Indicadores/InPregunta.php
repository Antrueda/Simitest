<?php

namespace App\Models\Indicadores;

use App\Models\Parametro;
use App\Models\sistema\SisDocumentoFuente;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InPregunta extends Model
{
  protected $fillable = [
    's_pregunta',
    'activo',
    'in_doc_indicador_id',
    'sis_tabla_id',
    'sis_campo_tabla_id',
    'user_crea_id',
    'user_edita_id'
  ];

  protected $attributes = [
    'user_crea_id' => 1,
    'user_edita_id' => 1
  ];
  public function in_doc_indi()
  {
    return $this->belongsTo(InDocIndi::class);
  }


  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public static function combo($cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }

    foreach (InPregunta::get() as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_pregunta];
      } else {
        $comboxxx[$registro->id] = $registro->s_pregunta;
      }
    }
    return $comboxxx;
  }

  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      $dataxxxx['s_pregunta'] = strtoupper($dataxxxx['s_pregunta']);
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = InPregunta::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
 

  public function in_respuestas()
  {
    return $this->belongsToMany(Parametro::class, 'in_respuestas', 'in_pregunta_id', 'i_prm_respuesta_id');
  }
  
}
