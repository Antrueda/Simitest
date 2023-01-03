<?php

namespace App\Traits\Acciones\Grupales\Sena\Administracion;


trait PestaniasTrait
{
    public $pestanix = [
        'programa' => [true, []],
        'modalidad' => [true, []],
        'tipoprograma' => [true, []],
        'sedecentro' => [true, []],
        'conveniox' => [true, []],
        'asignaprograma' => [true, []],
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [

            'programa' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
             'modalidad' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
             'tipoprograma' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
             'sedecentro' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
             'conveniox' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
             'asignaprograma' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {
        $pestania['programa'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'PROGRAMA',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['modalidad'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'MODALIDAD',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['tipoprograma'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'TIPO PROGRAMA',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['sedecentro'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'SEDE CENTRO',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['conveniox'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'CONVENIO',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['asignaprograma'] = [
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
        return $pestania;
    }
}
