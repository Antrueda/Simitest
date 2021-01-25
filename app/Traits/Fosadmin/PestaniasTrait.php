<?php

namespace App\Traits\Fosadmin;


trait PestaniasTrait
{
    public $pestanix = [
        'fostipse' => [true, []],
        'fosubtse' => [true, []],
        'fosasignar' => [true, []],
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [

            'fostipse' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'fosubtse' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'fosasignar' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {
        $pestania['fostipse'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'TIPO DE SEGUIMIENTO',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['fosubtse'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'SUB TIPO DE SEGUIMIENTO',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['fosasignar'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ASIGNAR SUB TIPO DE SEGUIMIENTO',
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
