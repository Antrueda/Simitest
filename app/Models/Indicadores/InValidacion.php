<?php

namespace App\Models\Indicadores;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InValidacion extends Model
{
  protected $fillable = [
    'in_pregunta_id',
    'in_fuente_id',
    'sis_documento_fuente_id',
    'sis_tabla_id',
    'sis_tcampo_id',
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
  public function in_pregunta()
  {
    return $this->belongsTo(InPregunta::class);
  }

  public function in_fuente()
  {
    return $this->belongsTo(InFuente::class);
  }
  public function respuestas()
  {
    return $this->belongsToMany(Parametro::class, 'in_respuestas', 'in_validacion_id', 'i_prm_respuesta_id');
  }


  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = InValidacion::create($dataxxxx);
      }
      $campmagi = ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id, 'sis_esta_id' => 1];
      $objetoxx->respuestas()->detach();
      $respuest=[];
      foreach ($dataxxxx['i_prm_respuesta_id'] as $d) {
        $respuest[$d]=$campmagi;
      }
     $objetoxx->respuestas()->attach($respuest);
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
  public static function combo($padrexxx, $cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }

    foreach (InValidacion::where('in_fuentes.id', $padrexxx)
      ->join('in_preguntas', 'in_fuentes.in_pregunta_id', '=', 'in_preguntas.id')
      ->get() as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->in_pregunta->s_pregunta];
      } else {
        $comboxxx[$registro->id] = $registro->in_pregunta->s_pregunta;
      }
    }
    return $comboxxx;
  }
}
