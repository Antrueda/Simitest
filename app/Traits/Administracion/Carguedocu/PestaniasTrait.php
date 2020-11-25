<?php

namespace App\Traits\Administracion\Carguedocu;


trait PestaniasTrait
{
    public $pestanix = [
        'cargdocu' => [true, []],
        'cardocfi' => [false, []],

    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [
            'cargdocu' => ['modulo'],
            'cardocfi' => ['leer', 'crear', 'editar', 'borrar', 'activar'],

        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {
        $pestania['cargdocu'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'NNAJ',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['cardocfi'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'FI',
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
