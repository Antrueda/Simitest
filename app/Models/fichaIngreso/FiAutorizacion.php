<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiAutorizacion extends Model{
  protected $fillable = [
    'i_prm_autorizo_id',
    'd_autorizacion',
    'i_prm_tipo_diligencia_id',
    'i_prm_parentesco_id',
    'sis_nnaj_id',
    'fi_compfami_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];

  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1,'i_prm_parentesco_id'=>805];
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }
  public function fi_modalidads()
  {
    return $this->hasMany(FiModalidad::class);
  }
  public function fi_compfami()
  {
    return $this->belongsTo(FiCompfami::class);
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

      $dataxxxx['sis_tabla_id']=3;
      //IndicadorHelper::asignaLineaBase($dataxxxx);

      $dataxxxx['sis_tabla_id']=18;
      //IndicadorHelper::asignaLineaBase($dataxxxx);

      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
