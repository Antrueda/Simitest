<?php

namespace App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\Administracion;



trait PestaniasTrait
{
    public $pestanix = [
        'cursos' => [true, []],
        'modulos' => [true, []],
        'moduloasigna' => [true, []],
        'denomina' => [true, []],
        'uniasigna' => [true, []],
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [

            'cursos' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'modulos' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'denomina' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'moduloasigna' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'uniasigna' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {
        $pestania['cursos'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'CURSOS',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['modulos'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'MODULOS',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['denomina'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'UNIDADES',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['moduloasigna'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ASIGNAR MODULOS',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['uniasigna'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ASIGNAR UNIDADES',
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
