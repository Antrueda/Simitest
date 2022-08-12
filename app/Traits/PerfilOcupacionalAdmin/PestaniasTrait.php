<?php

namespace App\Traits\PerfilOcupacionalAdmin;


trait PestaniasTrait
{
    public $pestanix = [
        'perfilocupacionalcomponentes' => [true, []],
        'perfilocupacionalcategorias' => [true, []],
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [

            'perfilocupacionalcomponentes' => ['leer','crear', 'editar', 'borrar', 'activar'],
            'perfilocupacionalcategorias' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {
        $pestania['perfilocupacionalcomponentes'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'COMPONENTES DEL DESEMPEÑO',
            'tablaxxx' => '',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['perfilocupacionalcategorias'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'CATEGORÍAS DE DESEMPEÑO',
            'tablaxxx' => '',
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
