<?php

namespace App\Models;

use App\Models\sistema\SisEntidad;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model {

  protected $fillable = ['nombre', 'activo', 'user_crea_id', 'user_edita_id'];
  protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

  public function setNombreAttribute($value) {
    $this->attributes['nombre'] = strtoupper($value);
  }

  public function parametros() {
    return $this->belongsToMany(Parametro::class);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  $temaxxxx tema que padre de los parámetros
   * @param  $cabecera indica si el combo se debe devolver con el seleccione
   * @param  $ajaxxxxx indica si el combo es para devolver en array para objeto json
   * @return $comboxxx
   */
  public static function combo($temaxxxx, $cabecera, $ajaxxxxx) {
    $comboxxx = [];
    if ($cabecera) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }
    $parametr = Tema::select(['parametros.id', 'parametros.nombre'])
            ->join('parametro_tema', 'temas.id', '=', 'parametro_tema.tema_id')
            ->join('parametros', 'parametro_tema.parametro_id', '=', 'parametros.id')
            ->where('temas.id', $temaxxxx)
            ->orderBy('parametros.id', 'asc')
            ->get();
    foreach ($parametr as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->optionxx];
      } else {
        $comboxxx[$registro->valuexxx] = $registro->optionxx;
      }
    } 
    return $comboxxx;
  }

  public static function comboDesc($temaxxxx, $cabecera, $ajaxxxxx) {
    $comboxxx = [];
    if ($cabecera) {
      if ($ajaxxxxx) {
        $comboxxx = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }

    $parametr = Tema::select(['parametros.id', 'parametros.nombre'])
            ->join('parametro_tema', 'temas.id', '=', 'parametro_tema.tema_id')
            ->join('parametros', 'parametro_tema.parametro_id', '=', 'parametros.id')
            ->where('temas.id', $temaxxxx)
            ->orderBy('parametros.id', 'desc')
            ->get();
    foreach ($parametr as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
      } else {
        $comboxxx[$registro->id] = $registro->nombre;
      }
    }
    return $comboxxx;
  }

  public function creador() {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor() {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

}
