<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiSalud extends Model{
  protected $fillable = [
    'prm_regisalu_id',
    'sis_entidad_salud_id',
    'prm_tiensisb_id',
    'd_puntaje_sisben',
    'prm_tiendisc_id',
    'prm_tipodisca_id',
    'prm_tiecedis_id',
    'prm_dispeind_id',
    'prm_estagest_id',
    'i_numero_semanas',
    'prm_estalact_id',
    'i_numero_meses',
    'prm_tieprsal_id',
    'prm_probsalu_id',
    'prm_consmedi_id',
    's_cual_medicamento',
    'prm_tienhijo_id',
    'i_numero_hijos',
    'i_numero_hijos',
    's_evento_medico',
    'prm_conometo_id',
    'prm_usametod_id',
    'prm_cualmeto_id',
    'prm_usovolun_id',
    'i_comidas_diarias',
    'prm_razcicom_id',
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

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public static function salud($usuariox)
  {
    $vestuari = ['saludxxx' => FiSalud::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false,'eventome'=>[]];

    if ($vestuari['saludxxx'] == null) {
      $vestuari['formular'] = true;
    }else{
      $vestuari['eventome']=$vestuari['saludxxx']->fi_eventos_medicos;
    }
    return $vestuari;
  }

  private static function grabarEventoMedico($evenmedic,$dataxxxx){
    $datosxxx=[
      'fi_salud_id'=>$evenmedic->id,
      'user_crea_id'=>Auth::user()->id,
      'user_edita_id'=>Auth::user()->id,
      'sis_esta_id'=>1,
    ];
    FiEventosMedico::where('fi_salud_id', $evenmedic->id)->delete();
    foreach($dataxxxx['prm_evenmedi_id'] as $evmedico){
      $datosxxx['prm_evenmedi_id']=$evmedico;
      FiEventosMedico::create($datosxxx);
    }
  }

  private static function getVictataq($evenmedic,$dataxxxx){
    $datosxxx=[
      'fi_salud_id'=>$evenmedic->id,
      'user_crea_id'=>Auth::user()->id,
      'user_edita_id'=>Auth::user()->id,
      'sis_esta_id'=>1,
    ];
    FiVictataq::where('fi_salud_id', $evenmedic->id)->delete();
    foreach($dataxxxx['prm_victataq_id'] as $evmedico){
      $datosxxx['prm_victataq_id']=$evmedico;
      FiVictataq::create($datosxxx);
    }
  }

  private static function getDiscausa($evenmedic,$dataxxxx){
    $datosxxx=[
      'fi_salud_id'=>$evenmedic->id,
      'user_crea_id'=>Auth::user()->id,
      'user_edita_id'=>Auth::user()->id,
      'sis_esta_id'=>1,
    ];
    FiDiscausa::where('fi_salud_id', $evenmedic->id)->delete();
    foreach($dataxxxx['prm_discausa_id'] as $evmedico){
      $datosxxx['prm_discausa_id']=$evmedico;
      FiDiscausa::create($datosxxx);
    }
  }

  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;

      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = FiSalud::create($dataxxxx);
      }

      if(isset($dataxxxx['prm_evenmedi_id'])){
        FiSalud::grabarEventoMedico($objetoxx,$dataxxxx);
      }
      if(isset($dataxxxx['prm_discausa_id'])){
        FiSalud::getDiscausa($objetoxx,$dataxxxx);
      }
      if(isset($dataxxxx['prm_victataq_id'])){
        FiSalud::getVictataq($objetoxx,$dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
  public function prm_evenmedi_id()
  {
      return $this->belongsToMany(Parametro::class,'fi_eventos_medicos','fi_salud_id','prm_evenmedi_id');
  }
  public function prm_discausa_id()
  {
      return $this->BelongsToMany(Parametro::class,'fi_discausas','fi_salud_id','prm_discausa_id');
  }

  public function prm_victataq_id()
  {
      return $this->BelongsToMany(Parametro::class,'fi_victataqs','fi_salud_id','prm_victataq_id');
  }
}
