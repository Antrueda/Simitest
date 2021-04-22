<?php

namespace App\Traits\Combos;

use App\Models\Indicadores\InAccionGestion;
use App\Models\Indicadores\InActsoporte;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\Temacombo;

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
    public function getCuerpoCombo($dataxxxx)
    {
        $comboxxx = $this->getCabecera($dataxxxx);
        foreach ($dataxxxx['dataxxxx'] as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->optionxx];
            } else {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
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
        $soportes = InActsoporte::where('in_accion_gestion_id', $dataxxxx['padrexxx'])->get();
        foreach ($soportes as $registro) {
            if (!in_array($registro->sis_fsoporte_id, $notinxxx)) {
                $notinxxx[] = $registro->sis_fsoporte_id;
            }
        }
        $soportes = InAccionGestion::find($dataxxxx['padrexxx'])->sis_actividad->sis_fsoportes;
        foreach ($soportes as $registro) {
            if (!in_array($registro->id, $notinxxx) || $registro->id == $dataxxxx['seleccio']) {
                if ($dataxxxx['ajaxxxxx']) {
                    $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
                } else {
                    $comboxxx[$registro->id] = $registro->nombre;
                }
            }
        }
        return $comboxxx;
    }

    /*
    * @param  $temaxxxx tema padre de los parámetros
    * @param  $cabecera indica si el combo se debe devolver con el seleccione
    * @param  $ajaxxxxx indica si el combo es para devolver en array para objeto json
    * @return $comboxxx
    */
    public function getTemacomboCT($dataxxxx)
    {
       $comboxxx = $this->getCabecera($dataxxxx);;
        $parametr = Temacombo::select(['parametros.id as valuexxx', 'parametros.nombre as optionxx'])
            ->join('parametro_temacombo', 'temacombos.id', '=', 'parametro_temacombo.temacombo_id')
            ->join('parametros', 'parametro_temacombo.parametro_id', '=', 'parametros.id')
            ->where(function($queryxxx)use($dataxxxx){
                $queryxxx->where('temacombos.id', $dataxxxx['temaxxxx']);
            })
            ->orderBy('parametros.nombre', $dataxxxx['orederby'])
            ->get();
        foreach ($parametr as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $selected = '';
                if (in_array($registro->valuexxx, $dataxxxx['selected'])) {
                    $selected = 'selected';
                }
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->optionxx, 'selected' => $selected];
            } else {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
            }
        }
        return ['comboxxx'=>$comboxxx];
    }

    public function getResponsablesActividad($dataxxxx)
    {
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajax']) {
            }
        }
    }
}
