<?php

namespace App\Models\Acciones\Grupales;

use App\Models\Indicadores\InIndicador;
use App\Models\Indicadores\InPregunta;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgContexto extends Model
{
  protected $fillable = [
    's_descripcion',
    's_contexto',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id',
    'estusuario_id'
  ];
  public function ag_indicador()
  {
    return $this->belongsTo(InIndicador::class);
  }
  public function in_pregunta_indicadors()
  {
    return $this->hasMany(InPregunta::class);
  }
  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }
  public function estusuario()
  {
      return $this->belongsTo(Estusuario::class);
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['s_contexto'] = strtoupper($dataxxxx['s_contexto']);
      $dataxxxx['s_descripcion'] = strtoupper($dataxxxx['s_descripcion']);
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = AgContexto::create($dataxxxx);
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

    foreach (AgContexto::where('in_indicador_id', $padrexxx)->get() as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_linea_base];
      } else {
        $comboxxx[$registro->id] = $registro->s_linea_base;
      }
    }
    return $comboxxx;
  }
}
