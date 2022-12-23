<?php

namespace App\Traits\Acciones\Individuales;
use App\Models\Acciones\Individuales\AiReporteEvasion;
use App\Models\Sistema\SisNnaj;

/**
 * Este trait permite armar las consultas para vsi que arman las datatable
 */
trait TieneEvacionTrait
{

    public function getTieneEvacion($nnaj)
    {
        $reportex = false;
        $dataxxxx =  AiReporteEvasion::where('ai_reporte_evasions.sis_nnaj_id', $nnaj)
            ->where('ai_reporte_evasions.sis_esta_id', 1)
            ->first(['ai_reporte_evasions.id']);
        $dato = SisNnaj::findOrFail($nnaj);
        $nnaj = $dato->fi_datos_basico;
        $edadxxxx=$nnaj->nnaj_nacimi->Edad;
        if (!is_null($dataxxxx) or $edadxxxx < 18) {
            $reportex = true;
        }
        return [$reportex,$dato,$nnaj,$edadxxxx< 18?true:false];
    }
}
