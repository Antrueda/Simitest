<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiCondicionAmbiente extends Model
{
  protected $fillable = [
    'fi_residencia_id',
    'i_prm_condicion_amb_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];
  public function fi_residencia()
  {
    return $this->belongsTo(FiResidencia::class);
  }
  public function condicionAmbiente()
  {
    return $this->belongsTo(Parametro::class, 'i_prm_condicion_amb_id');
  }
  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public static function getCondicionAbiente($residenc)
  {
    $vestuari = ['condsele' => [], 'formular' => false];

    if ($residenc == 0) {
      $vestuari['formular'] = true;
    } else {
      $vestuari['condsele'] = FiCondicionAmbiente::where('fi_residencia_id', $residenc)->get();
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
        $objetoxx = FiCondicionAmbiente::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }

  public function i_prm_condicion_amb()
  {
      return $this->belongsTo(Parametro::class, 'i_prm_condicion_amb_id');
  }
}
