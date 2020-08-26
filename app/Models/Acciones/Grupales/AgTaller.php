<?php

namespace App\Models\Acciones\Grupales;

use app\Models\Indicadores\InIndicador;
use app\Models\Indicadores\InPregunta;
use app\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgTaller extends Model
{
  protected $fillable = [
    's_taller',
    's_descripcion',
    'ag_tema_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];
  public function in_indicador()
  {
    return $this->belongsTo(InIndicador::class);
  }
  public function in_pregunta_indicadors()
  {
    return $this->hasMany(InPregunta::class);
  }
  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsToMany(AgTema::class);
  }

  public function ag_subtemas()
  {
    return $this->hasMany(AgSubtema::class);
  }

  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['s_taller'] = strtoupper($dataxxxx['s_taller']);
      $dataxxxx['s_descripcion'] = strtoupper($dataxxxx['s_descripcion']);
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = AgTaller::create($dataxxxx);
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

    foreach (AgTaller::where('in_indicador_id', $padrexxx)->get() as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_linea_base];
      } else {
        $comboxxx[$registro->id] = $registro->s_linea_base;
      }
    }
    return $comboxxx;
  }

  public static function comb($cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }
    foreach (AgTaller::get() as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_taller];
      } else {
        $comboxxx[$registro->id] = $registro->s_taller;
      }
    }
    return $comboxxx;
  }

  public static function combo_subtemas($dataxxxx)
  {
    $comboxxx = [];
    if ($dataxxxx['cabecera']) {
      if ($dataxxxx['ajaxxxxx']) {
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }
    $agtaller = AgTaller::where('id', $dataxxxx['agtaller'])->first();
    foreach ($agtaller->ag_subtemas as $registro) {
      if ($dataxxxx['ajaxxxxx']) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_subtema];
      } else {
        $comboxxx[$registro->id] = $registro->s_subtema;
      }
    }
    return $comboxxx;
  }
}
