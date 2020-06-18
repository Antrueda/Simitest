<?php

namespace App\Models\Indicadores;

use App\Models\sistema\SisDocufuen;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InDocIndi extends Model
{
  protected $fillable = [
    'in_indicador_id',
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
  public function in_fuentes()
  {
    return $this->belongsToMany(InDocIndi::class);
  }
  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public function in_indicador()
  {
    return $this->belongsTo(InIndicador::class);
  }
  public function sis_docufuen()
  {
    return $this->belongsTo(SisDocufuen::class);
  }

  public static function transaccion($dataxxxx,  $objetoxx)
  {

    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = InDocIndi::create($dataxxxx);
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

    foreach (InDocIndi::select(['in_doc_indis.id', 'sis_docufuens.nombre'])
      ->where('in_indicador_id', $padrexxx)
      ->join('sis_docufuens', 'in_doc_indis.sis_docufuen_id', '=', 'sis_docufuens.id')
      ->get() as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
      } else {
        $comboxxx[$registro->id] = $registro->nombre;
      }
    }
    return $comboxxx;
  }
}
