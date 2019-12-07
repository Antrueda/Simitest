<?php

namespace App\Models\Indicadores;

use App\Models\Acciones\Grupales\AgTema;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
  protected $fillable = [
    'nombre',
    'activo',
    'user_crea_id',
    'user_edita_id'
  ];

  protected $attributes = [
    'user_crea_id' => 1,
    'user_edita_id' => 1
  ];

  public function in_indicadors()
  {
    return $this->hasMany(InIndicador::class);
  }
  public function ag_temas()
  {
    return $this->hasMany(AgTema::class);
  }

  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

public static function combo_tema($padrexxx, $cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }
    $areaxxxx = Area::get();
    if ($padrexxx != '') {
      $areaxxxx = Area::where('id', $padrexxx)->first()->ag_temas;
    }
    foreach ($areaxxxx as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => ($padrexxx=='')? $registro->nombre:$registro->s_tema];
      } else {
        $comboxxx[$registro->id] = ($padrexxx=='')? $registro->nombre:$registro->s_tema;
      }
    }
    return $comboxxx;
  }

  public static function combo($padrexxx, $cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }
    
    $areaxxxx = Area::get();
    if ($padrexxx != '') { 
      $areaxxxx = Area::where('id', $padrexxx)->first()->in_indicadors;
    }

    
    foreach ($areaxxxx as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => ($padrexxx=='')? $registro->nombre:$registro->s_indicador];
      } else {
        $comboxxx[$registro->id] = ($padrexxx=='')? $registro->nombre:$registro->s_indicador;
      }
    }

    return $comboxxx;
  }

  public static function comb($cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        foreach (Area::get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }
}
