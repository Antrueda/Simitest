<?php

namespace App\Traits\Combos;

use App\Models\Acciones\Individuales\Educacion\AdmiActiAsd\AsdActividad;
use App\Models\Acciones\Individuales\Educacion\AdmiActiAsd\AsdTiactividad;
use App\Models\Temacombo;
use Illuminate\Support\Facades\Cache;

trait PlanillaDiariaComboTrait
{
    private $nuevoxxx = true;






    /** armar los campos que van por defecto */
    public function getDefaultTCT($dataxxxx)
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
    public function getCabeceraTCT($dataxxxx)
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

    public function getTipoActividadPDCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx']  = AsdTiactividad::
        where('sis_esta_id', 1)
        //->where('prm_lugactiv_id',$prm_lugar)
        ->orderBy('nombre', 'asc')
        ->get(['id as valuexxx', 'nombre as optionxx']);
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);


        return $respuest;
    }


    public function getActividadPDCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx']  = AsdActividad::
        where('sis_esta_id', 1)
        ->where('tipos_actividad_id', $dataxxxx['wherexxx'])
        ->orderBy('nombre', 'asc')
        ->get(['id as valuexxx', 'nombre as optionxx']);
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return $respuest;
    }

}

