<?php

namespace App\Traits\Acciones\Grupales\Salidamayores;


trait PestaniasTrait
{
    public $pestanix = [
        [
            'permisox' => 'aisalidamayores', 'routexxx' => '', 'dataxxxx' => [true, []],
        ],
        [
            'permisox' => 'salidajovenes', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],
        ],
     
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [
        'aisalidamayores' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'salidajovenes' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {

        $pestania['aisalidamayores'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'REGISTRO DE  PERMISOS  DE ADOLESCENTES Y/O JOVENES',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['salidajovenes'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'INGRESAR AJ',
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
            
            if ($value['dataxxxx'][0]) {
                $dataxxxx['cananyxx'] = $value['permisox'];
                $dotosxxx = $this->setPestanias($dataxxxx);
                $dotosxxx['routexxx'] = route($value['permisox'].$value['routexxx'], $value['dataxxxx'][1]);
                $pestania[] = $dotosxxx;
            }
        }
        return $pestania;
    }
}
