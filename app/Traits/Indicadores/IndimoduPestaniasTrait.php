<?php

namespace App\Traits\Indicadores;

use App\Models\Permissionext;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

trait IndimoduPestaniasTrait
{
    private $routexxx = null;
    private $titupest = null;
    private $tooltipx = null;



    /**
     * Armar la base de la pestaña
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    private function setPestania()
    {
        $respuest = [
            'routexxx' => $this->routexxx,
            'disabled' => true,
            'parametr' => [],
            'titupest' => $this->titupest,
            'muespest' => false,
            'checkxxx' => false,
            'checkxxy' => false,
            'activexx' => false,
            'tooltipx' => $this->tooltipx,
        ];
        return $respuest;
    }

    public function getPestaniaGeneral()
    {


        // * PESTAÑAS DE LA PARAMETRIZACION DE LOS INDICADORES
        // * pestania padre
        $this->routexxx = 'indiarea';
        $this->titupest = 'ADMINISTRACIÓN';
        $this->tooltipx = 'Parametrización de los indicadores';
        $pestania['indimodu'] = $this->setPestania();
        // * pestania hija
        $this->routexxx = 'indiarea';
        $this->titupest = 'ÁREAS';
        $this->tooltipx = 'Areas para asignar indicadores';
        $pestania['indimodu']['pesthija'][$this->routexxx] = $this->setPestania();
        // * pestania hija
        $this->routexxx = 'indicado';
        $this->titupest = 'INDICADORES';
        $this->tooltipx = 'Indicadores para asignar línea base';
        $pestania['indimodu']['pesthija'][$this->routexxx] = $this->setPestania();
        // * pestania hija
        $this->routexxx = 'indiliba';
        $this->titupest = 'LÍNEA BASE';
        $this->tooltipx = 'Líneas base para asignar grupos';
        $pestania['indimodu']['pesthija'][$this->routexxx] = $this->setPestania();
        // * pestania hija
        $this->routexxx = 'libagrup';
        $this->titupest = 'GRUPO-LÍNEA BASE';
        $this->tooltipx = 'Grupos para asignar preguntas';
        $pestania['indimodu']['pesthija'][$this->routexxx] = $this->setPestania();
        // * pestania hija
        $this->routexxx = 'grupregu';
        $this->titupest = 'PREGUNTAS';
        $this->tooltipx = 'Preguntas para asignar respuestas';
        $pestania['indimodu']['pesthija'][$this->routexxx] = $this->setPestania();
        // * pestania hija
        $this->routexxx = 'pregresp';
        $this->titupest = 'RESPUESTAS';
        $this->tooltipx = 'Respuestas';
        $pestania['indimodu']['pesthija'][$this->routexxx] = $this->setPestania();
        // * PESTAÑAS DE VALORACIÓN INICIAL
        // * pestania padre
        // $this->routexxx = 'indiarea';
        // $this->titupest = 'VALORACIÓN INICIAL';
        // $this->tooltipx = 'Parametrización de los indicadores';
        // $pestania['invalini'] = $this->setPestania();
        // // * pestania hija
        // $this->routexxx = 'indiarea';
        // $this->titupest = 'ÁREAS';
        // $this->tooltipx = 'Areas para asignar indicadores';
        // $pestania['invalini']['pesthija'][$this->routexxx] = $this->setPestania();

        // // * ACCIONES GESTIÓN
        // // * pestania padre
        // $this->routexxx = 'indiarea';
        // $this->titupest = 'ACCIÓN GETIÓN';
        // $this->tooltipx = 'Parametrización de los indicadores';
        // $pestania['inaccges'] = $this->setPestania();
        // // * pestania hija
        // $this->routexxx = 'indiarea';
        // $this->titupest = 'ÁREAS';
        // $this->tooltipx = 'Areas para asignar indicadores';
        // $pestania['inaccges']['pesthija'][$this->routexxx] = $this->setPestania();

        // // * ACCIONES GESTIÓN
        // // * pestania padre
        // $this->routexxx = 'indiarea';
        // $this->titupest = 'VALORACIÓN';
        // $this->tooltipx = 'Parametrización de los indicadores';
        // $pestania['invalora'] = $this->setPestania();
        // // * pestania hija
        // $this->routexxx = 'indiarea';
        // $this->titupest = 'ÁREAS';
        // $this->tooltipx = 'Areas para asignar indicadores';
        // $pestania['invalora']['pesthija'][$this->routexxx] = $this->setPestania();
        return $pestania;
    }
    public $pestania = [];

    /**
     * armar la estructura principal de una pestaña
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    public function getArmarPestania($dataxxxx, $campoxxx)
    {
        if (!$dataxxxx['disabled']) {
            foreach ($dataxxxx['pesthija'] as $key => $value) {
                $dataxxxx['pesthija'][$key]['cananyxx'] = Permission::where('name', 'like', $value['routexxx'] . '%')->get('name')->toArray();
                if ($value['muespest']) {
                    $dataxxxx['pesthija'][$key]['routexxx'] = route($value['routexxx'], $value['parametr']);
                } else {
                    $dataxxxx['pesthija'][$key]['routexxx'] = '#';
                }
            }
        }
        $dataxxxx['pesthija'] = !$dataxxxx['disabled'] ? $dataxxxx['pesthija'] : [];
        $dataxxxx['cananyxx'] = Permission::where('name', 'like', $campoxxx . '%')
            ->get('name')
            ->toArray();
        $dataxxxx['routexxx'] = !$dataxxxx['disabled'] ? route($dataxxxx['routexxx'], $dataxxxx['parametr']) : '';


        return $dataxxxx;
    }
    /**
     * armar las pestañas que va a tener el módulo
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    public function getArmarPestanias($dataxxxx)
    {

        $respuest = [];
        foreach ($this->pestania as $key => $valuexxx) {
            if ($valuexxx['muespest']) {
                $respuest[$key] = $this->getArmarPestania($valuexxx, $key);
            }
        }

        return $respuest;
    }

    public function setDatoPestania($tipoxxxx, $campoxxx, $datoxxxx)
    {
        $this->pestania[$this->opciones['pestpadr']]['pesthija'][$tipoxxxx][$campoxxx] = $datoxxxx;
    }
    private function getActivar($dataxxxx)
    {

        $this->setDatoPestania($dataxxxx['tipoxxxx'], 'activexx', true);
        foreach ($dataxxxx['pestania'] as $key => $value) {
            $this->setDatoPestania($value[0], 'parametr', $value[1]); // le pasa el/los parámetro(s) que necesita el route
        }
    }

    private function setDisabled($dataxxxx)
    {
        foreach ($dataxxxx['disablex'] as $key => $value) {
            $this->setDatoPestania($value[0], 'muespest', $value[1]); // habilitar que se muestra la pestania
            $this->setDatoPestania($value[0], 'disabled', $value[2]); // habilitar la pestaña hija
        }
        return $dataxxxx;
    }

    private function getActivaIndicador($dataxxxx)
    {

        $dataxxxx['pestania'] = [];
        $dataxxxx['pestania'][] = ['indicado', [$this->padrexxx->id]];
        $this->getActivar($dataxxxx);
        $dataxxxx['disablex'] = [['indiarea', true, false], ['indicado', true, false]];
        $this->setDisabled($dataxxxx);
    }

    private function getActivaLineaBase($dataxxxx)
    {
        $dataxxxx['pestania'] = [];
        $dataxxxx['pestania'][] = ['indicado', [$this->padrexxx->area_id]];
        $dataxxxx['pestania'][] = ['indiliba', [$this->padrexxx->id]];
        $this->getActivar($dataxxxx);
        $dataxxxx['disablex'] = [['indiarea', true, false], ['indicado', true, false], ['indiliba', true, false]];
        $this->setDisabled($dataxxxx);
    }
    private function getActivaGraupo($dataxxxx)
    {
        $dataxxxx['pestania'] = [];
        $dataxxxx['pestania'][] = ['indicado', [$this->padrexxx->inAreaindi->area_id]];
        $dataxxxx['pestania'][] = ['indiliba', [$this->padrexxx->in_areaindi_id]];
        $dataxxxx['pestania'][] = ['libagrup', [$this->padrexxx->id]];
        $this->getActivar($dataxxxx);
        $dataxxxx['disablex'] = [
            ['indiarea', true, false],
            ['indicado', true, false],
            ['indiliba', true, false],
            ['libagrup', true, false],
        ];
        $this->setDisabled($dataxxxx);
    }

    private function getActivaPregunta($dataxxxx)
    {
        $dataxxxx['pestania'] = [];
        $dataxxxx['pestania'][] = ['indicado', [$this->padrexxx->inIndiliba->inAreaindi->area_id]];
        $dataxxxx['pestania'][] = ['indiliba', [$this->padrexxx->inIndiliba->in_areaindi_id]];
        $dataxxxx['pestania'][] = ['libagrup', [$this->padrexxx->in_indiliba_id]];
        $dataxxxx['pestania'][] = ['grupregu', [$this->padrexxx->id]];
        $this->getActivar($dataxxxx);
        $dataxxxx['disablex'] = [
            ['indiarea', true, false],
            ['indicado', true, false],
            ['indiliba', true, false],
            ['libagrup', true, false],
            ['grupregu', true, false],
        ];
        $this->setDisabled($dataxxxx);
    }

    private function getActivaRespusta($dataxxxx)
    {
        $dataxxxx['pestania'] = [];
        $dataxxxx['pestania'][] = ['indicado', [$this->padrexxx->inLibagrup->inIndiliba->inAreaindi->area_id]];
        $dataxxxx['pestania'][] = ['indiliba', [$this->padrexxx->inLibagrup->inIndiliba->in_areaindi_id]];
        $dataxxxx['pestania'][] = ['libagrup', [$this->padrexxx->inLibagrup->in_indiliba_id]];
        $dataxxxx['pestania'][] = ['grupregu', [$this->padrexxx->in_libagrup_id]];
        $dataxxxx['pestania'][] = ['pregresp', [$this->padrexxx->id]];
        $this->getActivar($dataxxxx);
        $dataxxxx['disablex'] = [
            ['indiarea', true, false],
            ['indicado', true, false],
            ['indiliba', true, false],
            ['libagrup', true, false],
            ['grupregu', true, false],
            ['pregresp', true, false],
        ];
        $this->setDisabled($dataxxxx);
    }
    private function setModulo($dataxxxx)
    {
        foreach ($dataxxxx['moduloxx'] as $key => $value) {
            $this->pestania[$value[0]]['muespest'] = $value[1];
            $this->pestania[$value[0]]['disabled'] = $value[2];
        }
    }

    public function getModulo($dataxxxx)
    {
        $dataxxxx['moduloxx'] = [];
        $dataxxxx['moduloxx'][] = ['indimodu', true, false];
        // $dataxxxx['moduloxx'][] = ['invalini', true, false];
        // $dataxxxx['moduloxx'][] = ['inaccges', true, true];
        // $dataxxxx['moduloxx'][] = ['invalora', true, true];
        return $dataxxxx;
    }
    private function getParametrizar($dataxxxx)
    {
        $this->setModulo($this->getModulo($dataxxxx));
        $dataxxxx['pestania'] = 'indimodu';
        if (!isset($dataxxxx['tipoxxxx'])) {
            $dataxxxx['tipoxxxx'] = '';
        }
        // ddd($dataxxxx['tipoxxxx']);
        switch ($dataxxxx['tipoxxxx']) {
            // case 'indimodu':
            // $this->setDatoPestania($dataxxxx['tipoxxxx'], 'muespest', true);
            // $this->setDatoPestania($dataxxxx['tipoxxxx'], 'activexx', true);
            // break;
            case 'indiarea':
                $this->setDatoPestania($dataxxxx['tipoxxxx'], 'muespest', true);
                $this->setDatoPestania($dataxxxx['tipoxxxx'], 'activexx', true);
                break;
            case 'indicado':
                $this->getActivaIndicador($dataxxxx);
                break;
            case 'indiliba':
                $this->getActivaLineaBase($dataxxxx);
                break;
            case 'libagrup':
                $this->getActivaGraupo($dataxxxx);
                break;
            case 'grupregu':
                $this->getActivaPregunta($dataxxxx);
                break;
            case 'pregresp':
                $this->getActivaRespusta($dataxxxx);
                break;
        }
    }

    public function getPermisos()
    {
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'inadmini-moduloxx', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'indimodu-moduloxx', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'invalini-moduloxx', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'inaccges-moduloxx', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        Permissionext::create(['sis_esta_id' => 1, 'name' => 'invalora-moduloxx', 'descripcion' => 'dd', 'guard_name' => 'web', 'sis_pestania_id' => 2]);
        $role = Role::find(1);
        $role->givePermissionTo([
            'inadmini-moduloxx',
            'indimodu-moduloxx',
            'invalini-moduloxx',
            'inaccges-moduloxx',
            'invalora-moduloxx',
        ]);
    }
    public function getPestanias($dataxxxx)
    {
        // $this->getPermisos();
        $this->pestania = $this->getPestaniaGeneral();

        switch ($this->opciones['pestpadr']) {
            case 'indimodu':
                $this->pestania[$this->opciones['pestpadr']]['activexx'] = true;
                $this->opciones['vistaxxx'] = 'indiadmi';
                $this->getParametrizar($dataxxxx);
                break;
            default:
                # code...
                break;
        }
        // ddd($this->pestania);
        // $this->getParametrizar($dataxxxx);
        $this->opciones['pestania']  = $this->getArmarPestanias($dataxxxx);
        // ddd($this->opciones['pestania']);
    }
}
