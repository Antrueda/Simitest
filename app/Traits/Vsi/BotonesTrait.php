<?php

namespace App\Traits\Vsi;



/**
 * Este trait se encarga de armar los botones que se utilizan en las vistas
 */
trait BotonesTrait
{
    /**
     * Armar los datos que necesita el botón
     *
     * @param array $dataxxxx
     * @return array $dataxxxx
     */
    public function getDefaultBT($dataxxxx)
    {
        // * Datos por defecto que se le pasan al botón
        $permisox = $this->opciones['permisox'];
        $compleme = 'leer';
        $tipoboto = 1;
        $clasexxx = 'btn btn-sm btn-primary';
        $mostboto = false;
        $parametr = [];
        // * el complemento del permisos es diferente del index
        if (isset($dataxxxx['permisox'])) {
            $compleme = $dataxxxx['permisox'];
        }

        // * Existen parámetros para el route
        if (isset($dataxxxx['parametr'])) {
            $parametr = $dataxxxx['parametr'];
        }

        // * El permisos es diferente al que se configura por defecto en el construct del controllador
        if (isset($dataxxxx['routexxx'])) {
            $permisox = $dataxxxx['routexxx'];
        }

        // * Se cambia el tipo de bontón
        if (isset($dataxxxx['tipoboto'])) {
            $tipoboto = $dataxxxx['tipoboto'];
        }

        // * Se utiliza una clase diferente
        if (isset($dataxxxx['clasexxx'])) {
            $clasexxx = $dataxxxx['clasexxx'];
        }

        // * El botón solo se muestra si el usuario tiene permiso
        if (auth()->user()->can($permisox . '-' . $compleme)) {
            $mostboto = true;
        }
        $dataxxxx['mostboto'] = $mostboto;
        $dataxxxx['tipoboto'] = $tipoboto;
        $dataxxxx['clasexxx'] = $clasexxx;
        $dataxxxx['parametr'] = $parametr;
        return $dataxxxx;
    }
    public function getBotones($dataxxxx)
    {
        $dataxxxx = $this->getDefaultBT($dataxxxx);
        $botonxxx = [
            'tituloxx' => $dataxxxx['tituloxx'],
            'clasexxx' => $dataxxxx['clasexxx'],
            'mostboto' => $dataxxxx['mostboto'],
            'tipoboto' => $dataxxxx['tipoboto'],
        ];

        switch ($dataxxxx['tipoboto']) {
            case 2:
                $botonxxx['hrefxxxx'] = route($dataxxxx['routingx'], $dataxxxx['parametr']);
                break;
        }
        $this->opciones['botoform'][] = $botonxxx;
        return $this->opciones;
    }
}
