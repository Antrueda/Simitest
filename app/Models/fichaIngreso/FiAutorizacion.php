<?php

namespace App\Models\fichaIngreso;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiAutorizacion extends Model{
  protected $fillable = [ 
    's_nombre_mayor',
    'i_documento_mayor',
    's_lugarexp_mayor',
    'i_prm_autorizo_id',
    'i_prm_parentesco_mayor_id',
    's_nombre_nna',
    'i_edad_nna',
    'i_prm_documento_menor_id',
    's_documento_nna',
    's_persona_concerta',
    'd_fecha_autorizacion',
    'i_prm_tipo_diligencia_id',
    'sis_nnaj_id', 
    'user_crea_id', 
    'user_edita_id',
    'activo'
  ];

  protected $attributes = ['activo' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }
  public function fi_modalidads()
  {
    return $this->hasMany(FiModalidad::class);
  }
  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public static function autorizacion($usuariox)
  {
    $vestuari = ['autorizx' => FiAutorizacion::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

    if ($vestuari['autorizx'] == null) {
      $vestuari['formular'] = true;
    }
    return $vestuari;
  }

  public static function getModalidad($objetoxx)
  {
    $vestuari = ['modaling' => [], 'formular' => false];

    if ($objetoxx == '') {
      $vestuari['formular'] = true;
    } else {
      $vestuari['modaling'] = $objetoxx->fi_modalidads;
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
        $objetoxx = FiAutorizacion::create($dataxxxx);
      }
      
      if(isset($dataxxxx['i_prm_modalidad_id'])){
        FiModalidad::setModalidad($objetoxx, $dataxxxx);
      }
      
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
