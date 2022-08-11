<?php

namespace App\Traits\Acciones\Individuales\Sociolegal\Administracion;



trait PestaniasTrait
{
    public $pestanix = [
        'diagnostico' => [true, []],
        'enfermedad' => [true, []],
        'asignaenfer' => [true, []],
        'remision' => [true, []],
        'remisionesp' => [true, []],
        'asignaespec' => [true, []],
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [

            'diagnostico' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'enfermedad' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'asignaenfer' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'remision' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'remisionesp' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'asignaespec' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {
        $pestania['diagnostico'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'DIAGNOSTICO',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['enfermedad'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ENFERMEDAD',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['remision'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'REMISIÓN',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['remisionesp'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'REMISIÓN ESPECIAL',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['asignaespec'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ASIGNAR REMISIÓN',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['asignaenfer'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ASIGNAR ENFERMEDAD',
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
