<?php

namespace App\Traits\Interfaz;

use App\Models\fichaIngreso\FiRazone;
use App\Models\Simianti\Ge\FichaAcercamientoIngreso;

trait RazonesIngresoIdipronTrait
{
    public function getRazonesIngresoIdipronRT($dataxxxx)
    {
        $dataxxxx = FichaAcercamientoIngreso::join('ge_nnaj_documento', 'ficha_acercamiento_ingreso.id_nnaj', '=', 'ge_nnaj_documento.id_nnaj')
            ->where('ge_nnaj_documento.numero_documento', $dataxxxx['padrexxx']->nnaj_docu->s_documento)
            ->orderBy('ge_nnaj_documento.fecha_insercion', 'DESC')

            ->orderBy('ficha_acercamiento_ingreso.fecha_insercion', 'ASC')
            ->first();

        return $dataxxxx;
    }

    public function setRazonesIngresoIdipronRT($dataxxxx)
    {
        $dataxxxx = $this->getRazonesIngresoIdipronRT($dataxxxx);
        // FiRazone::transaccion($dataxxxx['requestx']->all(), '');
        return $dataxxxx;
    }
}
