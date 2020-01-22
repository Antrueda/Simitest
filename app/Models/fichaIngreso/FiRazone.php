<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiRazone extends Model {

  protected $fillable = [
      's_porque_ingresar',
      'userd_id',
      'sis_dependenciad_id',
      'userr_id',
      'sis_dependenciar_id',
      'i_prm_estado_ingreso_id',
      'sis_nnaj_id',
      'user_crea_id',
      'user_edita_id',
      'sis_esta_id'
  ];
  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

  public function creador() {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function fi_documentos_anexas() {
    return $this->hasMany(FiDocumentosAnexa::class);
  }

  public function editor() {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public static function razones($usuariox) {
    $vestuari = ['razonesx' => FiRazone::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

    if ($vestuari['razonesx'] == null) {
      $vestuari['formular'] = true;
    }
    return $vestuari;
  }

  public static function getDocumento($objetoxx) {
    $vestuari = ['docuanex' => [], 'formular' => false];

    if ($objetoxx == '') {
      $vestuari['formular'] = true;
    } else {
      $vestuari['docuanex'] = $objetoxx->fi_documentos_anexas;
    }
    return $vestuari;
  }

  public static function transaccion($dataxxxx, $objetoxx) {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
              $dataxxxx['user_edita_id'] = Auth::user()->id;
              if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
              } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiRazone::create($dataxxxx);
              }

              $dataxxxx['sis_tabla_id']=27;
              IndicadorHelper::asignaLineaBase($dataxxxx);

              return $objetoxx;
            }, 5);
    return $usuariox;
  }

}
