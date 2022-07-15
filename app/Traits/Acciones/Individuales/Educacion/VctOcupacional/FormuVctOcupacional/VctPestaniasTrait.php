<?php

namespace App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional;

use Illuminate\Support\Facades\Auth;

trait VctPestaniasTrait
{

    public $pestania = [
        ['ai.ver', '', [], 'INDIVIDUALES', true, '', 'Acciones individuales','aiindex'], // por mínimo debe tener un controllaor
       ];
    public $pestania2 = [
        ['vctocupa', '', [], 'VALORACIÓN Y CARACTERIZACIÓN T.O', true, '', 'Gestionar valoración y caracterización terapia ocupacional'], // por mínimo debe tener un controllador
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

    public function getArmarPestaniaWithValidation($dataxxxx,$puedoeditar,$accionxx)
    {
        $accion= null;
        if ($accionxx == 'verxxxxx') {
            $accion='.verxxxxx';
        }else{
            if ($dataxxxx[7] == null) {
                $accion='.nuevoxxx';
            }else{
                ($puedoeditar) ? $accion='.editarxx':$accion='.verxxxxx';
            } 
        }

        $respuest = [
            'muespest' => false, // indica si se mustra o no
            'pestania' => [
                'routexxx' => route($dataxxxx[0].$accion, $dataxxxx[2]), // ruta que tiene la pestaña
                'activexx' => $dataxxxx[5], // clase que activa la pestaña cuando se esté en ella
                'tituloxx' => $dataxxxx[3], // titulo con el que se identifica la pestanña
                'tooltipx' => $dataxxxx[6], // Ayuda para la pestaña
                'cananyxx' => $this->getCanany2($dataxxxx),
                'iconoxxx' => ($dataxxxx[7] == null)?false:true,
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
        return $respuest;
    }

    public function getArmarPestaniasWithValidation($modeloxx,$activar_pestania,$accion)
    {
        $puedoeditar=false;
        if ( $modeloxx->user_crea_id == Auth::user()->id || Auth::user()->roles->first()->id == 1) {
            $puedoeditar = true;
        }

        $pestaniaWithValidation = [
            ['vctocomp', '', $modeloxx->id, 'COMPETENCIAS OCUPACIONALES', true, '', '',$modeloxx->vctocompetencias], 
            ['vctocara', '', $modeloxx->id, 'CARACTERIZACIÓN DEL DESEMPEÑO', true, '', '',$modeloxx->caracterizacion()->first()], 
            ['vctofort', '', $modeloxx->id, 'ÁREAS A FORTALECER', true, '', '',$modeloxx->fortalecer->first()], 
            ['vctoremi', '', $modeloxx->id, 'REMITIR A', true, '', '',$modeloxx->prm_remitir], 
        ];

        if ($activar_pestania !== null) {
            $pestaniaWithValidation[$activar_pestania][5] = 'active';
        }
        $respuest = [];
        foreach ($pestaniaWithValidation as $key => $valuexxx) {
            if ($valuexxx[4]) {
                if ($accion == "verxxxxx") {
                    if ($valuexxx[7] != null) {
                        $respuest[] = $this->getArmarPestaniaWithValidation($valuexxx,$puedoeditar,$accion);
                    }
                }else{
                    $respuest[] = $this->getArmarPestaniaWithValidation($valuexxx,$puedoeditar,$accion);
                }
            }
        }
        return $respuest;
    }

    public function getPestanias($dataxxxx)
    {
        $this->opciones['pestania']  = $this->getArmarPestanias($dataxxxx);
    }
    
    public function getPestaniasWitValidation($modeloxx,$accion,$activar_pestania = null)
    {
        $this->opciones['pestania'] = array_merge($this->opciones['pestania'],$this->getArmarPestaniasWithValidation($modeloxx,$activar_pestania,$accion));
    }
}
