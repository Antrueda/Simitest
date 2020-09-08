<?php

namespace App\Models\Acciones\Grupales;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgTema extends Model
{
  protected $fillable = [
    's_tema',
    'area_id',
    's_descripcion',
    'i_prm_categoria_id',
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
  public function ag_tallers()
  {
    return $this->hasMany(AgTaller::class);
  }

  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = AgTema::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
  public static function combo($padrexxx, $cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }
    return $comboxxx;
  }

  public static function comb($cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }
    foreach (AgTema::get() as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_tema];
      } else {
        $comboxxx[$registro->id] = $registro->s_tema;
      }
    }
    return $comboxxx;
  }
  public static function combo_talleres($dataxxxx)
  {
    $comboxxx = [];
    if ($dataxxxx['cabecera']) {
      if($dataxxxx['ajaxxxxx']){
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      }else{
        $comboxxx = ['' => 'Seleccione'];
      }
      
    }
    $talleres=AgTema::where('id',$dataxxxx['agtemaid'])->first();
    foreach ($talleres->ag_tallers as $registro) {
      if ($dataxxxx['ajaxxxxx']) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_taller];
      } else {
        $comboxxx[$registro->id] = $registro->s_taller;
      }
    }
    return $comboxxx;
  }
 
}
