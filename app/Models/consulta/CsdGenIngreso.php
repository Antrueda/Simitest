<?php

namespace App\Models\consulta;


use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdGenIngreso extends Model{
	protected $fillable = ['csd_id', 'observacion', 'prm_actividad_id', 'trabaja', 'prm_informal_id', 'prm_otra_id', 'prm_laboral_id', 'prm_frecuencia_id', 'intensidad', 'prm_dificultad_id', 'razon', 'user_crea_id', 'user_edita_id', 'sis_esta_id','prm_tipofuen_id'
    ];
  
    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function actividad(){
        return $this->belongsTo(Parametro::class, 'prm_actividad_id');
    }

    public function informal(){
        return $this->belongsTo(Parametro::class, 'prm_informal_id');
    }

    public function otra(){
        return $this->belongsTo(Parametro::class, 'prm_otra_id');
    }

    public function laboral(){
        return $this->belongsTo(Parametro::class, 'prm_laboral_id');
    }

    public function frecuencia(){
        return $this->belongsTo(Parametro::class, 'prm_frecuencia_id');
    }

    public function dificultad(){
        return $this->belongsTo(Parametro::class, 'prm_dificultad_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function generacion($usuariox)
  {
    $vestuari = ['geneingr' => CsdGenIngreso::where('csd_id', $usuariox)->first(), 'formular' => false,'diasgene'=>[]];

    if ($vestuari['geneingr'] == null) {
      $vestuari['formular'] = true;
    }else{
      $vestuari['diasgene']=$vestuari['geneingr']->csd_dias_gen_ingresos;
    }
    return $vestuari;
  }
  public function prm_dia_genera_id(){
    return $this->belongsToMany(Parametro::class,'csd_dias_gen_ingresos','csd_gen_ingresos_id','prm_dia_genera_id');
  }

  private static function grabarDiaGenera($digenera,$dataxxxx){
    $datosxxx=[
      'csd_gen_ingresos_id'=>$digenera->id,
      'user_crea_id'=>Auth::user()->id,
      'user_edita_id'=>Auth::user()->id,
      'sis_esta_id'=>1,
    ];
    
    foreach($dataxxxx['prm_dia_genera_id'] as $diagener){
      $datosxxx['prm_dia_genera_id']=$diagener;
      CsdDiasGenIngreso::create($datosxxx);
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
          $objetoxx = CsdGenIngreso::create($dataxxxx);
        }
         return $objetoxx;
      }, 5);
      return $usuariox;
    }
}