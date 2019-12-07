<?php

namespace App\Models\fichaIngreso;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiRazone extends Model{
  protected $fillable = [
    's_porque_ingresar',
    's_persona_diligencia',
    's_documento',
    's_cargo_contrato',
    's_area_equipo',
    's_persona_responsable',
    's_documento_responsable',
    's_cargo_contrato_reponsable',
    's_area_equipo_reponsable',
    'i_prm_estado_ingreso_id',
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
  public function fi_documentos_anexas()
  {
    return $this->hasMany(FiDocumentosAnexa::class);
  }
  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public static function razones($usuariox)
  {
    $vestuari = ['razonesx' => FiRazone::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

    if ($vestuari['razonesx'] == null) {
      $vestuari['formular'] = true;
    }
    return $vestuari;
  }

  public static function getDocumento($objetoxx)
  {
    $vestuari = ['docuanex' => [], 'formular' => false];

    if ($objetoxx == '') {
      $vestuari['formular'] = true;
    } else {
      $vestuari['docuanex'] = $objetoxx->fi_documentos_anexas;
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
        $objetoxx = FiRazone::create($dataxxxx);
      }

      if(isset($dataxxxx['i_prm_documento_anexa_id'])){
        FiDocumentosAnexa::setDocumento($objetoxx, $dataxxxx);
      }

      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
