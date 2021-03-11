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

  private static function grabarOpciones($situacio, $dataxxxx) {

    //ddd($situacio);
    FiVictimaEscnna::where('fi_situacion_especial_id', $situacio->id)->delete();
    FiSituacionVulneracion::where('fi_situacion_especial_id', $situacio->id)->delete();
    FiRiesgoEscnna::where('fi_situacion_especial_id', $situacio->id)->delete();
    FiRazonContinua::where('fi_situacion_especial_id', $situacio->id)->delete();
    FiRazonIniciado::where('fi_situacion_especial_id', $situacio->id)->delete();
    $datosxxx = [
        'user_crea_id' => Auth::user()->id,
        'user_edita_id' => Auth::user()->id,
        'sis_esta_id' => 1,
        'fi_situacion_especial_id' => $situacio->id
    ];
    if (isset($dataxxxx['i_prm_victima_escnna_id'])) {
      foreach ($dataxxxx['i_prm_victima_escnna_id'] as $registro) {

        if ($dataxxxx['i_prm_tipo_id'] == 563) {
          $datosxxx['i_prm_riesgo_escnna_id'] = $registro;
          FiRiesgoEscnna::create($datosxxx);
        } else {
          $datosxxx['i_prm_victima_escnna_id'] = $registro;
          FiVictimaEscnna::create($datosxxx);
        }
      }
    }
    foreach ($dataxxxx['prm_situacion_vulnera_id'] as $registro) {
      $datosxxx['prm_situacion_vulnera_id'] = $registro;
      FiSituacionVulneracion::create($datosxxx);
    }

    if (isset($dataxxxx['i_prm_iniciado_id'])) {
      foreach ($dataxxxx['i_prm_iniciado_id'] as $registro) {
        $datosxxx['i_prm_iniciado_id'] = $registro;
        FiRazonIniciado::create($datosxxx);
      }

      foreach ($dataxxxx['i_prm_continua_id'] as $registro) {
        $datosxxx['i_prm_continua_id'] = $registro;
        FiRazonContinua::create($datosxxx);
      }
    }
  }

  public static function transaccion($dataxxxx, $objetoxx) {
    
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
              $dataxxxx['user_edita_id'] = Auth::user()->id;
              //ddd($objetoxx);
              if ($objetoxx != '') {
                
                $algo = $objetoxx->update($dataxxxx);
              } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiSituacionEspecial::create($dataxxxx);
              }

              FiSituacionEspecial::grabarOpciones($objetoxx, $dataxxxx);

              $dataxxxx['sis_tabla_id']=32;
              IndicadorHelper::asignaLineaBase($dataxxxx);

              $dataxxxx['sis_tabla_id']=31;
              IndicadorHelper::asignaLineaBase($dataxxxx);

              $dataxxxx['sis_tabla_id']=25;
              IndicadorHelper::asignaLineaBase($dataxxxx);

              $dataxxxx['sis_tabla_id']=26;
              IndicadorHelper::asignaLineaBase($dataxxxx);

              $dataxxxx['sis_tabla_id']=35;
              IndicadorHelper::asignaLineaBase($dataxxxx);

              $dataxxxx['sis_tabla_id']=38;
              IndicadorHelper::asignaLineaBase($dataxxxx);


              return $objetoxx;
            }, 5);
    return $usuariox;
  }

}
