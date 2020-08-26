<?php

namespace App\Models\Indicadores;

use App\Models\Sistema\SisActividad;
use App\Models\Sistema\SisFsoporte;
use app\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InActsoporte extends Model
{
  protected $fillable = [
    'in_accion_gestion_id',
    'sis_fsoporte_id',
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
  public function in_accion_gestion()
  {
    return $this->belongsTo(InAccionGestion::class);
  }
  public function sis_fsoporte()
  {
    return $this->belongsTo(SisFsoporte::class);
  }
  public static function transaccion($dataxxxx,  $objetoxx)
  {

    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = InActsoporte::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
  
}
