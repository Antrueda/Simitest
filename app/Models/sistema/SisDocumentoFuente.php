<?php

namespace App\Models\sistema;

use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InDocPreguntum;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\Indicadores\InPregunta;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class SisDocumentoFuente extends Model
{
  protected $fillable = ['nombre', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];

  protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

  public function sisActividads()
  {
    return $this->hasMany(SisActividad::class);
  }

  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public static function comboPreguntas($padrexxx, $cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }

    foreach (SisDocumentoFuente::where('id', $padrexxx)->first()->in_preguntas as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_pregunta];
      } else {
        $comboxxx[$registro->id] = $registro->s_pregunta;
      }
    }
    return $comboxxx;
  }
  /** co */
  public static function getDocBase($cabecera, $ajaxxxxx,$dataxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }
    $linebase=InLineabaseNnaj::where('id',$dataxxxx[1])->first();
    $document = SisDocumentoFuente::select(['sis_documento_fuentes.id', 'sis_documento_fuentes.nombre'])
      ->join('in_base_fuentes', 'sis_documento_fuentes.id', '=', 'in_base_fuentes.sis_documento_fuente_id')
      ->join('in_lineabase_nnajs', 'in_base_fuentes.in_fuente_id', '=', 'in_lineabase_nnajs.in_fuente_id')
      ->where('in_lineabase_nnajs.sis_nnaj_id',$dataxxxx[0])
      ->where('in_lineabase_nnajs.in_fuente_id',$linebase->in_fuente_id)
      ->get();

    foreach ($document as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
      } else {
        $comboxxx[$registro->id] = $registro->nombre;
      }
    }
    return $comboxxx;
  }


  public static function combo($cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }

    foreach (SisDocumentoFuente::get() as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
      } else {
        $comboxxx[$registro->id] = $registro->nombre;
      }
    }
    return $comboxxx;
  }
  public function in_preguntas()
  {
    return $this->belongsToMany(InPregunta::class);
  }
  public static function setPregunta($dataxxxx)
  {
    $objetoxx = SisDocumentoFuente::where('id', $dataxxxx['document'])->first();
    $pregunta[] = $dataxxxx['pregunta'];
    //if (count($objetoxx->in_preguntas) > 0) {
    foreach ($objetoxx->in_preguntas as $inpregun) {
      $pregunta[] = $inpregun->id;
    }
    $objetoxx->in_preguntas()->detach();
    //}
    $objetoxx->in_preguntas()->attach($pregunta);
  }

  public function preguntas()
  {
    return $this->belongsToMany(InPregunta::class, 'in_doc_preguntum', 'sis_documento_fuente_id', 'in_pregunta_id');
  }
}
