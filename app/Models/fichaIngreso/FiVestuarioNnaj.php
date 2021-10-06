<?php

namespace App\Models\fichaIngreso;

use App\Models\sistema\SisNnaj;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiVestuarioNnaj extends Model
{
  protected $fillable = [
    'user_crea_id', 'user_edita_id', 'prm_t_pantalon_id',
    'prm_t_camisa_id', 'prm_t_zapato_id', 'prm_sexo_etario_id', 'sis_nnaj_id', 'sis_esta_id'
  ];

  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function sis_nnaj()
  {
    return $this->belongsTo(SisNnaj::class);
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = FiVestuarioNnaj::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
  public static function vestuario($usuariox)
  {
    $vestuari=['vestuari'=>FiVestuarioNnaj::where('sis_nnaj_id', $usuariox)->first(),'formular'=>false];

    if ($vestuari['vestuari'] == null) {
      $vestuari['formular'] = true;
    }
    return $vestuari;
  }
}
