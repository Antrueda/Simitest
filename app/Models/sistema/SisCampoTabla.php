<?php

namespace App\Models\sistema;

use App\Models\Indicadores\InDocPregunta;
use Illuminate\Database\Eloquent\Model;

class SisCampoTabla extends Model
{
    public function sis_tabla()
    {
        return $this->belongsTo(SisTabla::class);
    }
    public static function comboTabla($padrexxx, $cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        } else {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            }
        }
        $notinxxx = [];
        $docupreg = InDocPregunta::where('in_ligru_id', $padrexxx->in_ligru_id)
            ->where('sis_tabla_id', $padrexxx->sis_tabla_id)
            ->get();

        foreach ($docupreg as $docuprex) {
            $notinxxx[] = $docuprex->sis_campo_tabla_id;
        }
     
        foreach (SisCampoTabla::where('sis_tabla_id', $padrexxx->sis_tabla_id)->whereNotIn('id', $notinxxx)
            ->get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_descripcion];
            } else {
                $comboxxx[$registro->id] = $registro->s_descripcion;
            }
        }
        return $comboxxx;
    }

    public static function combo($padrexxx, $cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        } else {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            }
        }
        foreach (SisCampoTabla::where('sis_tabla_id', $padrexxx)->get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_descripcion];
            } else {
                $comboxxx[$registro->id] = $registro->s_descripcion;
            }
        }
        return $comboxxx;
    }
}
