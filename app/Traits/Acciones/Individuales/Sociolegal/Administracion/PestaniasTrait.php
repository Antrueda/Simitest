<?php

namespace App\Traits\Acciones\Individuales\Sociolegal\Administracion;



trait PestaniasTrait
{
    public $pestanix = [
        'tipocaso' => [true, []],
        'temacaso' => [true, []],
        'seguicaso' => [true, []],
        'asignacaso' => [true, []],
    ];

    private function getCanany($dataxxxx)
    {
        $permisox = [

            'tipocaso' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'temacaso' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'seguicaso' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            'asignacaso' => ['leer', 'crear', 'editar', 'borrar', 'activar'],
            
            
        ];
        $cananyxx = [];
        foreach ($permisox[$dataxxxx['cananyxx']] as $key => $value) {
            $cananyxx[] = $dataxxxx['cananyxx'] . '-' . $value;
        }
        return $cananyxx;
    }

    public function setPestanias($dataxxxx)
    {
        $pestania['tipocaso'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'TIPO CASO',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
        $pestania['temacaso'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'TEMA CASO',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];

        $pestania['seguicaso'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'SEGUIMIENTO CASO',
            'tablaxxx' => 'sis_pais',
            'datablex' => [],
            'cananyxx' => $this->getCanany($dataxxxx),
        ];
      

        $pestania['asignacaso'] = [
            'routexxx' => '',
            'activexx' => '',
            'tituloxx' => 'ASIGNAR CASO',
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
            if ($value[0]) {
                $dataxxxx['cananyxx'] = $key;
                $dotosxxx = $this->setPestanias($dataxxxx);
                $dotosxxx['routexxx'] = route($key, $value[1]);
                $pestania[] = $dotosxxx;
            }
        }
        return $pestania;
    }
}
