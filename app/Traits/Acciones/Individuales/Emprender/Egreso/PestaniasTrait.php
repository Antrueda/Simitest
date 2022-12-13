<?php

namespace App\Traits\Acciones\Individuales\Emprender\Egreso;


trait PestaniasTrait
{
    public $pestanix = [
        [
            'permisox' => 'ai', 'routexxx' => '.ver', 'dataxxxx' => [true, []],'checkxxx'=>2,
        ],
        [
            'permisox' => 'egresosdb', 'routexxx' => '', 'dataxxxx' => [true, []],'checkxxx'=>2,
        ],
        [
            'permisox' => 'egresosdb', 'routexxx' => '.editar', 'dataxxxx' => [false, []],'checkxxx'=>'',
        ],
        [
            'permisox' => 'vodonexamens', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],'checkxxx'=>'',
        ],
        // [
        //     'permisox' => 'vodontograma', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],'checkxxx'=>'',
        // ],
        // [
        //     'permisox' => 'vodonhigiene', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],'checkxxx'=>'',
        // ],
        // [
        //     'permisox' => 'vodonremites', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],'checkxxx'=>'',
        // ],
     
     
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [
        'ai' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'egresosdb' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'egresosdb' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'vodonexamens' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        // 'vodontograma' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        // 'vodonhigiene' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        // 'vodonremites' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
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
            'checkxxx' => '',
            'tituloxx' => 'INDIVIDUALES',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => ['aiindex-leer'],
        ];

        $pestania['egresosdb'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'EGRESO',
            'checkxxx' => '',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        
        $pestania['egresosdb'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'DATOS BÁSICOS',
            'tablaxxx' => 'sis_pais',
            'checkxxx' => '',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['vodonexamens'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'EXAMEN ESTOMATOLÓGICO',
            'tablaxxx' => 'sis_pais',
            'checkxxx' => '',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        // $pestania['vodontograma'] = [
        //     'routexxx' => '',
        //     'activexx' => '',
        //     'tituloxx' => 'ODONTOGRAMA',
        //     'tablaxxx' => 'sis_pais',
        //     'checkxxx' => '',
        //     'datablex' => [],
        //     'cananyxx' => $this->getCanany($dataxxxx),
        // ];
        // $pestania['vodonhigiene'] = [
        //     'routexxx' => '',
        //     'activexx' => '',
        //     'tituloxx' => 'REGISTRO INDICE DE PLACA SINLESS Y LÖE MODIFICADO',
        //     'tablaxxx' => 'sis_pais',
        //     'checkxxx' => '',
        //     'datablex' => [],
        //     'cananyxx' => $this->getCanany($dataxxxx),
        // ];
        // $pestania['vodonremites'] = [
        //     'routexxx' => '',
        //     'activexx' => '',
        //     'tituloxx' => 'REMISIÓN',
        //     'tablaxxx' => 'sis_pais',
        //     'checkxxx' => '',
        //     'datablex' => [],
        //     'cananyxx' => $this->getCanany($dataxxxx),
        // ];

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
                $dotosxxx['checkxxx'] = $value['checkxxx'];
             
                $pestania[] = $dotosxxx;
            }
        }
        
        return $pestania;
    }



}
