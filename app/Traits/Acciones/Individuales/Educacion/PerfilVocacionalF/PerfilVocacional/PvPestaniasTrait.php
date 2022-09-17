<?php

namespace App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional;


trait PvPestaniasTrait
{

    public $pestania = [
        ['ai.ver', '', [], 'INDIVIDUALES', true, '', 'Acciones individuales', 'aiindex'], // por mínimo debe tener un controllaor
    ];
    public $pestania2 = [
        ['pvocacif', '', [], 'PERFIL VOCACIONAL ', true, '', 'Gestionar Perfil vocacional NNAJ'], // por mínimo debe tener un controllador
        ['cgicuest', '', [], 'GUSTOS E INTERESES', false, '', 'Custionario de gustos e intereses'], // por mínimo debe tener un controlador
        ['vctocupa', '', [], 'VALORACIÓN Y CARACTERIZACIÓN T.O', false, '', 'Gestionar valoración y caracterización terapia ocupacional'], // por mínimo debe tener un controllador
        ['vihcocup', '', [], 'VALORACIÓN E IDENTIFICACIÓN DE HABILIDADES', false, '', 'Valoración e identificación de habilidades'], // por mínimo debe tener un controllador
    ];
    public $pestania3 = [
        ['fpoaplicacion', '-leer', [], 'PERFIL OCUPACIONAL', false, '', 'Perfil ocupacional'], // por mínimo debe tener un controlador
        ['ventrevista', '', [], 'VALORACIÓN TERAPIA OCUPACIONAL ENTREVISTA SEMIESTRUCTURADA', false, '', 'Valoración terapia ocupacional entrevista semiestructurada'], // por mínimo debe tener un controlador
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
            'leer', 'crear', 'editar'
        ];
        $respuest = [];
        foreach ($permisox as $key => $value) {
            $respuest[] = $dataxxxx[7] . '-' . $value;
        }
        return $respuest;
    }
    private function getCanany2($dataxxxx)
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
    private function getCanany3($dataxxxx)
    {
        $permisox = [
            'leer', 'crear', 'editar', 'borrar', 'activarx'
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

    public function getArmarPestania2($dataxxxx)
    {
        $respuest = [
            'muespest' => false, // indica si se mustra o no
            'pestania' => [
                'routexxx' => route($dataxxxx[0] . $dataxxxx[1], $dataxxxx[2]), // ruta que tiene la pestaña
                'activexx' => $dataxxxx[5], // clase que activa la pestaña cuando se esté en ella
                'tituloxx' => $dataxxxx[3], // titulo con el que se identifica la pestanña
                'tooltipx' => $dataxxxx[6], // Ayuda para la pestaña
                'cananyxx' => $this->getCanany2($dataxxxx),
            ]
        ];
        return $respuest;
    }

    public function getArmarPestania3($dataxxxx)
    {
        $respuest = [
            'muespest' => false, // indica si se mustra o no
            'pestania' => [
                'routexxx' => route($dataxxxx[0] . $dataxxxx[1], $dataxxxx[2]), // ruta que tiene la pestaña
                'activexx' => $dataxxxx[5], // clase que activa la pestaña cuando se esté en ella
                'tituloxx' => $dataxxxx[3], // titulo con el que se identifica la pestanña
                'tooltipx' => $dataxxxx[6], // Ayuda para la pestaña
                'cananyxx' => $this->getCanany3($dataxxxx),
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
        foreach ($this->pestania2 as $key => $valuexxx) {
            if ($valuexxx[4]) {
                $respuest[] = $this->getArmarPestania2($valuexxx);
            }
        }
        foreach ($this->pestania3 as $key => $valuexxx) {
            if ($valuexxx[4]) {
                $respuest[] = $this->getArmarPestania3($valuexxx);
            }
        }
        return $respuest;
    }
    public function getPestanias($dataxxxx)
    {
        $this->opciones['pestania']  = $this->getArmarPestanias($dataxxxx);
    }

    public function activarPestanias($padrexxx)
    {
        $this->pestania2[1][4] = true;
        $this->pestania2[1][2] = $padrexxx;
        $this->pestania2[2][4] = true;
        $this->pestania2[2][2] = $padrexxx;
        $this->pestania2[3][4] = true;
        $this->pestania2[3][2] = $padrexxx;
        $this->pestania3[0][4] = true;
        $this->pestania3[0][2] = $padrexxx;
        $this->pestania3[1][4] = true;
        $this->pestania3[1][2] = $padrexxx;
    }
}
