<?php

namespace App\Models\Indicadores;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InValoracion extends Model
{
  protected $fillable = [
    'i_prm_categoria_id',
    'i_prm_cactual_id',
    'i_prm_avance_id',
    's_valoracion',
    'in_lineabase_nnaj_id',
    'i_prm_nivel_id',
    'user_crea_id',
    'user_edita_id',
    'activo'
  ];

  protected $attributes = ['activo' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public function in_pregunta()
  {
    return $this->belongsTo(InPregunta::class);
  }

  public function in_lineabase_nnaj()
  {
    return $this->belongsTo(InLineabaseNnaj::class);
  }
  public function respuestas()
  {
    return $this->belongsToMany(Parametro::class, 'in_respuestas', 'in_validacion_id', 'i_prm_respuesta_id');
  }


  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = InValoracion::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }


  public static function combo($padrexxx, $cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }

    foreach (InValoracion::where('in_fuentes.id', $padrexxx)
      ->join('in_preguntas', 'in_fuentes.in_pregunta_id', '=', 'in_preguntas.id')
      ->get() as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->in_pregunta->s_pregunta];
      } else {
        $comboxxx[$registro->id] = $registro->in_pregunta->s_pregunta;
      }
    }
    return $comboxxx;
  }
  public static function getAvance($dataxxxx){
    return InValoracion::select(['pc.nombre as iavacate', 'pa.nombre as iavancex', 'i_prm_nivel_id', 'i_prm_avance_id'])
    ->join('parametros as pc', 'in_valoracions.i_prm_categoria_id', '=', 'pc.id')
    ->join('parametros as pa', 'in_valoracions.i_prm_avance_id', '=', 'pa.id')
    ->join('parametros as pn', 'in_valoracions.i_prm_nivel_id', '=', 'pn.id')

    ->where('in_lineabase_nnaj_id', $dataxxxx['idlinbas'])
    ->orderBy('in_valoracions.updated_at', 'desc')
    ->first();
  }
  public static function getValoracion($dataxxxx,$posiciox){
    $invalora= InValoracion::select(['pc.nombre as iavacate', 's_valoracion'])
    ->join('parametros as pc', 'in_valoracions.i_prm_categoria_id', '=', 'pc.id')
    ->where('in_lineabase_nnaj_id', $dataxxxx['indicado']['idlinbas'])
    ->get();

    foreach($invalora as $invalorx){
      $dataxxxx['indicado']['indicado'][$posiciox]['avancex'.$invalorx['iavacate']]=$invalorx['s_valoracion']; 
    }
    return $dataxxxx;
  }
}
