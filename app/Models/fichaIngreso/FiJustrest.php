<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\Sistema\SisNnaj;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiJustrest extends Model
{
  protected $fillable = [
    'i_prm_vinculado_violencia_id',
    'i_prm_causa_vincula_vio_id',
    'i_prm_riesgo_participar_id',
    'i_prm_causa_riesgo_part_id',
    'sis_nnaj_id',
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
  public function sis_nnaj()
  {
    return $this->belongsTo(SisNnaj::class);
  }
  public static function justicia($usuariox)
  {
    $vestuari = ['justicia' => FiJustrest::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

    if ($vestuari['justicia'] == null) {
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
        $objetoxx = FiJustrest::create($dataxxxx);
      }

      FiProcesoPard::transaccion($dataxxxx,FiProcesoPard::where('fi_justrest_id',$objetoxx->id)->first(), $objetoxx);
      FiProcesoSpoa::transaccion($dataxxxx,FiProcesoSpoa::where('fi_justrest_id',$objetoxx->id)->first(), $objetoxx);
      FiProcesoSrpa::transaccion($dataxxxx,FiProcesoSrpa::where('fi_justrest_id',$objetoxx->id)->first(), $objetoxx);

      $dataxxxx['sis_tabla_id']=17;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      $dataxxxx['sis_tabla_id']=22;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      $dataxxxx['sis_tabla_id']=23;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      $dataxxxx['sis_tabla_id']=24;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}