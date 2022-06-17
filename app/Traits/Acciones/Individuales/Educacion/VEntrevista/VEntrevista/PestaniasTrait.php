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
     
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [
        'ai' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'cgicuest' => ['leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'],
        'pvocacif' => ['leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'],
        'ventrevista' => ['leer', 'crear', 'editar', 'borrar', 'activarx'],
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
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => ['aiindex-leer'],
        ];

        $pestania['cgicuest'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'CUESTIONARIO DE GUSTOS E INTERESES',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['pvocacif'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'PERFIL VOCACIONAL',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['ventrevista'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'VALORACIÓN TERAPIA OCUPACIONAL ENTREVISTA SEMIESTRUCTURADA',
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
