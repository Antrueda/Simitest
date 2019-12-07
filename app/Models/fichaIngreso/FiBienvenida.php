<?php

namespace App\Models\fichaIngreso;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\sistema\SisDependencia;

class FiBienvenida extends Model{
  protected $fillable = [ 
    'sis_dependencia_id',
    'i_prm_quiere_entrar_id',
    'i_prm_servicio_id',
    's_porque_quiere_entrar',
    's_que_gustaria_hacer',
    'sis_nnaj_id', 
    'user_crea_id', 
    'user_edita_id',
    'activo'
  ];

  protected $attributes = ['activo' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

  public function dependencia(){
    return $this->belongsTo(SisDependencia::class, 'sis_dependencia_id');
  }

  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public static function bienvenida($usuariox)
  {
    $vestuari = ['bienveni' => FiBienvenida::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

    if ($vestuari['bienveni'] == null) {
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
        $objetoxx = FiBienvenida::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
