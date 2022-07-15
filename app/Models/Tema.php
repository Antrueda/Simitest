<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Tema extends Model {

  protected $fillable = ['nombre', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];
  protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

  public function setNombreAttribute($value) {
    $this->attributes['nombre'] = strtoupper($value);
  }

  public function temacombos() {
    return $this->hasMany(Temacombo::class);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  $temaxxxx tema padre de los parámetros
   * @param  $cabecera indica si el combo se debe devolver con el seleccione
   * @param  $ajaxxxxx indica si el combo es para devolver en array para objeto json
   * @return $comboxxx
   */
  public static function combo($temaxxxx, $cabecera, $ajaxxxxx) {
    $comboxxx = [];
    if ($cabecera) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }

   

    // $parametr = Temacombo::where('id',$temaxxxx)->with(['parametros'=>function($queryxxx){
    //   $queryxxx->select(['id as valuexxx', 'nombre as optionxx'])->where('parametros.sis_esta_id',1)->orderBy('nombre', 'asc');
    // }])
    // ->first();


   // if (Auth::user()->s_documento=='111111111111') {
      $parametr = Temacombo::join('parametro_temacombo','temacombos.id','=','parametro_temacombo.temacombo_id')
      ->join('parametros','parametro_temacombo.parametro_id','=','parametros.id')
      ->where('parametro_temacombo.sis_esta_id',1)
      ->where('temacombos.id',$temaxxxx)
      ->get(['parametros.id as valuexxx', 'parametros.nombre as optionxx']);
   // }

    foreach ($parametr as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->optionxx];
      } else {
        $comboxxx[$registro->valuexxx] = $registro->optionxx;
      }
    }
    return $comboxxx;
  }


  //Tema::combo
  public static function comboDesc($temaxxxx, $cabecera, $ajaxxxxx) {
    $comboxxx = [];
    if ($cabecera) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }

    $parametr = Temacombo::select(['parametros.id', 'parametros.nombre'])
            ->join('parametro_temacombo', 'temacombos.id', '=', 'parametro_temacombo.temacombo_id')
            ->join('parametros', 'parametro_temacombo.parametro_id', '=', 'parametros.id')
            ->where('temacombos.id', $temaxxxx)
            ->where('parametro_temacombo.sis_esta_id', 1)
            ->orderBy('parametros.nombre', 'desc')
            ->get();
    foreach ($parametr as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
      } else {
        $comboxxx[$registro->id] = $registro->nombre;
      }
    }
    return $comboxxx;
  }

  public static function comboAsc($temaxxxx, $cabecera, $ajaxxxxx) {
    $comboxxx = [];
    if ($cabecera) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }

    $parametr = Temacombo::select(['parametros.id', 'parametros.nombre'])
            ->join('parametro_temacombo', 'temacombos.id', '=', 'parametro_temacombo.temacombo_id')
            ->join('parametros', 'parametro_temacombo.parametro_id', '=', 'parametros.id')
            ->where('temacombos.id', $temaxxxx)
            ->where('parametro_temacombo.sis_esta_id', 1)
            ->orderBy('parametros.nombre', 'asc')
            ->get();
    foreach ($parametr as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
      } else {
        $comboxxx[$registro->id] = $registro->nombre;
      }
    }
    return $comboxxx;
  }

  public static function comboNotIn($temaxxxx, $cabecera, $ajaxxxxx)
  {
      $comboxxx = [];
      if ($cabecera) {
        if ($ajaxxxxx) {
          $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
        } else {
          $comboxxx = ['' => 'Seleccione'];
        }
      }
      $notinxxx = [];

     $parametr = Temacombo::select(['parametros.id', 'parametros.nombre'])
            ->join('parametro_temacombo', 'temacombos.id', '=', 'parametro_temacombo.temacombo_id')
            ->join('parametros', 'parametro_temacombo.parametro_id', '=', 'parametros.id')
            ->where('temacombos.id', $temaxxxx)
            ->whereNotIn('parametros.id', $notinxxx)
            ->orderBy('parametros.nombre', 'asc')
            ->get();
    foreach ($parametr as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
      } else {
        $comboxxx[$registro->id] = $registro->nombre;
      }
    }
    return $comboxxx;
  }

  public function creador() {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor() {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

}
