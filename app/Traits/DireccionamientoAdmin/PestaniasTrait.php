<?php

namespace App\Traits\DireccionamientoAdmin;


trait PestaniasTrait
{
    public $pestanix = [
        'direentidad' => [true, []],
        'direcprogrma' => [true, []],
        'direcasignar' => [true, []],
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [

            'direentidad' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'direcprogrma' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'direcasignar' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {
        $pestania['direentidad'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ENTIDAD',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['direcprogrma'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'PROGRAMA Y/O SERVICIO',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['direcasignar'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ASIGNAR PROGRAMA',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        if (isset($pestania[$dataxxxx['slotxxxx']]['activexx'])) {
            $pestania[$dataxxxx['slotxxxx']]['activexx'] = 'active';
        }
        return $pestania[$dataxxxx['cananyxx']];
    }
    public function getPestanias($dataxxxx)
    {
        $pestania = [];
        foreach ($this->pestanix as $key => $value) {
            if ($value[0]) {
                $dataxxxx['cananyxx'] = $key;
                $dotosxxx = $this->setPestanias($dataxxxx);
                $dotosxxx['routexxx'] = route($key, $value[1]);
                $pestania[] = $dotosxxx;
            }
        }
        // ddd($pestania);
        return $pestania;
    }
}
