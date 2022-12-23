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
            'permisox' => 'egresosder', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],'checkxxx'=>'',
        ],
         [
            'permisox' => 'egresoredes', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],'checkxxx'=>'',
        ],
        [
            'permisox' => 'egresopost', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],'checkxxx'=>'',
        ],
         [
             'permisox' => 'egresocomite', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],'checkxxx'=>'',
         ],
     
     
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [
        'ai' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'egresosdb' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'egresosdb' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'egresosder' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'egresoredes' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'egresopost' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
         'egresocomite' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
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
        $pestania['egresosder'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'VERTIFICACIÓN DE DERECHOS',
            'tablaxxx' => 'sis_pais',
            'checkxxx' => '',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

         $pestania['egresoredes'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'REDES SOCIALES DE APOYO',
            'tablaxxx' => 'sis_pais',
            'checkxxx' => '',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['egresopost'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'SEGUIMIENTO POST EGRESO',
            'tablaxxx' => 'sis_pais',
            'checkxxx' => '',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['egresocomite'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'VALIDACIÓN DEL CASO',
            'tablaxxx' => 'sis_pais',
            'checkxxx' => '',
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
                $dotosxxx['checkxxx'] = $value['checkxxx'];
             
                $pestania[] = $dotosxxx;
            }
        }
        
        return $pestania;
    }



}
