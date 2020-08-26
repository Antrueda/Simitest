<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use app\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiViolencia extends Model{
  protected $fillable = [
    'i_prm_presenta_violencia_id',
    'i_prm_familiar_fisica_id',
    'i_prm_amistad_fisica_id',
    'i_prm_pareja_fisica_id',
    'i_prm_comunidad_fisica_id',
    'i_prm_familiar_psico_id',
    'i_prm_amistad_psico_id',
    'i_prm_pareja_psico_id',
    'i_prm_comunidad_psico_id',
    'i_prm_familiar_sexual_id',
    'i_prm_amistad_sexual_id',
    'i_prm_pareja_sexual_id',
    'i_prm_comunidad_sexual_id',
    'i_prm_familiar_econo_id',
    'i_prm_amistad_econo_id',
    'i_prm_pareja_econo_id',
    'i_prm_comunidad_econo_id',
    'i_prm_violencia_genero_id',
    'i_prm_condicion_presenta_id',
    'i_prm_depto_condicion_id',
    'i_prm_municipio_condicion_id',
    'i_prm_tiene_certificado_id',
    'i_prm_depto_certifica_id',
    'i_prm_municipio_certifica_id',
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
  public static function violencia($usuariox)
  {
    $vestuari = ['violenci' => FiViolencia::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

    if ($vestuari['violenci'] == null) {
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
        $objetoxx = FiViolencia::create($dataxxxx);
      }

      $dataxxxx['sis_tabla_id']=38;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
