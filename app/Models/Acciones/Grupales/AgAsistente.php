<?php

namespace App\Models\Acciones\Grupales;

use App\Models\Indicadores\InIndicador;
use App\Models\Indicadores\InPregunta;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgAsistente extends Model
{
  protected $fillable = [
    'fi_dato_basico_id',
    'ag_actividad_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];
  public function in_indicador()
  {
    return $this->belongsTo(InIndicador::class);
  }
  public function in_pregunta_indicadors()
  {
    return $this->hasMany(InPregunta::class);
  }
  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public function ag_actividad()
  {
    return $this->belongsTo(AgActividad::class);
  }

  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = AgAsistente::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
