<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiSituacionEspecial extends Model {

  protected $fillable = [
      'sis_nnaj_id',
      'user_crea_id',
      'user_edita_id',
      'i_prm_tipo_id',
      'i_tiempo',
      'i_prm_ttiempo_id',
      'prm_presconf_id',
      'sis_esta_id'
  ];
  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

  public function creador() {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function fi_victima_escnnas() {
    return $this->hasMany(FiVictimaEscnna::class);
  }

  public function prm_situacion_vulnera_id() {
    return $this->belongsToMany(Parametro::class,'fi_situ_vulnera','fi_situacion_especial_id','prm_situacion_vulnera_id');
  }

  public function fi_riesgo_escnnas() {
    return $this->hasMany(FiRiesgoEscnna::class);
  }

  public function fi_razon_continuas() {
    return $this->hasMany(FiRazonContinua::class);
  }

  public function fi_razon_iniciados() {
    return $this->hasMany(FiRazonIniciado::class);
  }

  public function editor() {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public static function situaciones($usuariox) {

    $situacio = FiSituacionEspecial::where('sis_nnaj_id', $usuariox)->first();

    $vestuari = ['situacio' => $situacio, 'formular' => false, 'vulnerax' => [], 'escnnaxx' => [], 'iniciado' => [], 'continua' => []];
    if ($situacio == null) {
      $vestuari['formular'] = true;
    } else {
      $vestuari['vulnerax'] = $situacio->fi_situ_vulnera;
      if ($situacio->i_prm_tipo_id == 563) {
        $vestuari['escnnaxx'] = $situacio->fi_riesgo_escnnas;
      } else {
        $vestuari['escnnaxx'] = $situacio->fi_victima_escnnas;
      }
      $vestuari['iniciado'] = $situacio->fi_razon_iniciados;
      $vestuari['continua'] = $situacio->fi_razon_continuas;
    }

    return $vestuari;
  }

 

  public function prm_presconf()
  {
      return $this->belongsTo(Parametro::class, 'prm_presconf_id');
  }

  public function fi_situ_vulnera()
  {
      return $this->hasMany(FiSituVulnera::class, 'fi_situacion_especial_id');
  }

}
