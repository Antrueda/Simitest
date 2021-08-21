<?php

namespace App\Models\fichaIngreso;


use App\Models\Parametro;
use App\Models\sistema\SisNnaj;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiJustrest extends Model
{
  protected $fillable = [
    'i_prm_vinculado_violencia_id',
    'i_prm_riesgo_participar_id',
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
  public function sis_nnaj()
  {
    return $this->belongsTo(SisNnaj::class);
  }

  public function prm_situacion_id(){
    return $this->belongsToMany(Parametro::class,'fi_jr_causassis', 'fi_justrest_id', 'prm_situacion_id');
  }

  public function prm_riesgo_id(){
    return $this->belongsToMany(Parametro::class,'fi_jr_causasmos', 'fi_justrest_id', 'prm_riesgo_id');
  }

  public static function getCausassi($dataxxxx,$objetoxx){
    $datosxxx = [
      'fi_justrest_id' => $objetoxx->id,
      'user_crea_id' => Auth::user()->id,
      'user_edita_id' => Auth::user()->id,
      'sis_esta_id' => 1,
  ];
    FiJrCausassi::where('fi_justrest_id', $objetoxx->id)->delete();
        foreach ($dataxxxx['prm_situacion_id'] as $diagener) {
            $datosxxx['prm_situacion_id'] = $diagener;
            FiJrCausassi::create($datosxxx);
        }
  }

  public static function getCausasmo($dataxxxx,$objetoxx){
    $datosxxx = [
      'fi_justrest_id' => $objetoxx->id,
      'user_crea_id' => Auth::user()->id,
      'user_edita_id' => Auth::user()->id,
      'sis_esta_id' => 1,
  ];
    FiJrCausasmo::where('fi_justrest_id', $objetoxx->id)->delete();
        foreach ($dataxxxx['prm_riesgo_id'] as $diagener) {
            $datosxxx['prm_riesgo_id'] = $diagener;
            FiJrCausasmo::create($datosxxx);
        }
  }
  public static function justicia($usuariox)
  {
    $vestuari = ['justicia' => FiJustrest::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

    if ($vestuari['justicia'] == null) {
      $vestuari['formular'] = true;
    }
    return $vestuari;
  }

  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = FiJustrest::create($dataxxxx);
      }
    if(isset($dataxxxx['prm_riesgo_id'])){
    FiJustrest::getCausasmo($dataxxxx,$objetoxx);
    }
    if(isset($dataxxxx['prm_situacion_id'])){
    FiJustrest::getCausassi($dataxxxx,$objetoxx);
    }
      FiProcesoPard::transaccion($dataxxxx,FiProcesoPard::where('fi_justrest_id',$objetoxx->id)->first(), $objetoxx);
      FiProcesoSpoa::transaccion($dataxxxx,FiProcesoSpoa::where('fi_justrest_id',$objetoxx->id)->first(), $objetoxx);
      FiProcesoSrpa::transaccion($dataxxxx,FiProcesoSrpa::where('fi_justrest_id',$objetoxx->id)->first(), $objetoxx);

      return $objetoxx;
    }, 5);
    return $usuariox;
  }

  public function i_prm_vinculado_violencia()
  {
      return $this->belongsTo(Parametro::class, 'i_prm_vinculado_violencia_id');
  }

  public function i_prm_riesgo_participar()
  {
      return $this->belongsTo(Parametro::class, 'i_prm_riesgo_participar_id');
  }

  public function fi_proceso_srpas()
  {
      return $this->hasOne(FiProcesoSrpa::class, 'fi_justrest_id');
  }

  public function fi_proceso_spoas()
  {
      return $this->hasOne(FiProcesoSpoa::class, 'fi_justrest_id');
  }

  public function fi_jr_causassis()
  {
      return $this->hasMany(FiJrCausassi::class, 'fi_justrest_id');
  }

  public function fi_jr_causasmos()
  {
      return $this->hasMany(FiJrCausasmo::class, 'fi_justrest_id');
  }

}
