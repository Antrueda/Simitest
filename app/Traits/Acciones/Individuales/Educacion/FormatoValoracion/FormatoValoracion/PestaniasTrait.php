<?php

namespace App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\FormatoValoracion;


trait PestaniasTrait
{
    public $pestanix = [
        [
            'permisox' => 'ai', 'routexxx' => '.ver', 'dataxxxx' => [true, []],
        ],
        [
            'permisox' => 'matricurso', 'routexxx' => '', 'dataxxxx' => [true, []],
        ],

        [
            'permisox' => 'formatov', 'routexxx' => '', 'dataxxxx' => [true, []],
        ],

    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [
            'ai' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'matricurso' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'formatov' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
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

            'tituloxx' => 'INDIVIDUALES',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => ['aiindex-leer'],
            'tooltipx' => ''
        ];

        $pestania['matricurso'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'MATRÍCULA CURSOS INFORMALES FORMACIÓN TÉCNICA TALLERES',
            'tablaxxx' => 'sis_pais',
            'datablex' =>  [],
            'cananyxx' => $this->getCanany($dataxxxx),
            'tooltipx' => ''

        ];

        $pestania['formatov'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'FORMATO VALORACIÓN DE COMPETENCIAS',
            'tablaxxx' => 'sis_pais',
            'datablex' =>  [],
            'cananyxx' => $this->getCanany($dataxxxx),
            'tooltipx' => ''

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

                $dotosxxx['routexxx'] = route($value['permisox'] . $value['routexxx'], $value['dataxxxx'][1]);
                $pestania[] = $dotosxxx;
            }
        }
        return $pestania;
    }
}
