<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\Parametro;
use app\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiActividadestl extends Model{
  protected $fillable = [
    'i_horas_permanencia_calle',
    'i_dias_permanencia_calle',
    'i_prm_pertenece_parche_id',
    's_nombre_parche',
    'i_prm_acceso_recreacion_id',
    'i_prm_practica_religiosa_id',
    'i_prm_religion_practica_id',
    'sis_nnaj_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];

  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }
  public function i_prm_actividad_tl_id()
  {
    return $this->belongsToMany(Parametro::class,'fi_actividad_tiempo_libres','fi_actividadestl_id','i_prm_actividad_tl_id');
  }
  public function i_prm_sacramentos_hechos_id()
  {
    return $this->belongsToMany(Parametro::class,'fi_sacramentos','fi_actividadestl_id','i_prm_sacramentos_hechos_id');
  }
  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public static function actividad($usuariox)
  {
    $vestuari = ['activida' => FiActividadestl::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

    if ($vestuari['activida'] == null) {
      $vestuari['formular'] = true;
    }
    return $vestuari;
  }

  public static function getActividadtl($objetoxx)
  {
    $vestuari = ['activitl' => [], 'formular' => false];

    if ($objetoxx == '') {
      $vestuari['formular'] = true;
    } else {
      $vestuari['activitl'] = $objetoxx->fi_actividad_tiempo_libres;
    }
    return $vestuari;
  }

  public static function getSacramento($objetoxx)
  {
    $vestuari = ['sacramex' => [], 'formular' => false];

    if ($objetoxx == '') {
      $vestuari['formular'] = true;
    } else {
      $vestuari['sacramex'] = $objetoxx->fi_sacramentos;
    }
    return $vestuari;
  }

  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {


      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {

        if(isset($dataxxxx['i_prm_pertenece_parche_id']) && $dataxxxx['i_prm_pertenece_parche_id'] == 228){
          $dataxxxx['s_nombre_parche'] = '';
        }
        $objetoxx->update($dataxxxx);
      } else {
        $nnajxxxx = FiDatosBasico::where('sis_nnaj_id', $dataxxxx['sis_nnaj_id'])->first();
        /** EN CASO DE QUE SEA CIUDADANO HABITANTE DE CALLE */
        if ($nnajxxxx->prm_poblacion_id == 650) {
          $dataxxxx['i_horas_permanencia_calle'] = 0;
          $dataxxxx['i_dias_permanencia_calle'] = 0;
          $dataxxxx['i_prm_pertenece_parche_id'] = 1;
          $dataxxxx['s_nombre_parche'] = 'CHC';
          $dataxxxx['i_prm_acceso_recreacion_id'] = 1;
          $dataxxxx['i_prm_practica_religiosa_id'] = 1;
          $dataxxxx['i_prm_religion_practica_id'] = 1;
        }
        if(isset($dataxxxx['i_prm_pertenece_parche_id']) && $dataxxxx['i_prm_pertenece_parche_id'] == 228){
          $dataxxxx['s_nombre_parche'] = ' ';
        }

        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = FiActividadestl::create($dataxxxx);
      }

      if(isset($dataxxxx['i_prm_actividad_tl_id'])){
        FiActividadTiempoLibre::setActividadtl($objetoxx,$dataxxxx);
      }

      if(isset($dataxxxx['i_prm_sacramentos_hechos_id'])){
        FiSacramento::setSacramento($objetoxx,$dataxxxx);
      }

      $dataxxxx['sis_tabla_id']=2;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      $dataxxxx['sis_tabla_id']=1;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      $dataxxxx['sis_tabla_id']=32;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
