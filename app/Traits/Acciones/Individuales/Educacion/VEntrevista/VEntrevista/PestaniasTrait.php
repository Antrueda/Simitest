<?php

namespace App\Traits\Acciones\Individuales\Educacion\VEntrevista\VEntrevista;


trait PestaniasTrait
{
    public $pestanix = [
        [
            'permisox' => 'ai', 'routexxx' => '.ver', 'dataxxxx' => [true, []],
        ],
        [
            'permisox' => 'cgicuest', 'routexxx' => '', 'dataxxxx' => [true, []],
        ],
        [
            'permisox' => 'pvocacif', 'routexxx' => '', 'dataxxxx' => [true, []],
        ],
        [
            'permisox' => 'ventrevista', 'routexxx' => '', 'dataxxxx' => [true, []],
        ],
        [
            'permisox' => 'vihcocup', 'routexxx' => '', 'dataxxxx' => [true, []],
        ],

        [
            'permisox' => 'vctocupa', 'routexxx' => '', 'dataxxxx' => [true, []],
        ],
        [
            'permisox' => 'fpoaplicacion', 'routexxx' => '-leer', 'dataxxxx' => [true, []],
        ],
        

// ['vctocupa', '', [], 'VALORACIÓN Y CARACTERIZACIÓN T.O', false, '', 'Gestionar valoración y caracterización terapia ocupacional'], // por mínimo debe tener un controllador
// ['fpoaplicacion', '-leer', [], 'PERFIL OCUPACIONAL', false, '', 'Perfil ocupacional'], // por mínimo debe tener un controlador     
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [
        'ai' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'cgicuest' => ['leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'],
        'pvocacif' => ['leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'],
        'ventrevista' => ['leer', 'crear', 'editar', 'borrar', 'activarx'],
        'vihcocup' =>  ['leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'],
        'vctocupa' =>  ['leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'],
        'fpoaplicacion' =>  ['leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'],
        
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {

        $pestania['ai'] = [
            'routexxx' => '',
            'activexx' => '',
            //'dataxxxx' =>true, [$dataxxxx['padrexxx']->id],
            'tituloxx' => 'INDIVIDUALES',
            'tooltipx' => 'INDIVIDUALES',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => ['aiindex-leer'],
        ];

        $pestania['cgicuest'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'CUESTIONARIO DE GUSTOS E INTERESES',
            'tooltipx' => 'CUESTIONARIO DE GUSTOS E INTERESES',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['pvocacif'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'PERFIL VOCACIONAL',
            'tooltipx' => 'PERFIL VOCACIONAL',

            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['ventrevista'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'VALORACIÓN TERAPIA OCUPACIONAL ENTREVISTA SEMIESTRUCTURADA',
            'tooltipx' => 'VALORACIÓN TERAPIA OCUPACIONAL ENTREVISTA SEMIESTRUCTURADA',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['vihcocup'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'VALORACIÓN E IDENTIFICACIÓN DE HABILIDADES',
            'tooltipx' => 'VALORACIÓN E IDENTIFICACIÓN DE HABILIDADES',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['vctocupa'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'VALORACIÓN Y CARACTERIZACIÓN T.O',
            'tooltipx' => 'VALORACIÓN Y CARACTERIZACIÓN T.O',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['fpoaplicacion'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'PERFIL OCUPACIONAL',
            'tooltipx' => 'PERFIL OCUPACIONAL',
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

