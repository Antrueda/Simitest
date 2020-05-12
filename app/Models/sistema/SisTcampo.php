<?php

namespace App\Models\sistema;

use App\Models\Indicadores\InDocPregunta;
use App\Models\Indicadores\InPregunta;
use Illuminate\Database\Eloquent\Model;

class SisTcampo extends Model
{
    protected $fillable = ['s_numero','in_pregunta_id', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];

    public function in_pregunta()
    {
        return $this->belongsTo(InPregunta::class);
    }

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
        $docupreg = InDocPregunta::where('in_ligru_id', $padrexxx->grupoxxx)
            ->where('sis_tabla_id', $padrexxx->tablaxxx)
            ->get();

        foreach ($docupreg as $docuprex) {
            $notinxxx[] = $docuprex->sis_tcampo_id  ;
        }
     
        foreach (SisTcampo::where('sis_tabla_id', $padrexxx->tablaxxx)->whereNotIn('id', $notinxxx)
            ->get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_numero.' '.$registro->in_pregunta->s_pregunta];
            } else {
                $comboxxx[$registro->id] = $registro->s_numero.' '.$registro->in_pregunta->s_pregunta;
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
        foreach (SisTcampo::where('sis_tabla_id', $padrexxx)->get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_descripcion];
            } else {
                $comboxxx[$registro->id] = $registro->s_descripcion;
            }
        }
        return $comboxxx;
    }
}
