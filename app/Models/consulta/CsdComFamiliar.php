<?php

namespace App\Models\consulta;

use App\Models\consulta\pivotes\CsdResobsers;
use App\Models\fichaIngreso\NnajDocu;
use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdComFamiliar extends Model{

  protected $fillable = [
    'csd_id',       'user_crea_id',      'user_edita_id',    'sis_esta_id',
    's_primer_apellido',   's_segundo_apellido',  's_primer_nombre',    's_segundo_nombre',
    's_nombre_identitario',       'prm_tipodocu_id',  's_documento',        'd_nacimiento', 'prm_sexo_id',
    'prm_estado_civil_id', 'prm_identidad_genero_id',     'prm_orientacion_sexual_id',    'prm_etnia_id','prm_poblacion_etnia_id',
    'prm_ocupacion_id',  'prm_parentezco_id', 'prm_convive_id',   'prm_visitado_id',
    'prm_vin_actual_id', 'prm_vin_pasado_id', 'prm_regimen_id',   'prm_cualeps_id',
    'sisben',            'prm_sisben_id',     'prm_discapacidad_id', 'prm_cual_id',
    'prm_peso_id',       'prm_peso_dos_id',   'prm_leer_id',       'prm_escribir_id',
    'prm_operaciones_id','prm_aprobado_id',   'prm_educacion_id',  'prm_estudia_id', 'prm_tipofuen_id'
  ];
  protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

  public function csd(){
    return $this->belongsTo(Csd::class, 'csd_id');
  }

  public function documentos(){
    return $this->belongsTo(Parametro::class, 'prm_tipodocu_id');
  }
  public function getEdadAttribute()
  {
      return Carbon::parse($this->d_nacimiento)->age;
  }
  public function sexo(){
    return $this->belongsTo(Parametro::class, 'prm_sexo_id');
  }

  public function estadoCivil(){
    return $this->belongsTo(Parametro::class, 'prm_estado_civil_id');
  }

  public function genero(){
    return $this->belongsTo(Parametro::class, 'prm_identidad_genero_id');
  }

  public function sexual(){
    return $this->belongsTo(Parametro::class, 'prm_orientacion_sexual_id');
  }

  public function grupoEtnico(){
    return $this->belongsTo(Parametro::class, 'prm_etnia_id');
  }

  public function cualGrupo(){
    return $this->belongsTo(Parametro::class, 'prm_poblacion_etnia_id');
  }

  public function ocupacion(){
    return $this->belongsTo(Parametro::class, 'prm_ocupacion_id');
  }

  public function parentezco(){
    return $this->belongsTo(Parametro::class, 'prm_parentezco_id');
  }

  public function convive(){
    return $this->belongsTo(Parametro::class, 'prm_convive_id');
  }

  public function visitado(){
    return $this->belongsTo(Parametro::class, 'prm_visitado_id');
  }

  public function vinculacionActual(){
    return $this->belongsTo(Parametro::class, 'prm_vin_actual_id');
  }

  public function vinculacionPasado(){
    return $this->belongsTo(Parametro::class, 'prm_vin_pasado_id');
  }

  public function regimen(){
    return $this->belongsTo(Parametro::class, 'prm_regimen_id');
  }

  public function eps(){
    return $this->belongsTo(Parametro::class, 'prm_cualeps_id');
  }

  public function prm_sisben(){
    return $this->belongsTo(Parametro::class, 'prm_sisben_id');
  }

  public function discapacidad(){
    return $this->belongsTo(Parametro::class, 'prm_discapacidad_id');
  }

  public function cualDiscapacidad(){
    return $this->belongsTo(Parametro::class, 'prm_cual_id');
  }

  public function pesoUno(){
    return $this->belongsTo(Parametro::class, 'prm_peso_id');
  }

  public function pesoDos(){
    return $this->belongsTo(Parametro::class, 'prm_peso_dos_id');
  }

  public function sabeLeer(){
    return $this->belongsTo(Parametro::class, 'prm_leer_id');
  }

  public function sabeEscribir(){
    return $this->belongsTo(Parametro::class, 'prm_escribir_id');
  }

  public function sabeOperaciones(){
    return $this->belongsTo(Parametro::class, 'prm_operaciones_id');
  }

  public function ultAprobado(){
    return $this->belongsTo(Parametro::class, 'prm_aprobado_id');
  }

  public function nivelEducacion(){
    return $this->belongsTo(Parametro::class, 'prm_educacion_id');
  }

  public function estudiaActual(){
    return $this->belongsTo(Parametro::class, 'prm_estudia_id');
  }


  public static function composicion($usuariox)
  {
      $vestuari = ['composic' => CsdComFamiliar::where('', $usuariox)->first(), 'formular' => false];

      if ($vestuari['composic'] == null) {
          $vestuari['formular'] = true;
      }
      return $vestuari;
  }



  public static function transaccion($dataxxxx,  $objetoxx)
  {
      $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {

          $dataxxxx['prm_tipodocu_id'] = $dataxxxx['prm_tipodocu_id'];
          $dataxxxx['s_primer_nombre'] = strtoupper($dataxxxx['s_primer_nombre']);
          $dataxxxx['s_segundo_nombre'] = strtoupper($dataxxxx['s_segundo_nombre']);
          $dataxxxx['s_primer_apellido'] = strtoupper($dataxxxx['s_primer_apellido']);
          $dataxxxx['s_segundo_apellido'] = strtoupper($dataxxxx['s_segundo_apellido']);
          $dataxxxx['s_documento'] = $dataxxxx['s_documento'];
          $dataxxxx['s_nombre_identitario'] = strtoupper($dataxxxx['s_nombre_identitario']);
          $dt = new DateTime($dataxxxx['d_nacimiento']);
          $dataxxxx['d_nacimiento'] = $dt->format('Y-m-d');
          $dataxxxx['user_edita_id'] = Auth::user()->id;
          if ($objetoxx != '') {
              $datosbas=NnajDocu::setDBComposicionFamiliar($dataxxxx,$objetoxx);
              $dataxxxx['sis_nnaj_id'] = $datosbas->fi_datos_basico->sis_nnaj_id;
              $objetoxx->update($dataxxxx);
              $dataxxxx['csd_id'] = $objetoxx->csd_id;
              $dataxxxx['objetoxx']=$objetoxx;
              
              if ($objetoxx->observaciones != '') {
              $objetoxx->observaciones->update($dataxxxx);
               }else{
                CsdComFamiliarObservaciones::create($dataxxxx);
               }
          } else {
              $datosbas=NnajDocu::setDBComposicionFamiliar($dataxxxx,'');
              $dataxxxx['user_crea_id'] = Auth::user()->id;
              $dataxxxx['sis_nnaj_id'] = $datosbas->fi_datos_basico->sis_nnaj_id;
              $objetoxx = CsdComFamiliar::create($dataxxxx);
              $dataxxxx['csd_id'] = $objetoxx->csd_id;
              $dataxxxx['objetoxx']=$objetoxx;
              CsdComFamiliarObservaciones::create($dataxxxx);
        }
          return $objetoxx;
      }, 5);
      return $objetoxx;
  }

  public static function combo($padrexxx, $cabecera, $ajaxxxxx)
  {
      $comboxxx = [];
      if ($cabecera) {
          $comboxxx = ['' => 'Seleccione'];
      }
      foreach (CsdComFamiliar::where('sis_nnajnnaj_id', $padrexxx->sis_nnaj_id)->get() as $registro) {
          $nombrexx = $registro->sis_nnaj->fi_datos_basico->s_primer_nombre . ' ' . $registro->sis_nnaj->fi_datos_basico->s_segundo_nombre . ' ' .
              $registro->sis_nnaj->fi_datos_basico->s_primer_apellido . ' ' . $registro->sis_nnaj->fi_datos_basico->s_segundo_apellido;
          if ($ajaxxxxx) {
              $comboxxx[] = [
                  'valuexxx' => $registro->id,
                  'optionxx' =>  $nombrexx
              ];
          } else {
              $comboxxx[$registro->id] =  $nombrexx;
          }
      }
      return $comboxxx;
  }

  /**
   * Este método comprueba si existe un componte familiar mayor de edad para que sea el responsable del NNAJ
   */
  public static function getComboResponsable($padrexxx, $cabecera, $ajaxxxxx, $edadxxxx)
  {
      $redirect = true;
      $comboxxx = [];
      if ($cabecera) {
          $comboxxx = ['' => 'Seleccione'];
      }
      $compofam = CsdComFamiliar::where(function ($consulta) use ($padrexxx, $edadxxxx) {
          $consulta->where('sis_nnajnnaj_id', $padrexxx->sis_nnaj_id);
          //   if($edadxxxx>=18){
          //     $consulta->where('i_prm_parentesco_id', 805);
          //   }
          return $consulta;
      })->get();
      foreach ($compofam as $registro) {
          $edad = Carbon::parse($registro->d_nacimiento)->age;
          if ($edad >= 18) {
              $nombrexx = $registro->sis_nnaj->fi_datos_basico;
              $nombrexx = $nombrexx->s_primer_nombre . ' ' . $nombrexx->s_segundo_nombre . ' ' .
                  $nombrexx->s_primer_apellido . ' ' . $nombrexx->s_segundo_apellido;
              if ($ajaxxxxx) {
                  $comboxxx[] = [
                      'valuexxx' => $registro->id,
                      'optionxx' => $nombrexx
                  ];
              } else {
                  $comboxxx[$registro->id] = $nombrexx;
              }
              $redirect = false;
          }
      }
      return [$redirect, $comboxxx];
  }
}
