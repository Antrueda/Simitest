<?php

namespace App\Traits\Administracion\Ubicacion;


trait PestaniasTrait
{
    public $pestanix = [
        'paisxxxx' => [true, []],
        'departam' => [false, []],
        'municipi' => [false, []],
        'localida' => [true, []],
        'localupz' => [false, []],
        'upzxxxxx' => [true, []],
        'barriupz' => [false, []],
        'barrioxx' => [true, []]
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [
            'paisxxxx' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'departam' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'municipi' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'localida' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'upzxxxxx' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'barrioxx' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {
        $pestania['paisxxxx'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'PAISES',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['departam'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'DEPARTAMENTOS',
            'tablaxxx' => 'sis_departamentos',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['municipi'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'MUNICIPIOS',
            'tablaxxx' => 'sis_municipios',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['localida'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'LOCALIDADES',
            'tablaxxx' => 'sis_localidads',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['upzxxxxx'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => "UPZ'S",
            'tablaxxx' => 'sis_upzs',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['barrioxx'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'BARRIOS',
            'tablaxxx' => 'sis_barrios',
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
        return $pestania;
    }
}
