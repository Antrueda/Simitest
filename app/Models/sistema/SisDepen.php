<?php

namespace App\Models\sistema;

use App\Models\fichaIngreso\NnajUpi;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SisDepen extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'i_prm_cvital_id',
        'i_prm_tdependen_id',
        'i_prm_sexo_id',
        's_direccion',
        'sis_departam_id',
        'sis_municipio_id',
        'estusuario_id',
        'simianti_id',
        'sis_upzbarri_id',
        's_telefono',
        's_correo',
        'itiestan',
        'itiegabe',
        'itigafin',
        'itigatra',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

    ];
    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'itiegabe' => 0];
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
        $dataxxxx['itiestan'] = $dataxxxx['itiestan'] == '' ? 0 : $dataxxxx['itiestan'];
        $dataxxxx['itiegabe'] = $dataxxxx['itiegabe'] == '' ? 0 : $dataxxxx['itiegabe'];
        $dataxxxx['itigafin'] = $dataxxxx['itigafin'] == '' ? 0 : $dataxxxx['itigafin'];

        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = SisDepen::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }


    public static function combo($cabecera, $ajaxxxxx)
    {

        $comboxxx = [];
        if ($cabecera) {
            if ($ajaxxxxx) {
                $comboxxx = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        foreach (SisDepen::where('sis_esta_id', 1)->get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }





    public static function comboTraslado($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }

        $notinxxx = SisDepen::where('sis_esta_id', 1)->where('id',$dataxxxx['dependen'])->get();

        foreach ($notinxxx as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_servicio];
            } else {
                $comboxxx[$registro->id] = $registro->s_servicio;
            }
        }
        return $comboxxx;
    }



    public function getDepeUsua()
    {

        return $this->hasMany(SisDepeUsua::class, 'sis_depen_id');
    }

    public function sis_servicios()
    {

        return $this->belongsToMany(SisServicio::class, 'sis_depeservs', 'sis_depen_id', 'sis_servicio_id')->withTimestamps();
    }

    public function getComboAjaxAttribute()
    {
        return  ['valuexxx' => $this->id, 'optionxx' => $this->nombre];
    }

    public function getComboNormalAttribute()
    {
        return  [$this->id => $this->nombre];
    }
    public function getResponsableNormalAttribute()
    {
        $responsa = ['' => 'Sin responsable'];
        $cargoxxx = '';
        $dependen = ['' => 'Sin dependencias'];
        foreach ($this->getDepeUsua as $value) {
            if ($value->i_prm_responsable_id == 227) {
                $dependen = $value->user->DependenciasNormal;
                $responsa = $value->user->DocNombreCompletoNormal;
                $cargoxxx = $value->user->sis_cargo->s_cargo;
            }
        }
        $respuest = [$responsa, $cargoxxx, $dependen];
        return  $respuest;
    }


    public function getResponsableAttribute()
    {
        $responsa = [['valuexxx' => '', 'optionxx' => 'Sin responsable']];
        $cargoxxx = '';
        $dependen = [['valuexxx' => '', 'optionxx' => 'Sin dependencias']];
        foreach ($this->getDepeUsua as $value) {
            if ($value->i_prm_responsable_id == 227) {
                $dependen = $value->user->Dependencias;
                $responsa = [$value->user->DocNombreCompletoAjax];
                $cargoxxx = $value->user->sis_cargo->s_cargo;
            }
        }
        $respuest = [$responsa, $cargoxxx, $dependen];
        return  $respuest;
    }


    public function getResponsableUpiAttribute()
    {
        $responsa = [['valuexxx' => '', 'optionxx' => 'Sin responsable']];
        $cargoxxx = '';
        $dependen = [['valuexxx' => '', 'optionxx' => 'Sin dependencias']];
        foreach ($this->getDepeUsua as $value) {
            if ($value->i_prm_responsable_id == 227) {
                $dependen = $value->user->Dependencias;
                $responsa = [['valuexxx' => $value->user->id, 'optionxx' => $value->user->DocNombreCompletoAjax]];
                $cargoxxx = [['valuexxx' => $value->user->sis_cargo->id, 'optionxx' => $value->user->sis_cargo->s_cargo]];
            }
        }
        $respuest = [$responsa, $cargoxxx, $dependen];
        return  $respuest;
    }
    /** encontrar el responsabe de la unidad en formato ajax */
    public function getResponsableAjaxAttribute()
    {
        $responsa = [['valuexxx' => '', 'optionxx' => 'UPI SIN RESPONSABLE']];
        foreach ($this->getDepeUsua as $value) {
            if ($value->i_prm_responsable_id == 227) {
                $responsa[0]['valuexxx'] = $value->user_id;
                $responsa[0]['optionxx'] = $value->user->name;
            }
        }
        return $responsa;
    }

    public function getDireccionAjaxAttribute()
    {
        return  [$this->id => $this->s_direccion];
    }

    public function getTrasladoAjaxAttribute()
    {
        return  $this->itigatra;
    }



    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sis_upzbarri()
    {
        return $this->belongsTo(SisUpzbarri::class);
    }

    public function sis_eslugs()
    {
        return $this->belongsToMany(SisEslug::class)->withTimestamps();
    }

    public function nnaj_upis()
    {
        return $this->hasMany(NnajUpi::class,'sis_depen_id');
    }

    public static function getLugares($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['esajaxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        $dependen = SisDepen::select(['sis_eslugs.id as valuexxx', 'sis_eslugs.s_espaluga as optionxx'])
            ->join('sis_depen_sis_eslug', 'sis_depens.id', '=', 'sis_depen_sis_eslug.sis_depen_id')
            ->join('sis_eslugs', 'sis_depen_sis_eslug.sis_eslug_id', '=', 'sis_eslugs.id')
            ->where('sis_depens.id', $dataxxxx['padrexxx'])
            ->get();
        foreach ($dependen as $registro) {
            if ($dataxxxx['esajaxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->optionxx];
            } else {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
            }
        }
        return $comboxxx;
    }
}
