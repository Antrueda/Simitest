<?php

namespace App\Models\fichaIngreso;

use app\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiRazonIniciado extends Model
{
    protected $fillable = [    
    'fi_situacion_especial_id', 
    'i_prm_iniciado_id',
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
  public function fi_situacion_especial()
  {
    return $this->belongsTo(FiSituacionEspecial::class);
  }
  public static function bienvenida($usuariox)
  {
    $vestuari = ['iniciado' => FiRazonIniciado::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

    if ($vestuari['iniciado'] == null) {
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
        $objetoxx = FiRazonIniciado::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
