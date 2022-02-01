<?php

namespace App\Traits\Interfaz\Nuevsimi;

use App\Models\Simianti\Sis\Municipio;
use App\Models\sistema\SisMunicipio;


/**
 * realiza la validaciones para homologar un municipio del antiguo desarrollo al nuevo desarrollo
 *
 */
trait MunicipioTrait
{
    /**
     * homologar municipio
     *
     * @param array $dataxxxx
     * @return object $muninuev
     */
    public function getMunicipoSimi($dataxxxx)
    {
        $munianti = Municipio::find($dataxxxx['idmunici']);
        if ($dataxxxx['idmunici'] == 11001) {
            $muninuev = SisMunicipio::find(231);
        } elseif (!isset($munianti->codigo_municipio)) {
            $muninuev = SisMunicipio::find(1121);
        } else {
            $muninuev = SisMunicipio::where('s_municipio', $munianti->nombre_municipio)->first();
        }
        if (!isset($muninuev->id)) {
            $muninuev = SisMunicipio::find(1121);
        }
        return $muninuev;
    }
}
