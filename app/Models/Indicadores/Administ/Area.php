<?php

namespace App\Models\Indicadores\Administ;

use App\Models\Acciones\Grupales\AgTema;
use App\Models\Indicadores\Administ\InAreaindi;
use App\Models\Sistema\SisEsta;
use App\Models\User;
use App\Models\Usuario\SisAreaUsua;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Area extends Model
{
    protected $fillable = [
        'nombre',
        'contexto',
        'descripcion',
        'estusuario_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

    ];

    protected $attributes = [
        'user_crea_id' => 1,
        'user_edita_id' => 1
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function in_areaindis()
    {
        return $this->hasMany(InAreaindi::class);
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

    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
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
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => ($padrexxx == '') ? $registro->nombre : $registro->s_tema];
            } else {
                $comboxxx[$registro->id] = ($padrexxx == '') ? $registro->nombre : $registro->s_tema;
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
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => ($padrexxx == '') ? $registro->nombre : $registro->s_indicador];
            } else {
                $comboxxx[$registro->id] = ($padrexxx == '') ? $registro->nombre : $registro->s_indicador;
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

    public static function combo_temas($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        $gruposxx = Area::where('id', $dataxxxx['areaxxxx'])->first();
        foreach ($gruposxx->ag_temas as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_tema];
            } else {
                $comboxxx[$registro->id] = $registro->s_tema;
            }
        }
        return $comboxxx;
    }
    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = Area::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }

    public static function getUsuarioAreas($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }

        $notinxxx = Area::whereNotIn('id', SisAreaUsua::whereNotIn('area_id', [$dataxxxx['selectxx']])
            ->where('user_id', $dataxxxx['padrexxx'])
            ->get(['area_id']))
            ->get();

        foreach ($notinxxx as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }
}
