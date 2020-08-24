<?php

namespace App\Models\Sistema;

use Illuminate\Database\Eloquent\Model;

class SisTabla extends Model
{
    public function sis_tcampos()
    {
        return $this->hasMany(SisTcampo::class);
    }

    public static function combo($padrexxx, $cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        $tablaxxx = SisTabla::get();
        if ($padrexxx != '') {
            $tablaxxx = SisTabla::where('id', $padrexxx)->first()->sis_campo_tablas;
        }
        foreach ($tablaxxx as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_descripcion];
            } else {
                $comboxxx[$registro->id] =  $registro->s_descripcion;
            }
        }
        return $comboxxx;
    }

    public static function comboTabla($padrexxx, $cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }

            $tablaxxx = SisTabla::where('sis_docfuen_id', $padrexxx)->get();

        foreach ($tablaxxx as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_descripcion];
            } else {
                $comboxxx[$registro->id] =  $registro->s_descripcion;
            }
        }
        return $comboxxx;
    }
}
