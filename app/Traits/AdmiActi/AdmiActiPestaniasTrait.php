<?php

namespace App\Traits\AdmiActi;


trait AdmiActiPestaniasTrait
{
    /**
     * Estructura principal de las pestañas
     *
     * ['actaencu', // nombre del rout que va a tener la pestaña
     * '', // complemento le rout si lo tiene
     * [], // parametros del rout si los tiene
     * 'ACTA DE ENCUENTRO', // titulo de la pestana
     * true, // true indica que se carga de una y false que no
     * '', // agregarle la clase active
     * 'Actas de encuentro' // contenido que se muestra en el tooltip de la pestaña
     * ],
     */
    public $pestania = [
        ['admitiac', '', [], 'TIPOS DE ACTIVIDAD', true, '', 'Tipos de actividad'], // por mínimo debe tener un controllador
        ['admiacti', '', [], 'ACTIVIDADES', true, '', 'Actividades'], // por mínimo debe tener un controllador
        // ['actaencu', '', [], 'OTRA PESTAÑA', true, '', 'Actas de encuentro'], // por mínimo debe tener un controllador
    ];
    /**
     * permisos que va a manejar cada pestaña
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    private function getCanany($dataxxxx)
    {
        $permisox = [
            'leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'
        ];
        $respuest = [];
        foreach ($permisox as $key => $value) {
            $respuest[] = $dataxxxx[0] . '-' . $value;
        }
        return $respuest;
    }

    /**
     * armar la estructura principal de una pestaña
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    public function getArmarPestania($dataxxxx)
    {
        $respuest = [
            'muespest' => false, // indica si se mustra o no
            'pestania' => [
                'routexxx' => route($dataxxxx[0] . $dataxxxx[1], $dataxxxx[2]), // ruta que tiene la pestaña
                'activexx' => $dataxxxx[5], // clase que activa la pestaña cuando se esté en ella
                'tituloxx' => $dataxxxx[3], // titulo con el que se identifica la pestanña
                'tooltipx' => $dataxxxx[6], // Ayuda para la pestaña
                'cananyxx' => $this->getCanany($dataxxxx),
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
            if ($valuexxx[4]) {
                $respuest[] = $this->getArmarPestania($valuexxx);
            }
        }
        return $respuest;
    }
    public function getPestanias($dataxxxx)
    {
        $this->opciones['pestania']  = $this->getArmarPestanias($dataxxxx);
      
    }
}
