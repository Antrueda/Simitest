<?php

namespace App\Traits\Acciones\Individuales\Salud\Odontologia\Odontologia;


trait PestaniasTrait
{
    public $pestanix = [
        [
            'permisox' => 'ai', 'routexxx' => '.ver', 'dataxxxx' => [true, []],'checkxxx'=>2,
        ],
        [
            'permisox' => 'vodontologia', 'routexxx' => '', 'dataxxxx' => [true, []],'checkxxx'=>2,
        ],
        [
            'permisox' => 'vodonanteces', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],'checkxxx'=>'',
        ],
        [
            'permisox' => 'vodonexamens', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],'checkxxx'=>'',
        ],
        [
            'permisox' => 'vodontograma', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],'checkxxx'=>'',
        ],
     
     
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [
        'ai' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'vodontologia' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'vodonanteces' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'vodonexamens' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'vodontograma' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
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

        $pestania['vodontologia'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'VALORACIÓN ODONTOLOGÍA',
            'checkxxx' => '',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        
        $pestania['vodonanteces'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ANTECEDENTES',
            'tablaxxx' => 'sis_pais',
            'checkxxx' => '',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['vodonexamens'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'EXAMENES',
            'tablaxxx' => 'sis_pais',
            'checkxxx' => '',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['vodontograma'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ODONTOGRAMA',
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
