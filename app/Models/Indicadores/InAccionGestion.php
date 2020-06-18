<?php

namespace App\Models\Indicadores;

use App\Models\sistema\SisActividad;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InAccionGestion extends Model
{ 
    protected $fillable = [
    'sis_actividad_id',
    'i_porcentaje',
    'i_tiempo',
    'in_lineabase_nnaj_id',
    'i_prm_ttiempo_id',
    'sis_docufuen_id',
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
  
  public function in_pregunta(){
    return $this->belongsTo(InPregunta::class);
  }
  public function in_lineabase_nnaj(){
    return $this->belongsTo(InLineabaseNnaj::class);
  }
  public function sis_actividad(){
    return $this->belongsTo(SisActividad::class);
  }
  public static function transaccion($dataxxxx,  $objetoxx)
  {  
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = InAccionGestion::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
