<?php

namespace App\Models;

use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Indicadores\Area;
use App\Models\Sistema\SisCargo;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisDepeUsua;
use App\Models\Sistema\SisMunicipio;
use App\post;
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
        'estusuario_id',
        'itiestan',
        'itiegabe',
        'itigafin',
        'password_change_at',
        'password_reset_at',
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

    public function posts()
    {
        return $this->hasMany(post::class);
    }

    public static function cambiarcontasenia($dataxxxx, $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx,  $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            $dataxxxx['password_change_at'] = date("Y-m-d",strtotime(date('Y-m-d')."+ 1 month"));
            $dataxxxx['password_reset_at'] = null;
            $objetoxx->update($dataxxxx);
            return $objetoxx;
        }, 5);
        return $usuariox;
    }


    public static function transaccion($dataxxxx, $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx,  $objetoxx) {
            $dataxxxx['itiestan'] = $dataxxxx['itiestan'] == '' ? 0 : $dataxxxx['itiestan'];
            $dataxxxx['itiegabe'] = $dataxxxx['itiegabe'] == '' ? 0 : $dataxxxx['itiegabe'];
            $dataxxxx['itigafin'] = $dataxxxx['itigafin'] == '' ? 0 : $dataxxxx['itigafin'];
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
                $dataxxxx['password_change_at'] = date('Y-m-d', time());
                $dataxxxx['password_reset_at'] = date('Y-m-d', time());
                $dataxxxx['password'] = $dataxxxx['s_documento'];
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = User::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
    public function sis_depens()
    {
        return $this->belongsToMany(SisDepen::class)->withTimestamps();
    }
    public function vinculacion()
    {
        return $this->belongsTo(Parametro::class, 'prm_tvinculacion_id');
    }
    public static function dependencia($usuariox)
    {
        $dependen = [];
        foreach (User::where('id', $usuariox)->first()->sis_depens as $fdepende) {
            $dependen[] = $fdepende->id;
        }
        return SisDepen::whereNotIn('id', $dependen)->get();
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

    private static function userCombo($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        $userxxxx = User::where(function ($queryxxx) use ($dataxxxx) {
            if ($dataxxxx['notinxxx'] != false) {
                $queryxxx->whereNotIn('id', $dataxxxx['notinxxx']);
            }
            $queryxxx->where('sis_esta_id', 1);
        })
            ->orderBy('s_primer_nombre')
            ->orderBy('s_primer_apellido')
            ->get();
        foreach ($userxxxx as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->getDocNombreCompletoAttribute()];
            } else {
                $comboxxx[$registro->id] = $registro->getDocNombreCompletoAttribute();
            }
        }
        return $comboxxx;
    }


    
    private static function userComboUpi($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['esajaxxx']) {
                $comboxxx = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        $upixxxxx = SisDepeUsua::select(['user_id'])
            ->where(function ($queryxxx) use ($dataxxxx) {
                $queryxxx->where('sis_depen_id', $dataxxxx);
                $queryxxx->where('sis_esta_id', 1);
                return $queryxxx;
            })->get();


        foreach ($upixxxxx as $$upisxxxx) {
            if ($dataxxxx['esajaxxx']) {
                $comboxxx[] = ['valuexxx' => $upisxxxx->id, 'optionxx' => $upisxxxx->getDocNombreCompletoAttribute()];
            } else {
                $comboxxx[$upisxxxx->id] = $upisxxxx->getDocNombreCompletoAttribute();
            }
        }



        return $comboxxx;
    }
    public static function combo($cabecera, $ajaxxxxx)
    {
        return User::userCombo(['cabecera' => $cabecera, 'ajaxxxxx' => $ajaxxxxx, 'notinxxx' => false]);
    }
    public static function comboDependencia($cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        $userxxxx = Auth::user();
        foreach ($userxxxx->sis_depens as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return [$comboxxx, $userxxxx->sis_cargo->s_cargo];
    }
    public static function getUpiUsuario($cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        $userxxxx = Auth::user();
        foreach ($userxxxx->sis_depens as $registro) {
            if ( $registro->sis_esta_id==1) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        }
        return $comboxxx;
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
         * En el caso de que el usuario tenga inactiva el area es para que el combo quede con el area que se le asi
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
        $dependen = User::select(['sis_depens.id', 'sis_depens.nombre'])
            ->join('sis_depen_user', 'users.id', '=', 'sis_depen_user.user_id')
            ->join('sis_depens', 'sis_depen_user.sis_depen_id', '=', 'sis_depens.id')->get();
        foreach ($dependen as $areasxxx) {
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
        if (isset($dataxxxx['depesele'])) {
            $areaxxxy = User::select(['sis_depens.id', 'sis_depens.nombre'])
                ->join('sis_depen_user', 'users.id', '=', 'sis_depen_user.user_id')
                ->join('sis_depens', 'area_user.sis_depen_id', '=', 'sis_depens.id')
                ->where('sis_depen_user.user_id', Auth::User()->id)
                ->where('sis_depen_user.sis_esta_id', 2)
                ->where('sis_depen_user.sis_depen_id', $dataxxxx['depesele'])
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

    public static function comboResponsables($dataxxxx)
    {
        /**
         * no incluir los responsables que ya están asignados
         */
        $notinxxx = [];
        $responsa = AgResponsable::where('ag_actividad_id', $dataxxxx['activida'])->get();
        foreach ($responsa as $userxxxx) {
            if (isset($dataxxxx['objetoxx']->id)) {
                if ($userxxxx->user_id != $dataxxxx['objetoxx']->user_id) {
                    $notinxxx[] = $userxxxx->user_id;
                }
            } else {
                $notinxxx[] = $userxxxx->user_id;
            }
        }

        $dataxxxx['notinxxx'] = $notinxxx;
        $comboxxx = User::userCombo($dataxxxx);
        /**
         * cuando es editar
         */

        if (isset($dataxxxx['objetoxx']->id)) {
            $registro = User::where('id', $dataxxxx['objetoxx']->user_id)
                ->where('sis_esta_id', 2)
                ->first();
            if (isset($registro->id)) {
                if ($dataxxxx['ajaxxxxx']) {
                    $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->getDocNombreCompletoAttribute()];
                } else {
                    $comboxxx[$registro->id] = $registro->getDocNombreCompletoAttribute();
                }
            }
        }
        return $comboxxx;
    }

    public static function getPuede($dataxxxx)
    {
        $puedexxx = false;
        if (User::where('id', Auth::user()->id)->first()->can($dataxxxx['permisox'])) {
            $puedexxx = true;
        }
        return $puedexxx;
    }

    public static function gitDependenciaUser($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }

        $notinxxx = User::whereNotIn('id', SisDepeUsua::whereNotIn('user_id', [$dataxxxx['selectxx']])
            ->where('sis_depen_id', $dataxxxx['dependen'])
            ->get(['user_id']))
            ->get();

        foreach ($notinxxx as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->name];
            } else {
                $comboxxx[$registro->id] = $registro->name;
            }
        }
        return $comboxxx;
    }
}
