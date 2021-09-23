<?php

namespace App\Traits;

use Spatie\Permission\Models\Permission;

/**
 * trait que arma la estructuar para la funcionalidad de las pestañas de manera general
 */
trait PestaniasGeneralTrait
{
    private $pestanix=false;
    private $moduloxx=true;
    private function getCanany($routexxx, $dataxxxx)
    {
        $permisox =Permission::where('name','like',$routexxx.'%')->get('name');
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
        if( $this->pestanix!=false){
            $this->pestania[$this->pestanix][4] = 'active';
        }
        $this->opciones['pestania']  = $this->getArmarPestanias($dataxxxx);
    }
}
