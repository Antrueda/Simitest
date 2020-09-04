<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\Parametro;
use app\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiSalud extends Model{
  protected $fillable = [
    'i_prm_regimen_salud_id',
    'sis_entidad_salud_id',
    'i_prm_tiene_sisben_id',
    'd_puntaje_sisben',
    'i_prm_tiene_discapacidad_id',
    'i_prm_tipo_discapacidad_id',
    'i_prm_tiene_cert_discapacidad_id',
    'i_prm_disc_perm_independencia_id',
    'i_prm_esta_gestando_id',
    'i_numero_semanas',
    'i_prm_esta_lactando_id',
    'i_numero_meses',
    'i_prm_tiene_problema_salud_id',
    'i_prm_problema_salud_id',
    'i_prm_consume_medicamentos_id',
    's_cual_medicamento',
    'i_prm_tiene_hijos_id',
    'i_numero_hijos',
    'i_numero_hijos',
    's_evento_medico',
    'i_prm_conoce_metodos_id',
    'i_prm_usa_metodos_id',
    'i_prm_cual_metodo_id',
    'i_prm_uso_voluntario_id',
    'i_comidas_diarias',
    'i_prm_razon_no_cinco_comidas_id',
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
    foreach($dataxxxx['i_prm_evento_medico_id'] as $evmedico){
      $datosxxx['i_prm_evento_medico_id']=$evmedico;
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

      if(isset($dataxxxx['i_prm_evento_medico_id'])){
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
  public function i_prm_evento_medico_id()
  {
      return $this->belongsToMany(Parametro::class,'fi_eventos_medicos','fi_salud_id','i_prm_evento_medico_id');
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
