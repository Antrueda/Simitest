<?php

namespace App\Models\sistema;

use App\Models\Indicadores\InAccionGestion;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SisFsoporte extends Model
{
  protected $fillable = [
    'nombre',
    'sis_actividad_id',
    'activo',
    'user_crea_id',
    'user_edita_id'
  ];

  protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

  public function sis_actividad()
  {
    return $this->belongsTo(SisActividad::class);
  }

  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public static function transaccion($dataxxxx, $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = SisFsoporte::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }

  public static function combo($padrexxx, $cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }

    foreach (SisFsoporte::where('sis_actividad_id', $padrexxx)->get() as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
      } else {
        $comboxxx[$registro->id] = $registro->nombre;
      }
    }
    return $comboxxx;
  }

  /**
   * 
   * @param $dataxxxx
   */
  // $dataxxxx=[
  //  'cabecera'=>'',// true indica si debe mostrar el texto seleccione en el combo y false que no
  //  'ajaxxxxx'=>'', //true indica que el combo se debe armar para ser mostrado por ajax y false no
  //  'padrexxx'=>'', //indica cual es el padre arma el combo
  //  'optionxx'=>'', //indica cual es la opcion que se selecciono en el caso de estar editando
  // ];
  public static function getSoportes($dataxxxx)
  {

    $comboxxx = [];
    if ($dataxxxx['cabecera']) {
      if ($dataxxxx['ajaxxxxx']) {
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }
    $notinxxx = [];
    $soportes = SisActividad::select(['sis_fsoportes.id'])
      ->join('sis_fsoportes', 'sis_actividads.id', '=', 'sis_fsoportes.sis_actividad_id')
      ->join('in_accion_gestions', 'sis_actividads.id', '=', 'in_accion_gestions.sis_actividad_id')
      ->join('in_actsoportes', 'in_accion_gestions.id', '=', 'in_actsoportes.in_accion_gestion_id')
      ->where('in_accion_gestions.id', $dataxxxx['padrexxx'])->get();

    foreach ($soportes as $registro) {
      if ($registro['id'] != $registro['dataxxxx']) {
        $notinxxx[] = $registro['id'];
      }
    }
    $soportes = InAccionGestion::select(['sis_fsoportes.id as valuexxx', 'sis_fsoportes.nombre as optionxx'])
      ->join('sis_actividads', 'in_accion_gestions.sis_actividad_id', '=', 'sis_actividads.id')
      ->join('sis_fsoportes', 'sis_actividads.id', '=', 'sis_fsoportes.sis_actividad_id')

      ->where('in_accion_gestions.id', $dataxxxx['padrexxx'])->get();
    foreach ($soportes as $registro) {
      if ($dataxxxx['ajaxxxxx']) {
        $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->optionxx];
      } else {
        $comboxxx[$registro->valuexxx] = $registro->optionxx;
      }
    }
    return $comboxxx;
  }
}
