<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiSalud extends Model{
  protected $fillable = [
    'regisalu_id',
    'sis_entidad_salud_id',
    'tiensalu_id',
    'd_puntaje_sisben',
    'tiendisc_id',
    'tipodisc_id',
    'ticedisc_id',
    'dipeinde_id',
    'estagest_id',
    'i_numero_semanas',
    'estalact_id',
    'i_numero_meses',
    'probsalu_id',
    'i_prm_problema_salud_id',
    'consmedi_id',
    's_cual_medicamento',
    'tienhijo_id',
    'i_numero_hijos',
    'i_numero_hijos',
    's_evento_medico',
    'conometo_id',
    'usametod_id',
    'cualmeto_id',
    'usovolun_id',
    'i_comidas_diarias',
    'racicomi_id',
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

  public function fi_eventos_medicos(){
    return $this->hasMany(FiEventosMedico::class);
  }
  private static function grabarEventoMedico($evenmedic,$dataxxxx){
    $datosxxx=[
      'fi_salud_id'=>$evenmedic->id,
      'user_crea_id'=>Auth::user()->id,
      'user_edita_id'=>Auth::user()->id,
      'sis_esta_id'=>1,
    ];
    FiEventosMedico::where('fi_salud_id', $evenmedic->id)->delete();
    foreach($dataxxxx['evenmedi_id'] as $evmedico){
      $datosxxx['evenmedi_id']=$evmedico;
      FiEventosMedico::create($datosxxx);
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
      if(isset($dataxxxx['evenmedi_id'])){
        FiSalud::grabarEventoMedico($objetoxx,$dataxxxx);
      }

      $dataxxxx['sis_tabla_id']=33;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      $dataxxxx['sis_tabla_id']=13;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
