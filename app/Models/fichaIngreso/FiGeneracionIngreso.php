<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiGeneracionIngreso extends Model{
  protected $fillable = [
    'prm_actgeing_id',
    's_trabajo_formal',
    'prm_trabinfo_id',
    'prm_otractiv_id',
    'prm_razgeing_id',
    'diabuemp',
    'mesbuemp',
    'anobuemp',
    'prm_jorgeing_id',
    's_hora_inicial',
    's_hora_final',
    'prm_frecingr_id',
    'totinmen',
    'prm_tiprelab_id',
    'sis_nnaj_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];

  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'diabuemp' => 0,
  'mesbuemp' => 0, 'anobuemp' => 0, 's_trabajo_formal' => ' ',];
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
  public function prm_diagener_id(){
    return $this->belongsToMany(Parametro::class,'fi_dias_genera_ingresos','fi_generacion_ingreso_id','prm_diagener_id');
  }
 

  

  public function prm_actgeing()
  {
      return $this->belongsTo(Parametro::class, 'prm_actgeing_id');
  }

  public function prm_trabinfo()
  {
      return $this->belongsTo(Parametro::class, 'prm_trabinfo_id');
  }

  public function prm_otractiv()
  {
      return $this->belongsTo(Parametro::class, 'prm_otractiv_id');
  }

  public function prm_razgeing()
  {
      return $this->belongsTo(Parametro::class, 'prm_razgeing_id');
  }

  public function prm_jorgeing()
  {
      return $this->belongsTo(Parametro::class, 'prm_jorgeing_id');
  }

  public function prm_frecingr()
  {
      return $this->belongsTo(Parametro::class, 'prm_frecingr_id');
  }

  public function prm_tiprelab()
  {
      return $this->belongsTo(Parametro::class, 'prm_tiprelab_id');
  }

  public function fi_dias_genera_ingresos()
  {
      return $this->hasMany(FiDiasGeneraIngreso::class, 'fi_generacion_ingreso_id');
  }

}
