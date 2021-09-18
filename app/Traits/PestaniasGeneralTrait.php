<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

/**
 * trait que arma la estructuar para la funcionalidad de las pestañas de manera general
 */
trait Pestanias
{
    private function getCanany($routexxx, $dataxxxx)
    {
        $permisox = [
            'leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'
        ];
        $respuest = [];
        foreach ($permisox as $key => $value) {
            $respuest[] = $routexxx . '-' . $value;
        }
        return $respuest;
    }

    /**
     * armar la estructura principal de una pestaña
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    public function getArmarPestania($key, $dataxxxx)
    {
        $respuest = [
            'muespest' => false, // indica si se mustra o no
            'pestania' => [
                'routexxx' => route($key . $dataxxxx[0], $dataxxxx[1]), // ruta que tiene la pestaña
                'activexx' => $dataxxxx[4], // clase que activa la pestaña cuando se esté en ella
                'tituloxx' => $dataxxxx[2], // titulo con el que se identifica la pestanña
                'tooltipx' => $dataxxxx[5], // Ayuda para la pestaña
                'cananyxx' => $this->getCanany($key, $dataxxxx),
            ]
        ];
        return $respuest;
    }
    /**
     * armar las pestañas que va a tener el módulo
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    public function getArmarPestanias($dataxxxx)
    {
        $respuest = [];
        foreach ($this->pestania as $key => $valuexxx) {
            if ($valuexxx[3]) {
                $respuest[] = $this->getArmarPestania($key, $valuexxx);
            }
        }
        return $respuest;
    }
    public function getPestanias($dataxxxx)
    {
        $this->pestania[$this->opciones['permisox']][4] = 'active';
        $this->pestania[$this->opciones['permisox']][3] = true;
        $this->opciones['pestania']  = $this->getArmarPestanias($dataxxxx);
    }
}