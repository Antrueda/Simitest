<?php

namespace App\Models;

use App\Models\Indicadores\Area;
use App\Models\sistema\SisCargo;
use App\Models\sistema\SisDependencia;
use App\Models\sistema\SisMunicipio;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{

  use Notifiable;
  use HasRoles;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    's_primer_nombre',
    's_segundo_nombre',
    's_primer_apellido',
    's_segundo_apellido',
    'email',
    'password',
    'sis_esta_id',
    'user_crea_id',
    'user_edita_id',
    's_telefono',
    'prm_tvinculacion_id',
    's_matriculap',
    'sis_cargo_id',
    'd_finvinculacion',
    'd_vinculacion',
    's_documento',
    'prm_documento_id',
    'sis_municipio_id',
    's_observacion',
    'i_tiempo'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  protected $attributes = ['sis_esta_id' => 1];

  public function setPasswordAttribute($value)
  {
    if (!empty($value)) {
      $this->attributes['password'] = bcrypt($value);
    }
  }


  public function areas()
  {
    return $this->belongsToMany(Area::class)->withTimestamps();
  }
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public static function transaccion($dataxxxx, $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx,  $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      //$dataxxxx['password']=bcrypt($dataxxxx['passwordd']);

      $objetoxx->update($dataxxxx);
      return $objetoxx;
    }, 5);
    return $usuariox;
  }


  public  function grabar($dataxxxx, $objetoxx)
  {
    $dataxxxx['s_primer_nombre'] = strtoupper($dataxxxx['s_primer_nombre']);
    $dataxxxx['s_segundo_nombre'] = strtoupper($dataxxxx['s_segundo_nombre']);
    $dataxxxx['s_primer_apellido'] = strtoupper($dataxxxx['s_primer_apellido']);
    $dataxxxx['s_segundo_apellido'] = strtoupper($dataxxxx['s_segundo_apellido']);
    $dataxxxx['name'] =
      $dataxxxx['s_primer_nombre'] . ' ' .
      $dataxxxx['s_segundo_nombre'] . '  ' .
      $dataxxxx['s_primer_apellido'] . ' ' .
      $dataxxxx['s_segundo_apellido'];

    $dataxxxx['user_edita_id'] = Auth::user()->id;
    if ($objetoxx != '') {
      $objetoxx->update($dataxxxx);
    } else {
      $dataxxxx['password'] = $dataxxxx['s_documento'];
      $dataxxxx['user_crea_id'] = Auth::user()->id;
      $objetoxx = User::create($dataxxxx);
    }
    return $objetoxx;
  }
  public function sis_dependencias()
  {
    return $this->belongsToMany(SisDependencia::class);
  }
  public function vinculacion()
  {
    return $this->belongsTo(Parametro::class, 'prm_tvinculacion_id');
  }
  public static function dependencia($usuariox)
  {
    $dependen = [];
    foreach (User::where('id', $usuariox)->first()->sis_dependencias as $fdepende) {
      $dependen[] = $fdepende->id;
    }
    return SisDependencia::whereNotIn('id', $dependen)->get();
  }
  public function sis_cargo()
  {
    return $this->belongsTo(SisCargo::class);
  }
  public function sis_municipio()
  {
    return $this->belongsTo(SisMunicipio::class);
  }
  public function getNombreCompletoAttribute()
  {
    return $this->s_primer_nombre . ' ' . $this->s_segundo_nombre . ' ' . $this->s_primer_apellido . ' ' . $this->s_segundo_apellido;
  }
  public function getDocNombreCompletoAttribute()
  {
    return $this->s_documento . ' - ' . $this->s_primer_nombre . ' ' . $this->s_segundo_nombre . ' ' . $this->s_primer_apellido . ' ' . $this->s_segundo_apellido;
  }
  public function getDocNombreCompletoCargoAttribute()
  {
    return $this->s_documento . ' - ' . $this->s_primer_nombre . ' ' . $this->s_segundo_nombre . ' ' . $this->s_primer_apellido . ' ' . $this->s_segundo_apellido . ' - ' . $this->sis_cargo->s_cargo;
  }


  public static function combo($cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }
    $userxxxx = User::where('sis_esta_id', 1)
      ->orderBy('s_primer_nombre')
      ->orderBy('s_segundo_nombre')
      ->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get();
    foreach ($userxxxx as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->getDocNombreCompletoAttribute()];
      } else {
        $comboxxx[$registro->id] = $registro->getDocNombreCompletoAttribute();
      }
    }
    return $comboxxx;
  }
  public static function comboDependencia($padrexxx, $cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }
    $userxxxx = User::where('id', $padrexxx)->first();
    foreach ($userxxxx->sis_dependencias as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
      } else {
        $comboxxx[$registro->id] = $registro->nombre;
      }
    }
    return [$comboxxx, $userxxxx->sis_cargo->s_cargo];
  }
  public static function getAreasUser($dataxxxx)
  {
    $comboxxx = [];
    if ($dataxxxx['cabecera']) {
      if ($dataxxxx['esajaxxx']) {
        $comboxxx = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }
    $areaxxxx = User::select(['areas.id', 'areas.nombre'])
      ->join('area_user', 'users.id', '=', 'area_user.user_id')
      ->join('areas', 'area_user.area_id', '=', 'areas.id')
      ->where(function ($queryxxx) use ($dataxxxx) {
        $queryxxx->where('area_user.user_id', Auth::User()->id);
        $queryxxx->where('area_user.sis_esta_id', 1);
        return $queryxxx;
      })->get();


    foreach ($areaxxxx as $areasxxx) {
      if ($dataxxxx['esajaxxx']) {
        $comboxxx[] = ['valuexxx' => $areasxxx->id, 'optionxx' => $areasxxx->nombre];
      } else {
        $comboxxx[$areasxxx->id] = $areasxxx->nombre;
      }
    }
    /**
     * En el caso de que el usuario tenga inactiva el area se para que el combo quede con el area que se le asi
     * asigno sin importar el estado
     */
    if (isset($dataxxxx['areasele'])) {
      $areaxxxy = User::select(['areas.id', 'areas.nombre'])
        ->join('area_user', 'users.id', '=', 'area_user.user_id')
        ->join('areas', 'area_user.area_id', '=', 'areas.id')
        ->where('area_user.user_id', Auth::User()->id)
        ->where('area_user.sis_esta_id', 2)
        ->where('area_user.area_id', $dataxxxx['areasele'])
        ->first();
      if (isset($areaxxxy->id)) {
        if ($dataxxxx['esajaxxx']) {
          $comboxxx[] = ['valuexxx' => $areaxxxy->id, 'optionxx' => $areaxxxy->nombre];
        } else {
          $comboxxx[$areaxxxy->id] = $areaxxxy->nombre;
        }
      }
    }

    return $comboxxx;
  }
  public static function getDependenciasUser($dataxxxx)
  {
    $comboxxx = [];
    if ($dataxxxx['cabecera']) {
      if ($dataxxxx['esajaxxx']) {
        $comboxxx = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }
    foreach (Auth::User()->sis_dependencias as $areasxxx) {
      if ($dataxxxx['esajaxxx']) {
        $comboxxx[] = ['valuexxx' => $areasxxx->id, 'optionxx' => $areasxxx->nombre];
      } else {
        $comboxxx[$areasxxx->id] = $areasxxx->nombre;
      }
    }
    return $comboxxx;
  }
}
