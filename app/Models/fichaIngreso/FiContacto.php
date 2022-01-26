<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiContacto extends Model{
  protected $fillable = [
    'i_prm_tipo_contacto_id',
    's_contacto_condicion',
    'i_prm_contacto_opcion_id',
    's_entidad_remite',
    'd_fecha_remite_id',
    'i_prm_motivo_contacto_id',
    'i_prm_aut_tratamiento_id',
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
  public static function contacto($usuariox)
  {
    $vestuari = ['contacto' => FiContacto::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

    if ($vestuari['contacto'] == null) {
      $vestuari['formular'] = true;
    }
    return $vestuari;
  }
}
