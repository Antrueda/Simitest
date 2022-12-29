<?php

namespace App\Traits\Combos;

use App\Models\Temacombo;
use Illuminate\Support\Facades\Cache;

trait ParametroTemacomboTrait
{
    private $nuevoxxx = true;

    public function getActualizaCachePTCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultPTCT($dataxxxx);
        Cache::forget('temacombo_' . $dataxxxx['temaxxxx']);

        $temacomb = Temacombo::where('id', $dataxxxx['temaxxxx'])
            ->with(['parametros' => function ($queryxxx) use ($dataxxxx) {
                $queryxxx->select(['id as valuexxx', 'nombre as optionxx']);
                $queryxxx->orderBy($dataxxxx['campoxxx'], $dataxxxx['orderxxx']);
            }])
            ->first();
        Cache::put('temacombo_' . $dataxxxx['temaxxxx'], $temacomb);
    }
    /** armar los campos que van por defecto */
    public function getDefaultPTCT($dataxxxx)
    {
        if (!isset($dataxxxx['orderxxx'])) {
            $dataxxxx['orderxxx'] = 'ASC';
        }
        if (!isset($dataxxxx['cabecera'])) {
            $dataxxxx['cabecera'] = true;
        }
        if (!isset($dataxxxx['ajaxxxxx'])) {
            $dataxxxx['ajaxxxxx'] = false;
        }
        if (!isset($dataxxxx['selected'])) {
            $dataxxxx['selected'] = [];
        }
        if (!isset($dataxxxx['campoxxx'])) {
            $dataxxxx['campoxxx'] = 'nombre';
        }
        if (!isset($dataxxxx['notinxxx'])) {
            $dataxxxx['notinxxx'] = [];
        }
        if (!isset($dataxxxx['inxxxxxx'])) {
            $dataxxxx['inxxxxxx'] = [];
        }

        return $dataxxxx;
    }

    /** armar la cabecera del combo */
    public function getCabeceraPTCT($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        return $comboxxx;
    }
    /** armar la opcion dependiendo de si es un combo ajax o normal */
    public function getTipoComboPTCT($registro, $dataxxxx, $comboxxx)
    {
        if ($dataxxxx['ajaxxxxx']) {
            $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => strtoupper($registro->optionxx)];
        } else {
            $comboxxx[$registro->valuexxx] = strtoupper($registro->optionxx);
        }
        return $comboxxx;
    }

    public function getCombosPTCT($dataxxxx)
    {
        $temacomb = Temacombo::whereIn('id', $dataxxxx['temasxxx'])
            ->with(['parametros' => function ($queryxxx) use ($dataxxxx) {
                $queryxxx->select(['id as valuexxx', 'nombre as optionxx']);
                $queryxxx->orderBy($dataxxxx['campoxxx'], $dataxxxx['orderxxx']);
            }])
            ->get();
            return $temacomb;
    }
    public function getCachePTCT($dataxxxx)
    {
        Cache::forget('temacombo_' . $dataxxxx['temaxxxx']);
        $temacomb = [];
        if (Cache::has('temacombo_' . $dataxxxx['temaxxxx'])) {
            $temacomb = Cache::get('temacombo_' . $dataxxxx['temaxxxx']);
        } else { 
            foreach ($dataxxxx['dataxxxx'] as $key => $value) {
                if ($value->id==$dataxxxx['temaxxxx']) {
                    $temacomb=$value;
                }
               
            }
            // $temacomb = Temacombo::where('id', $dataxxxx['temaxxxx'])
            //     ->with(['parametros' => function ($queryxxx) use ($dataxxxx) {
            //         $queryxxx->select(['id as valuexxx', 'nombre as optionxx']);
            //         $queryxxx->orderBy($dataxxxx['campoxxx'], $dataxxxx['orderxxx']);
            //     }])
            //     ->first();
            Cache::put('temacombo_' . $dataxxxx['temaxxxx'], $temacomb);
        }
        return $temacomb;
    }

    public function getCuerpoComboPTCT($dataxxxx)
    {
        $comboxxx = $this->getCabeceraPTCT($dataxxxx);
        foreach ($dataxxxx['dataxxxx'] as $registro) {
            $comboxxx = $this->getTipoComboPTCT($registro, $dataxxxx, $comboxxx);
        }
        return $comboxxx;
    }




    public function getComboPTCT($parametr, $dataxxxx)
    {
        foreach ($parametr as $key => $value) {
            if ($this->nuevoxxx) {
                // * quitar los parámetros inactivos
                if ($value->pivot->sis_esta_id == 2) {
                    unset($parametr[$key]);
                } else
                    // quitar los parámetros que no se requieran
                    if (in_array($value->valuexxx, $dataxxxx['notinxxx'])) {
                        unset($parametr[$key]);
                    }
            } else {
                // * quitar los parámetros que estén inactivos y que no estén en: inxxxxxx
                if (!in_array($value->valuexxx, $dataxxxx['inxxxxxx']) && $value->pivot->sis_esta_id == 2) {
                    unset($parametr[$key]);
                }
            }
        }
        return $parametr;
    }

    public function getParametroTemecomboPTCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultPTCT($dataxxxx);
        $temacomb = $this->getCachePTCT($dataxxxx);
        $dataxxxx['dataxxxx'] = $this->getComboPTCT($temacomb->parametros, $dataxxxx);
        return ['comboxxx' => $this->getCuerpoComboPTCT($dataxxxx), 'nombcomb' => $temacomb->nombre, 'tooltipx' => $temacomb->nombre . ' (' . $temacomb->id . ')'];
    }
}
//
