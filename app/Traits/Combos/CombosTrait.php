<?php

namespace App\Traits\Combos;

use App\Models\Indicadores\InAccionGestion;
use App\Models\Indicadores\InActsoporte;
use App\Models\Indicadores\InLineabaseNnaj;

trait CombosTrait
{
    public function getCabecera($dataxxxx)
    {
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        return $comboxxx;
    }

    public function getInRespuestas($dataxxxx)
    {
        $comboxxx = $this->getCabecera($dataxxxx);
        $padrexxx = $dataxxxx['padrexxx']->sis_tcampo->tema->parametros;
        foreach ($padrexxx as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }




    public function getDocBase($dataxxxx)
    {
        $comboxxx = $this->getCabecera($dataxxxx);
        $linebase = InLineabaseNnaj::where('id', $dataxxxx['padrexxx'])->first()->in_fuente->in_base_fuente;
        foreach ($linebase as $registro) {
            $document = $registro->sis_documento_fuente->nombre;
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $document];
            } else {
                $comboxxx[$registro->id] = $document;
            }
        }
        return $comboxxx;
    }

    public function getSoportes($dataxxxx)
    {
        $notinxxx = [];
        $comboxxx = $this->getCabecera($dataxxxx);
        $soportes = InActsoporte::where('in_accion_gestion_id',$dataxxxx['padrexxx'])->get(); 
        foreach ($soportes as $registro) {
            if (!in_array($registro->sis_fsoporte_id, $notinxxx)) {
                $notinxxx[] = $registro->sis_fsoporte_id;
            }
        }
        $soportes = InAccionGestion::find($dataxxxx['padrexxx'])->sis_actividad->sis_fsoportes;
        foreach ($soportes as $registro) {
            if (!in_array($registro->id, $notinxxx)|| $registro->id==$dataxxxx['seleccio']) {
                if ($dataxxxx['ajaxxxxx']) {
                    $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
                } else {
                    $comboxxx[$registro->id] = $registro->nombre;
                }
            }
        }
        return $comboxxx;
    }
}
