<?php

namespace App\Traits\Interfaz;

use App\Models\fichaIngreso\FiRazone;
use App\Models\Simianti\Ge\FichaAcercamientoIngreso;
use App\Models\Simianti\Ge\GePersonalIdipron;

trait RazonesIngresoIdipronTrait
{
    use HomologacionesTrait;
    public function getRazonesIngresoIdipronRT($dataxxxx)
    {
        $dataxxxx = FichaAcercamientoIngreso::select([
            'ficha_acercamiento_ingreso.estado as i_prm_estado_ingreso_id',
            'ficha_acercamiento_ingreso.situacion as s_porque_ingresar',
            'ficha_acercamiento_ingreso.id_facilitador_social as userd_id',
            'diligencia.id_upi as sis_depend_id',
            'diligencia.responsable as responsabledili',
            'ficha_acercamiento_ingreso.id_responsable_busqueda_activa as userr_id',
            'responsable.id_upi as sis_depenr_id',
            'responsable.responsable as responsableresp',
        ])

            ->join('ge_nnaj_documento', 'ficha_acercamiento_ingreso.id_nnaj', '=', 'ge_nnaj_documento.id_nnaj')
            ->join('ge_upi_personal as diligencia', 'ficha_acercamiento_ingreso.id_facilitador_social', '=', 'diligencia.id_personal')
            ->join('ge_upi_personal as responsable', 'ficha_acercamiento_ingreso.id_responsable_busqueda_activa', '=', 'responsable.id_personal')
            ->where('ge_nnaj_documento.numero_documento', $dataxxxx['padrexxx']->nnaj_docu->s_documento)
            ->orderBy('ge_nnaj_documento.fecha_insercion', 'DESC')
            ->orderBy('ficha_acercamiento_ingreso.fecha_insercion', 'ASC')
            ->first();

        return $dataxxxx;
    }

    public function setRazonesIngresoIdipronRT($dataxxxy)
    {
        $exisregi = FiRazone::where('sis_nnaj_id', $dataxxxy['padrexxx']->sis_nnaj_id)->first();
        if (!isset($exisregi->id)) {
            $dataxxxx = $this->getRazonesIngresoIdipronRT($dataxxxy);
            if ($dataxxxx!=null) {
                $dataxxxx->sis_depend_id = $this->getUpiSimi(['idupixxx' => $dataxxxx->sis_depend_id])->id;
                $dataxxxx->sis_depenr_id = $this->getUpiSimi(['idupixxx' => $dataxxxx->sis_depenr_id])->id;
                $dataxxxx->userd_id = $this->getUsuarioHT(['cedulaxx' => $dataxxxx->userd_id])->id;
                $dataxxxx->userr_id = $this->getUsuarioHT(['cedulaxx' => $dataxxxx->userr_id])->id;
                $dataxxxx->sis_nnaj_id = $dataxxxy['padrexxx']->sis_nnaj_id;
                $dataxxxx->i_prm_estado_ingreso_id = 1636;
                $exisregi = FiRazone::transaccion($dataxxxx->toArray(), '');
            }
        }
        return  $exisregi;
    }
}
