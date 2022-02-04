<?php

namespace App\Traits\AsisSema;


trait AsisSemaPestaniasTrait
{
    
    public $pestania = [
        ['asissema', '', [], 'ASISTENCIA SEMANAL', true, '', 'Planilla de Asistencia Semanal'], // por mínimo debe tener un controllaor
        ['asissema', '.asistencias', [], 'TOMAR ASISTENCIA', false, '', 'Tomar asistencia'], // por mínimo debe tener un controllaor
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
        if(isset($dataxxxx['modeloxx'])){
            $this->pestania[1][2]=$dataxxxx['modeloxx']->id;
            $this->pestania[1][4]=true;
        }
        
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
