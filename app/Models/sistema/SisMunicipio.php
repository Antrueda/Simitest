<?php

namespace App\Models\Sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SisMunicipio extends Model
{

    protected $fillable = ['s_municipio', 'sis_departam_id', 's_iso', 'simianti_id', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];
    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

    public function sis_departam()
    {
        return $this->belongsTo(SisDepartam::class);
    }

    public static function combo($departam, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($ajaxxxxx != '') {
            if ($ajaxxxxx == false) {
                $comboxxx = ['' => 'Seleclcione'];
            } else {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            }
        }

        $municipi = SisMunicipio::where(function ($dataxxxx) use ($departam) {
            $dataxxxx->where('sis_departam_id', $departam);
        })->orderBy('s_municipio')->get();

        foreach ($municipi as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_municipio];
            } else {
                $comboxxx[$registro->id] = $registro->s_municipio;
            }
        }

        return $comboxxx;
    }
    public static function comboIn($departam, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($ajaxxxxx != '') {
            if ($ajaxxxxx == false) {
                $comboxxx = ['' => 'Seleclcione'];
            } else {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            }
        }

        $municipi = SisMunicipio::where(function ($dataxxxx) use ($departam) {
            $dataxxxx->whereIn('sis_departam_id', $departam);
        })->orderBy('s_municipio')->get();

        foreach ($municipi as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_municipio];
            } else {
                $comboxxx[$registro->id] = $registro->s_municipio;
            }
        }

        return $comboxxx;
    }

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function getComboAttribute()
    {
        return [$this->id => $this->s_municipio];
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function getComboAjaxUnoAttribute()
    {
        return [['valuexxx' => $this->id, 'optionxx' => $this->s_municipio]];
    }
}
