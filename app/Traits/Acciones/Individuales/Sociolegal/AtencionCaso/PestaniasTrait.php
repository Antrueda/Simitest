<?php

namespace App\Traits\Acciones\Individuales\Sociolegal\AtencionCaso;


trait PestaniasTrait
{
    public $pestanix = [
        [
            'permisox' => 'ai', 'routexxx' => '.ver', 'dataxxxx' => [true, []],
        ],
        [
            'permisox' => 'acasojur', 'routexxx' => '', 'dataxxxx' => [true, []],
        ],
     
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [
        'ai' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'acasojur' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
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

        $pestania['acasojur'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ATENCIÓN CASO JURÍDICO',
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
