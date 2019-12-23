<?php

namespace App\Models\fichaIngreso;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiDocumentosAnexa extends Model {

  protected $fillable = [
      'fi_razone_id',
      'i_prm_documento_id',
      'user_crea_id',
      'user_edita_id',
      's_ruta',
      'activo'
  ];
  protected $attributes = ['activo' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

  public function creador() {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function fi_razone() {
    return $this->belongsTo(FiRazone::class);
  }

  public function editor() {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public static function documentos($padrexxx) {
    $vestuari = ['docanexa' => FiDocumentosAnexa::where('fi_razone_id', $padrexxx)->first(), 'formular' => false];
    if ($vestuari['docanexa'] == null) {
      $vestuari['formular'] = true;
    }
    return $vestuari;
  }

  public static function setDocumento($objetoxx, $dataxxxx) {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
              $datosxxx = [
                  'fi_razone_id' => $objetoxx->id,
                  'user_crea_id' => Auth::user()->id,
                  'user_edita_id' => Auth::user()->id,
                  'activo' => 1,
              ];
              // dd($dataxxxx);
              FiDocumentosAnexa::where('fi_razone_id', $objetoxx->id)->delete();
              foreach ($dataxxxx['i_prm_documento_anexa_id'] as $diagener) {
                $datosxxx['i_prm_documento_anexa_id'] = $diagener;
                FiDocumentosAnexa::create($datosxxx);
              }
              return $objetoxx;
            }, 5);
  }

  public static function transaccion($dataxxxx, $objetoxx) {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
              $dataxxxx['user_edita_id'] = Auth::user()->id;
              if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
              } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiDocumentosAnexa::create($dataxxxx);
              }
              return $objetoxx;
            }, 5);
    return $usuariox;
  }

}
