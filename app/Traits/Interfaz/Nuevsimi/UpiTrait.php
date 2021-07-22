<?php

namespace App\Traits\Interfaz\Nuevsimi;

use App\Models\Simianti\Ge\GeUpi;
use App\Models\Sistema\SisDepen;
use App\Traits\Interfaz\Nuevsimi\BarrioTrait;
use App\Traits\Interfaz\Nuevsimi\MultivalorFiTrait;
use App\Traits\Interfaz\Nuevsimi\MunicipioTrait;

/**
 * homologa una upi del antiguo al nuevo desarrollo
 */
trait UpiTrait
{
    use MultivalorFiTrait;
    use MunicipioTrait;
    use BarrioTrait;

    /**
     * consulta general de la upi
     *
     * @param array $dataxxxx
     * @return object $respuest
     */
    public function getDatosUpiMFT($dataxxxx)
    {
        $selectxx = [
            "id_upi",
            "nombre",
            "sexo",
            "direccion",
            "id_localidad",
            "id_barrio",
            "telefonos",
            "correo_electronico",
            "ciclo_vital",
            "codigo_municipio",
        ];
        $respuest = GeUpi::select($selectxx)->where('id_upi', $dataxxxx['idxxxxxx'])->first();
        return $respuest;
    }

    /**
     * metodo principal de la homologación
     *
     * @param array $dataxxxx
     * @return object $sisdepen
     */
    public function getUpiMFT($dataxxxx)
    {
        $sisdepen = $this->getHomlogarMFT($dataxxxx);
        return $sisdepen;
    }
    /**
     * conviertir GeUpi a SisDepen
     *
     * @param array $dataxxxx
     * @return object $sisdepen
     */
    public function getHomlogarMFT($dataxxxx)
    {
        $depeanti = $this->getDatosUpiMFT($dataxxxx);
        $sisdepen = new SisDepen();
        $sisdepen->nombre = $depeanti->nombre;
        $sisdepen->s_correo = $depeanti->correo_electronico;
        $sisdepen->i_prm_cvital_id = $this->getMultivalorMFT([
            'codigoxx' => $depeanti->ciclo_vital,
            'tablaxxx' => 'CICLO_VITAL',
            'temaxxxx' => 311,
            'testerxx' => false
        ])->id;
        $sisdepen->i_prm_tdependen_id = 1;
        $sisdepen->i_prm_sexo_id = $this->getMultivalorMFT([
            'codigoxx' => $depeanti->sexo,
            'tablaxxx' => 'SEXO_UPI',
            'temaxxxx' => 339,
            'testerxx' => false
        ])->id;
        $sisdepen->s_direccion  = $depeanti->direccion;
        $municipi = $this->getMunicipoSimi(['idmunici' => $depeanti->codigo_municipio]);
        $sisdepen->sis_municipio_id  = $municipi->id;
        $sisdepen->sis_departam_id  = $municipi->sis_departam_id;
        $sisdepen->sis_upzbarri_id  = $this->getBarrio(['idbarrio' => $depeanti->id_barrio])->id;
        $sisdepen->s_telefono  = $depeanti->telefonos;
        $sisdepen->estusuario_id  = 9;
        $sisdepen->simianti_id  = $depeanti->id_upi;
        return $sisdepen;
    }
}
