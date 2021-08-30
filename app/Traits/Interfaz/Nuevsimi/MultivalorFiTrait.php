<?php

namespace App\Traits\Interfaz\Nuevsimi;

use App\Models\Parametro;
use App\Models\Temacombo;

/**
 * realiza la validaciones para homologar un parámetro de la tabla sis_multivalores del antiguo desarrollo al
 * nuevo desarrollo
 */
trait MultivalorFiTrait
{

    /**
     * encontrar el parámentro que devuelve la consulta de la upi
     *
     * @param array $dataxxxx
     * @param object $comboxxx
     * @return string $parametr
     */
    public function getParametroMFT($dataxxxx, $comboxxx)
    {
        $parametr = null;
        // se recorren los parámetros asignados al combo para identicar el que le llega
        foreach ($comboxxx as $key => $value) {
            if ($value->pivot->simianti_id == $dataxxxx['codigoxx']) {
                $parametr = $value;
            }
        }
        return $parametr;
    }

    /**
     * Encontar parámetros que se encuentran en la tabla: sis_multivalores y homologarlo al nuevo parámetro
     *
     * @param array $dataxxxx
     * @return object $parametr
     */
    public function getMultivalorMFT($dataxxxx)
    {
        $comboxxy = Temacombo::where('id', $dataxxxx['temaxxxx'])->first();
        $comboxxx = $comboxxy->parametros;
        $parametr = null;
        // El código estar vacío se asigna sin dato, ya que esta dato es requerido
        if (is_null($dataxxxx['codigoxx'])) {
            $parametr = Parametro::find(445);
        } else {
            $parametr =$this->getParametroMFT($dataxxxx, $comboxxx);
        }
        return $parametr;
    }
}
