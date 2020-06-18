<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiGeneracionIngreso extends Model{
  protected $fillable = [
    'acgeingr_id',
    's_trabajo_formal',
    'trabinfo_id',
    'otractiv_id',
    'noingres_id',
    'idibuempl',
    'imebuempl',
    'ianbuempl',
    'jogeingr_id',
    's_hora_inicial',
    's_hora_final',
    'frecingr_id',
    'ingrmensual',
    'relabora_id',
    'sis_nnaj_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];

  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'idibuempl' => 0,
  'imebuempl' => 0, 'ianbuempl' => 0, 's_trabajo_formal' => ' ',];
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public static function generacion($usuariox)
  {
    $vestuari = ['geneingr' => FiGeneracionIngreso::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false,'diasgene'=>[]];

    if ($vestuari['geneingr'] == null) {
      $vestuari['formular'] = true;
    }else{
      $vestuari['diasgene']=$vestuari['geneingr']->fi_dias_genera_ingresos;
    }
    return $vestuari;
  }
  public function fi_dias_genera_ingresos(){
    return $this->hasMany(FiDiasGeneraIngreso::class);
  }
  private static function grabarDiaGenera($digenera,$dataxxxx){
    $datosxxx=[
      'fi_generacion_ingreso_id'=>$digenera->id,
      'user_crea_id'=>Auth::user()->id,
      'user_edita_id'=>Auth::user()->id,
      'sis_esta_id'=>1,
    ];
    FiDiasGeneraIngreso::where('fi_generacion_ingreso_id', $digenera->id)->delete();
    foreach($dataxxxx['i_prm_dia_genera_id'] as $diagener){
      $datosxxx['i_prm_dia_genera_id']=$diagener;
      FiDiasGeneraIngreso::create($datosxxx);
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
        $objetoxx = FiGeneracionIngreso::create($dataxxxx);
      }
      if(isset($dataxxxx['i_prm_dia_genera_id'])){
        FiGeneracionIngreso::grabarDiaGenera($objetoxx,$dataxxxx);
      }

      $dataxxxx['sis_tabla_id']=15;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      $dataxxxx['sis_tabla_id']=10;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
