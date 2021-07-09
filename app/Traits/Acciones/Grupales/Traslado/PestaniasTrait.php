<?php

namespace App\Traits\Acciones\Grupales\Traslado;


trait PestaniasTrait
{
    public $pestanix = [
        [
            'permisox' => 'traslado', 'routexxx' => '', 'dataxxxx' => [true, []],
        ],
        [
            'permisox' => 'trasladonnaj', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],
        ],
     
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [
        'traslado' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'trasladonnaj' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {

        $pestania['traslado'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'TRASLADOS ENTRE UPIS/EGRESO O REASIGNACIÓN DE TALLERES',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['trasladonnaj'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'INGRESAR NNAJ',
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
