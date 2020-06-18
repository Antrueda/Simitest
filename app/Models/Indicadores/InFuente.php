<?php

namespace App\Models\Indicadores;

use App\Models\sistema\SisDocufuen;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InFuente extends Model
{
  protected $fillable = [
    'in_linea_base_id',
    'in_indicador_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];


  
  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

  public function in_indicador()
  {
    return $this->belongsTo(InIndicador::class);
  }
  public function in_linea_base()
  {
    return $this->belongsTo(InLineaBase::class);
  }

  public function in_base_fuente()
  {
    return $this->hasMany(InBaseFuente::class);
  }
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public static function transaccion($dataxxxx,  $objetoxx)
  {
    
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = InFuente::create($dataxxxx);
      }
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

    foreach (InFuente::where('in_indicador_id', $padrexxx)->get() as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->in_linea_base->s_linea_base];
      } else {
        $comboxxx[$registro->id] = $registro->in_linea_base->s_linea_base;
      }
    }

    return $comboxxx;
  }
  public static function comboDocumentos($padrexxx, $ajaxxxxx)
  {
    $comboxxx=[];
    foreach ($padrexxx->in_base_fuentes as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->sis_docufuen->id, 'optionxx' => $registro->sis_docufuen->nombre];
      } else {
        $comboxxx[$registro->id] = $registro->sis_docufuen->nombre;
      }
    }

    return $comboxxx;
  }

  public static function setLineaBase($dataxxxx)
  {
    $objetoxx = InPregunta::where('id', $dataxxxx['pregunta'])->first();
    $pregunta[] = $dataxxxx['respuest'];
    foreach ($objetoxx->in_respuestas as $inpregun) {
      $pregunta[] = $inpregun->id;
    }
    $objetoxx->in_respuestas()->detach();

    $objetoxx->in_respuestas()->attach($pregunta);
  }
  public function in_base_fuentes(){
    return $this-> hasMany(InBaseFuente::class);
  }
  
  public static function combobuscar($dataxxxx)
  {
    $comboxxx = [];

    $notinxxx = [];
    $document = InFuente::where('id', $dataxxxx['padrexxx'])->first();
    foreach ($document->in_base_fuentes as $pregunta) {
      $notinxxx[] = $pregunta->sis_docufuen->id;
    }
    foreach (SisDocufuen::where('nombre', 'like', '%' . $dataxxxx['buscarxx'] . '%')->whereNotIn('id', $notinxxx)->get() as $registro) {
      $comboxxx[] = ['id' => $registro->id, 'label' => $registro->nombre, 'value' => $registro->nombre];
    }
    return $comboxxx;
  }
  public static function setDocumento($dataxxxx)
  {
    $objetoxx = InFuente::where('id', $dataxxxx['padrexxx'])->first();
    $pregunta[] = $dataxxxx['hijoxxxx'];
    foreach ($objetoxx->sis_docufuens as $inpregun) {
      $pregunta[] = $inpregun->id;
    }
    $objetoxx->sis_docufuens()->detach();

    $objetoxx->sis_docufuens()->attach($pregunta);
  }
}
