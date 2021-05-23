<?php

namespace App\Traits\Acciones\Grupales\Matricula;


trait PestaniasTrait
{
    public $pestanix = [
        [
            'permisox' => 'imatricula', 'routexxx' => '', 'dataxxxx' => [true, []],
        ],
        [
            'permisox' => 'imatriculannaj', 'routexxx' => '.nuevo', 'dataxxxx' => [false, []],
        ],
     
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [
        'imatricula' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        'imatriculannaj' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {

        $pestania['imatricula'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'INSCRIPCIÓN Y ENTREGA DE MATRICULA',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['imatriculannaj'] = [
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
