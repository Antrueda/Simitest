<?php

namespace App\Models\Indicadores\Administ;

use App\Models\Indicadores\InFuente;
use App\Models\Parametro;
use App\Models\Sistema\SisEsta;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class InLineaBase extends Model
{
  protected $fillable = [
    's_linea_base',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];

  public function setSLineaBaseAttribute($value)
  {
    if (!empty($value)) {
      $this->attributes['s_linea_base'] = strtoupper($value);
    }
  }
  public function userCrea()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function userEdita()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public function sisEsta()
  {
    return $this->belongsTo(SisEsta::class);
  }


  public static function combo($padrexxx, $cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }

    foreach (InLineaBase::get() as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_linea_base];
      } else {
        $comboxxx[$registro->id] = $registro->s_linea_base;
      }
    }
    return $comboxxx;
  }
  public function categoria()
  {
    return $this->belongsTo(Parametro::class, 'i_prm_categoria_id');
  }

  public static function getIndicarBases($dataxxxx)
  {
    $whereinx = InFuente::select(['in_linea_base_id'])
      ->where('in_indicador_id', $dataxxxx['padrexxx'])
      ->get();

    $comboxxx = [];
    if ($dataxxxx['cabecera']) {
      if ($dataxxxx['ajaxxxxx']) {
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }
    $activida = InLineaBase::whereNotIn('id', $whereinx)->get();
    foreach ($activida as $registro) {
      if ($dataxxxx['ajaxxxxx']) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_linea_base];
      } else {
        $comboxxx[$registro->id] = $registro->s_linea_base;
      }
    }
    if ($dataxxxx['seleccio'] > 0) {
      $activida = InLineaBase::where('id', $dataxxxx['seleccio'])->first();
      if ($dataxxxx['ajaxxxxx']) {
        $comboxxx[] = ['valuexxx' => $activida->id, 'optionxx' => $activida->s_linea_base];
      } else {
        $comboxxx[$activida->id] = $activida->s_linea_base;
      }
    }

    return $comboxxx;
  }
}
