<?php

namespace App\Traits\Acciones\Grupales\Sena\Inscripcion;


trait PestaniasTrait
{
    public $pestanix = [
        [
            'permisox' => 'inscricon', 'routexxx' => '', 'dataxxxx' => [true, []],
        ],
        [
            'permisox' => 'inscrnnaj', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],
        ],
        [
            'permisox' => 'ai', 'routexxx' => '.ver', 'dataxxxx' => [false, []],
        ],
     
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [
        'inscricon' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'inscrnnaj' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'ai' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {

        $pestania['inscricon'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'INSCRIPCIÓN FORMACIÓN TÉCNICA',
            'tablaxxx' => 'sis_pais',
            'tooltipx' => 'INSCRIPCIÓN Y ENTREGA DE MATRICULA',
            
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['inscrnnaj'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'INGRESAR NNAJ',
            'tablaxxx' => 'sis_pais',
            'tooltipx' => 'INSCRIPCIÓN Y ENTREGA DE MATRICULA',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
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

