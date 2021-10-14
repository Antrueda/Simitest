<?php

namespace App\Traits\Indicadores;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

trait IndimoduPestaniasTrait
{
    public $pestania = [
        'inadmini' => [
            'routexxx' => 'indiarea',
            'parametr' => [],
            'titupest' => 'ADMINISTRACIÓN',
            'muespest' => true,
            'activexx' => '',
            'tooltipx' => 'Parametrización de los indicadores',
            'pesthija' => [
                [
                    'routexxx' => 'indiarea',
                    'disabled' => '',
                    'parametr' => [],
                    'titupest' => 'ÁREAS',
                    'muespest' => true,
                    'checkxxx' => true,
                    'activexx' => '',
                    'tooltipx' => 'Areas para asignar indicadores',
                ],

            ]
        ],
        'inparame' => [
            'routexxx' => 'indiarea',
            'parametr' => [],
            'titupest' => 'PARAMETRIZACION',
            'muespest' => true,
            'activexx' => '',
            'tooltipx' => 'Parametrización de los indicadores',
            'pesthija' => [
                [
                    'routexxx' => 'indiarea',
                    'disabled' => '',
                    'parametr' => [],
                    'titupest' => 'ÁREAS',
                    'muespest' => true,
                    'checkxxx' => true ,
                    'checkxxy' => false,
                    'activexx' => '',
                    'tooltipx' => 'Areas para asignar indicadores',
                ],
                [
                    'routexxx' => 'areaindi',
                    'disabled' => '',
                    'parametr' => [],
                    'titupest' => 'INDICADORES',
                    'muespest' => false,
                    'checkxxx' => false,
                    'checkxxy' => false,
                    'activexx' => '',
                    'tooltipx' => 'Indicadores para asignar línea base',
                ],
                [
                    'routexxx' => 'indiliba',
                    'disabled' => '',
                    'parametr' => [],
                    'titupest' => 'LÍNEA BASE',
                    'muespest' => false,
                    'checkxxx' => false,
                    'checkxxy' => false,
                    'activexx' => '',
                    'tooltipx' => 'Líneas base para asignar grupos',
                ],
                [
                    'routexxx' => 'libagrup',
                    'disabled' => '',
                    'parametr' => [],
                    'titupest' => 'GRUPO-LÍNEA BASE',
                    'muespest' => false,
                    'checkxxx' => false,
                    'checkxxy' => false,
                    'activexx' => '',
                    'tooltipx' => 'Grupos para asignar preguntas',
                ],
                [
                    'routexxx' => 'grupregu',
                    'disabled' => '',
                    'parametr' => [],
                    'titupest' => 'PREGUNTAS',
                    'muespest' => false,
                    'checkxxx' => false,
                    'checkxxy' => false,
                    'activexx' => '',
                    'tooltipx' => 'Preguntas para asignar respuestas',
                ],
                [
                    'routexxx' => 'pregresp',
                    'disabled' => '',
                    'parametr' => [],
                    'titupest' => 'RESPUESTAS',
                    'muespest' => false,
                    'checkxxx' => false,
                    'checkxxy' => false,
                    'activexx' => '',
                    'tooltipx' => 'Respuestas',
                ],
            ]
        ],
        'invalini' => [
            'routexxx' => 'indiarea',
            'parametr' => [],
            'titupest' => 'VALORACIÓN INICIAL',
            'muespest' => true,
            'activexx' => '',
            'tooltipx' => 'Parametrización de los indicadores',
            'pesthija' => [
                [
                    'routexxx' => 'indiarea',
                    'disabled' => '',
                    'parametr' => [],
                    'titupest' => 'ÁREAS',
                    'muespest' => true,
                    'checkxxx' => true,
                    'activexx' => '',
                    'tooltipx' => 'Areas para asignar indicadores',
                ],

            ]
        ],
        'inaccges' => [
            'routexxx' => 'indiarea',
            'parametr' => [],
            'titupest' => 'ACCIONES GESTIÓN',
            'muespest' => true,
            'activexx' => '',
            'tooltipx' => 'Parametrización de los indicadores',
            'pesthija' => [
                [
                    'routexxx' => 'indiarea',
                    'disabled' => '',
                    'parametr' => [],
                    'titupest' => 'ÁREAS',
                    'muespest' => true,
                    'checkxxx' => true,
                    'activexx' => '',
                    'tooltipx' => 'Areas para asignar indicadores',
                ],

            ]
        ],
        'invalora' => [
            'routexxx' => 'indiarea',
            'parametr' => [],
            'titupest' => 'VALORACIÓN',
            'muespest' => true,
            'activexx' => '',
            'tooltipx' => 'Parametrización de los indicadores',
            'pesthija' => [
                [
                    'routexxx' => 'indiarea',
                    'disabled' => '',
                    'parametr' => [],
                    'titupest' => 'ÁREAS',
                    'muespest' => true,
                    'checkxxx' => true,
                    'activexx' => '',
                    'tooltipx' => 'Areas para asignar indicadores',
                ],

            ]
        ],
    ];

    /**
     * armar la estructura principal de una pestaña
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    public function getArmarPestania($dataxxxx)
    {

        foreach ($dataxxxx['pesthija'] as $key => $value) {
            $dataxxxx['pesthija'][$key]['cananyxx'] = Permission::where('name', 'like', $value['routexxx'] . '%')->get('name')->toArray();
            if ($value['muespest']) {
                $dataxxxx['pesthija'][$key]['routexxx'] = route($value['routexxx'], $value['parametr']);
            } else {
                $dataxxxx['pesthija'][$key]['routexxx'] = '#';
                $dataxxxx['pesthija'][$key]['disabled'] = 'disabled';
            }
        }
        $respuest = [
            'muespest' => false, // indica si se mustra o no
            'pestania' => [
                'routexxx' => route($dataxxxx['routexxx'], $dataxxxx['parametr']), // ruta que tiene la pestaña
                'activexx' => $dataxxxx['activexx'], // clase que activa la pestaña cuando se esté en ella
                'titupest' => $dataxxxx['titupest'], // titulo con el que se identifica la pestanña
                'tooltipx' => $dataxxxx['tooltipx'], // Ayuda para la pestaña
                'cananyxx' => Permission::where('name', 'like', $dataxxxx['routexxx'] . '%')->get('name')->toArray(),
                'pesthija' => $dataxxxx['pesthija'],
            ]
        ];
        return $respuest;
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
                $respuest[$key] = $this->getArmarPestania($valuexxx);
            }
        }

        return $respuest;
    }
    private function getActivar($padrexxx, $desdexxx, $hastaxxx)
    {
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['activexx'] = 'active';
        for ($i = $desdexxx; $i <= $hastaxxx; $i++) {
            $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$i]['muespest'] = true;
        }
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx]['activexx'] = 'active';
    }
    private function getActivaIndicador($dataxxxx)
    {
        $padrexxx = 0;
        $desdexxx = 1;
        $hastaxxx = $dataxxxx['tipoxxxx'];
        $this->getActivar($padrexxx, $desdexxx, $hastaxxx);
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx]['parametr'] = [$this->padrexxx->id];
        $this->opciones['vistaxxx'] = 'indiadmi';
    }

    private function getActivaLineaBase($dataxxxx)
    {
        $padrexxx = 0;
        $hastaxxx = $dataxxxx['tipoxxxx'];
        $this->getActivar($padrexxx, 1, $hastaxxx);
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx - 1]['parametr'] = [$this->padrexxx->area_id];
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx]['parametr'] = [$this->padrexxx->id];
        $this->opciones['vistaxxx'] = 'indiadmi';
    }
    private function getActivaGraupo($dataxxxx)
    {
        $padrexxx = 0;
        $hastaxxx = $dataxxxx['tipoxxxx'];
        $this->getActivar($padrexxx, 1, $hastaxxx);
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx - 1]['parametr'] = [$this->padrexxx->inAreaindi->area_id];
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx - 2]['parametr'] = [$this->padrexxx->in_areaindi_id];
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx]['parametr'] = [$this->padrexxx->id];
        $this->opciones['vistaxxx'] = 'indiadmi';
    }

    private function getActivaPregunta($dataxxxx)
    {
        $padrexxx = 0;
        $hastaxxx = $dataxxxx['tipoxxxx'];
        $this->getActivar($padrexxx, 1, $hastaxxx);

        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx - 3]['parametr'] = [$this->padrexxx->inIndiliba->inAreaindi->area_id];
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx - 2]['parametr'] = [$this->padrexxx->inIndiliba->in_areaindi_id];
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx - 1]['parametr'] = [$this->padrexxx->in_indiliba_id];
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx]['parametr'] = [$this->padrexxx->id];
        $this->opciones['vistaxxx'] = 'indiadmi';
    }

    private function getActivaRespusta($dataxxxx)
    {
        $padrexxx = 0;
        $hastaxxx = $dataxxxx['tipoxxxx'];
        $this->getActivar($padrexxx, 1, $hastaxxx);
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx - 4]['parametr'] = [$this->padrexxx->inLibagrup->inIndiliba->inAreaindi->area_id];
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx - 3]['parametr'] = [$this->padrexxx->inLibagrup->inIndiliba->in_areaindi_id];
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx - 2]['parametr'] = [$this->padrexxx->inLibagrup->in_indiliba_id];
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx - 1]['parametr'] = [$this->padrexxx->in_libagrup_id];
        $this->pestania[ $this->opciones['pestpadr']][$padrexxx]['pesthija'][$hastaxxx]['parametr'] = [$this->padrexxx->id];
        $this->opciones['vistaxxx'] = 'indiadmi';
    }

    private function getParametrizar($dataxxxx)
    {
        $dataxxxx['pestania']='inparame';
        if (!isset($dataxxxx['tipoxxxx'])) {
            $dataxxxx['tipoxxxx'] = '';
        }

        switch ($dataxxxx['tipoxxxx']) {
            case 1:
                $this->getActivaIndicador($dataxxxx);
                break;
            case 2:
                $this->getActivaLineaBase($dataxxxx);
                break;
            case 3:
                $this->getActivaGraupo($dataxxxx);
                break;
            case 4:
                $this->getActivaPregunta($dataxxxx);
                break;
            case 5:
                $this->getActivaRespusta($dataxxxx);
                break;
        }
    }
    public function getPestanias($dataxxxx)
    {
        switch ($this->opciones['pestpadr']) {
            case 'inparame':
                $this->pestania[$this->opciones['pestpadr']]['activexx']='active';
                $this->getParametrizar($dataxxxx);
                break;
            default:
                # code...
                break;
        }
        $this->getParametrizar($dataxxxx);
        $this->opciones['pestania']  = $this->getArmarPestanias($dataxxxx);
        // ddd($this->opciones['pestania']);

    }
}
