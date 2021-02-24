<?php

namespace App\Traits\Acciones\Grupales;


trait PestaniasTrait
{
    public $pestanix = [
        [
            'permisox' => 'agactividad',  'routexxx' => '','dataxxxx' => [true, []],
        ],
        [
            'permisox' => 'agrespon', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],
        ],
        [
            'permisox' => 'agasiste', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],
        ],

        [
            'permisox' => 'agrelacion', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],
        ],

        [
            'permisox' => 'agcargdoc', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],
        ],

        
        
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [

            'agactividad' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'aisalidamayores' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'agrespon' => ['crear', 'editar', 'borrar', 'activar'],
            'agasiste' => ['crear', 'borrar', 'activar'],
            'agrelacion' => ['crear', 'borrar', 'activar'],
            'agcargdoc' => ['crear', 'borrar', 'activar'],

            
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {
        $pestania['agactividad'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'TALLERES EDUCATIVOS Y/O ACCIONES FORMATIVAS',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
      

        $pestania['agrespon'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'RESPONSABLE Y ACOMPAÑANTES',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['agasiste'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'PARTICIPANTES',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['agrelacion'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'RECURSOS',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['agcargdoc'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'CARGUE DE DOCUMENTOS DEL TALLER EDUCATIVO Y/O ACCIÓN FORMATIVA',
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
