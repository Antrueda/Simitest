<?php

namespace app\Models\Indicadores;

use app\Models\Parametro;
use app\Models\Sistema\SisTcampo;
use app\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InPregunta extends Model
{
  protected $fillable = [
    's_pregunta',
    'sis_esta_id',
//    'in_doc_indicador_id',
    'sis_tabla_id',
    'sis_tcampo_id',
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

  public static function getPreguntas($dataxxxx)
  {

    $comboxxx = [];
    if ($dataxxxx['cabecera']) {
      if ($dataxxxx['ajaxxxxx']) {
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }
    $notinxxx = [];
    $docupreg = InDocPregunta::where('in_ligru_id', $dataxxxx['grupoxxx'])
      ->get();
    foreach ($docupreg as $docuprex) {
      $notinxxx[] = $docuprex->sis_tcampo_id;
    }
    $pregunta = SisTcampo::select(['sis_tcampos.id', 'sis_tcampos.s_numero', 'in_preguntas.s_pregunta'])
      ->join('sis_tablas', 'sis_tcampos.sis_tabla_id', '=', 'sis_tablas.id')
      ->join('in_preguntas', 'sis_tcampos.in_pregunta_id', '=', 'in_preguntas.id')
      ->where('sis_tablas.sis_docfuen_id', $dataxxxx['grupoxxx']->in_base_fuente->sis_docfuen_id)
      ->get();
    foreach ($pregunta as $registro) {
      if (!in_array($registro->id, $notinxxx)||in_array($dataxxxx['seleccio'], $notinxxx)) {

        if ($dataxxxx['ajaxxxxx']) {
          $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_numero . $registro->s_pregunta];
        } else {
          $comboxxx[$registro->id] = $registro->s_numero . $registro->s_pregunta;
        }
      }
    }
    return $comboxxx;
  }
}
