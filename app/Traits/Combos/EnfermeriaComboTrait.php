<?php

namespace App\Traits\Combos;

use App\Models\Acciones\Individuales\Salud\Vacunas\TipoVacuna;
use App\Models\Acciones\Individuales\Salud\Vacunas\Vacuna;
use App\Models\AdmiActiAsd\AsdActividad;
use App\Models\AdmiActiAsd\AsdTiactividad;


use App\Models\sistema\SisMunicipio;
use Illuminate\Support\Facades\DB;

trait EnfermeriaComboTrait
{
    private $nuevoxxx = true;
   
    /** armar los campos que van por defecto */
    public function getDefaultPDCT($dataxxxx)
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
    public function getCabeceraPDCT($dataxxxx)
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

    public function getCuerpoComboPDCT($dataxxxx)
    {
        $comboxxx = $this->getCabeceraPDCT($dataxxxx);
        foreach ($dataxxxx['dataxxxx'] as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $selected = '';
                if (in_array($registro->valuexxx, $dataxxxx['selected'])) {
                    $selected = 'selected';
                }
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => strtoupper($registro->optionxx), 'selected' => $selected];
            } else {
                $comboxxx[$registro->valuexxx] = strtoupper($registro->optionxx);
            }
        }
        return $comboxxx;
    }

    public function getCuerpoComboidPDCT($dataxxxx)
    {
        $comboxxx = $this->getCabeceraPDCT($dataxxxx);
        foreach ($dataxxxx['dataxxxx'] as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $selected = '';
                if (in_array($registro->valuexxx, $dataxxxx['selected'])) {
                    $selected = 'selected';
                }
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->valuexxx.' = '.strtoupper($registro->optionxx), 'selected' => $selected];
            } else {
                $comboxxx[$registro->valuexxx] = strtoupper($registro->optionxx);
            }
        }
        return $comboxxx;
    }
    /** armar la opcion dependiendo de si es un combo ajax o normal */
    public function getCuerpoComboTipoactividad($dataxxxx)
    {
        $comboxxx = $this->getCabeceraPDCT($dataxxxx);
        foreach ($dataxxxx['dataxxxx'] as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $selected = '';
                if (in_array($registro->valuexxx, $dataxxxx['selected'])) {
                    $selected = 'selected';
                }
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => strtoupper($registro->item.' '.$registro->optionxx), 'selected' => $selected];
            } else {
                $comboxxx[$registro->valuexxx] = strtoupper($registro->optionxx);
            }
        }
        return $comboxxx;
    }

    public function getTipoActividadPDCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultPDCT($dataxxxx);

        
        $dataxxxx['dataxxxx']  = TipoVacuna::    
        select(['tipo_vacunas.id as valuexxx', 'tipo_vacunas.nombre as optionxx'])
      //  ->join('parametros as itemtipo', 'tipo_vacunas.item', '=', 'itemtipo.id')
        ->where('tipo_vacunas.sis_esta_id', 1)
        ->orderBy('tipo_vacunas.nombre', $dataxxxx['orderxxx'])
        ->get();
     $respuest = $this->getCuerpoComboTipoactividad($dataxxxx); 
     return $respuest;
    }

    public function getMunicipioPDCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultPDCT($dataxxxx);
        if($dataxxxx['departam']==6){
            $dataxxxx['cabecera'] = false;
        }
        $dataxxxx['dataxxxx']  = SisMunicipio::
        where('sis_esta_id', 1)
        ->where('sis_departam_id', $dataxxxx['departam'])
        ->orderBy('s_municipio', $dataxxxx['orderxxx'])
        ->get(['id as valuexxx', 's_municipio as optionxx']);
        $respuest = $this->getCuerpoComboidPDCT($dataxxxx);
        return $respuest;
    }

    public function getActividadPDCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultPDCT($dataxxxx);
        $dataxxxx['dataxxxx']  = Vacuna::
        where('sis_esta_id', 1)
        ->where('tipo_vacunas_id', $dataxxxx['tipoacti'])
        ->orderBy('nombre', $dataxxxx['orderxxx'])
        ->get(['id as valuexxx', 'nombre as optionxx']);
        $respuest = $this->getCuerpoComboidPDCT($dataxxxx);
        return $respuest;
    }



    
}

