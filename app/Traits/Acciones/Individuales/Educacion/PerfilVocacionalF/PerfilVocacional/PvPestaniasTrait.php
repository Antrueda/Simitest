<?php

namespace App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional;


trait PvPestaniasTrait
{

    public $pestania = [
        ['ai.ver', '', [1], 'INDIVIDUALES', true, '', 'Acciones individuales','aiindex'], // por mínimo debe tener un controllaor
        // ['actaencu', '', [], 'OTRA PESTAÑA', true, '', 'Las pestañas se arman en el la ruta: Taits->Actaencu->ActaencuPestaniasTrait'], // por mínimo debe tener un controllaor
        // ['actaencu', '', [], 'OTRA PESTAÑA', true, '', 'Actas de encuentro'], // por mínimo debe tener un controllaor
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
