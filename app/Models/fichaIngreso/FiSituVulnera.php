<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiSituVulnera extends Model{
  protected $table = 'fi_situ_vulnera';

  protected $fillable = [
    'fi_situacion_especial_id',
    'prm_situacion_vulnera_id',

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
  public static function bienvenida($usuariox)
  {
    $vestuari = ['bienveni' => FiSituVulnera::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

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
        $objetoxx = FiSituVulnera::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }

  public function prm_situacion_vulnera()
  {
      return $this->belongsTo(Parametro::class, 'prm_situacion_vulnera_id');
  }
}
