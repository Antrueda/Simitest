<?php

namespace App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag;


trait PruediagPestaniasTrait
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
        'edagrado' => ['', [], 'GRADOS', true, '', 'Administración de los grados'],
        'edasigra' => ['', [], 'GRADO-ASIGNATURAS', false, '', 'Asociar el grado con la asignatura'],
        'edaasign' => ['', [], 'ASIGNATURAS', true, '', 'Administración de las asignaturas'],
        'edasipre' => ['', [], 'ASIGNATURA-PRESABERES', true, '', 'Asociar la asigantura con presaberes'],
        'edapresa' => ['', [], 'PRESABERES', true, '', 'Administración de los presaberes'],
    ];
    /**
     * permisos que va a manejar cada pestaña
     *
     * @param array $dataxxxx
     * @return $respuest
     */
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
        $this->opciones['pestania']  = $this->getArmarPestanias($dataxxxx);
    }
}
