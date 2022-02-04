<?php

namespace App\Traits\MatriculaAdmin;


trait PestaniasTrait
{
    public $pestanix = [
        'grupoasig' => [true, []],
        'gradoasig' => [true, []],
        // 'motivouni' => [true, []],
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [

            'grupoasig' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
             'gradoasig' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            // 'motivouni' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {
        $pestania['grupoasig'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ASIGNAR GRUPO',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['gradoasig'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ASIGNAR GRADO',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['motivouni'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ASIGNAR MOTIVOS',
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
