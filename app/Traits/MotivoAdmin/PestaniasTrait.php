<?php

namespace App\Traits\MotivoAdmin;


trait PestaniasTrait
{
    public $pestanix = [
        'motivoe' => [true, []],
        'motivose' => [true, []],
        'motivouni' => [true, []],
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [

            'motivoe' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'motivose' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'motivouni' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {
        $pestania['motivoe'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'MOTIVO PRINCIPAL',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['motivose'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'MOTIVO SECUNDARIO',
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
