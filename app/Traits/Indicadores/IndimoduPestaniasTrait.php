<?php

namespace App\Traits\Indicadores;

use Illuminate\Http\Request;

trait IndimoduPestaniasTrait
{
    public $pestania = [
        [
            'routexxx' => 'indiarea',
            'parametr' => [],
            'titupest' => 'PARAMETRIZACION',
            'muespest' => true,
            'activexx' => '',
            'tooltipx' => 'Parametrización de los indicadores',
            'cananyxx' => ['indiarea-leerxxxx'],
            'pesthija' => [
                [
                    'routexxx' => 'indiarea',
                    'disabled'=>'',
                    'parametr' => [],
                    'titupest' => 'ÁREAS',
                    'muespest' => true,
                    'activexx' => '',
                    'tooltipx' => 'Areas para asignar indicadores',
                    'cananyxx' => ['indiarea-leerxxxx'],
                ],
                [
                    'routexxx' => 'areaindi',
                    'disabled'=>'',
                    'parametr' => [],
                    'titupest' => 'INDICADORES',
                    'muespest' => false,
                    'activexx' => '',
                    'tooltipx' => 'Areas para asignar indicadores',
                    'cananyxx' => ['indiarea-leerxxxx'],
                ],
                [
                    'routexxx' => 'indiliba',
                    'disabled'=>'',
                    'parametr' => [],
                    'titupest' => 'LÍNEA BASE',
                    'muespest' => false,
                    'activexx' => '',
                    'tooltipx' => 'Areas para asignar indicadores',
                    'cananyxx' => ['indiarea-leerxxxx'],
                ],
                // [
                //     'routexxx' => 'indiarea',
                //     'disabled'=>'',
                //     'parametr' => [],
                //     'titupest' => 'DOCUMENTO FUENTE',
                //     'muespest' => false,
                //     'activexx' => '',
                //     'tooltipx' => 'Areas para asignar indicadores',
                //     'cananyxx' => ['indiarea-leerxxxx'],
                // ],
                [
                    'routexxx' => 'indiarea',
                    'disabled'=>'',
                    'parametr' => [],
                    'titupest' => 'GRUPO-LÍNEA BASE',
                    'muespest' => false,
                    'activexx' => '',
                    'tooltipx' => 'Areas para asignar indicadores',
                    'cananyxx' => ['indiarea-leerxxxx'],
                ],
                [
                    'routexxx' => 'indiarea',
                    'disabled'=>'',
                    'parametr' => [],
                    'titupest' => 'PREGUNTAS',
                    'muespest' => false,
                    'activexx' => '',
                    'tooltipx' => 'Areas para asignar indicadores',
                    'cananyxx' => ['indiarea-leerxxxx'],
                ],
                [
                    'routexxx' => 'indiarea',
                    'disabled'=>'',
                    'parametr' => [],
                    'titupest' => 'RESPUESTAS',
                    'muespest' => false,
                    'activexx' => '',
                    'tooltipx' => 'Areas para asignar indicadores',
                    'cananyxx' => ['indiarea-leerxxxx'],
                ],
            ],
        ],
        // [
        //     'routexxx' => 'parametr',
        //     'parametr' => [],
        //     'titupest' => 'VALORACIÓN INICIAL',
        //     'muespest' => true,
        //     'activexx' => '',
        //     'tooltipx' => 'Pregunta del documento que se esté',
        //     'cananyxx' => [],
        //     'pesthija' => [
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'ÁREAS',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'INDICADORES',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'LÍNEA BASE',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'DOCUMENTO FUENTE',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'GRUPO-LÍNEA BASE',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'PREGUNTAS',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'RESPUESTAS',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //     ],
        // ],
        // [
        //     'routexxx' => 'parametr',
        //     'parametr' => [],
        //     'titupest' => 'ACCIONES GESTIÓN',
        //     'muespest' => true,
        //     'activexx' => '',
        //     'tooltipx' => 'Respuestas asignadas al combo',
        //     'cananyxx' => [],
        //     'pesthija' => [
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'ÁREAS',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'INDICADORES',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'LÍNEA BASE',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'DOCUMENTO FUENTE',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'GRUPO-LÍNEA BASE',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'PREGUNTAS',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'RESPUESTAS',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //     ],
        // ],
        // [
        //     'routexxx' => 'parametr',
        //     'parametr' => [],
        //     'titupest' => 'VALORACIÓN',
        //     'muespest' => true,
        //     'activexx' => '',
        //     'tooltipx' => 'Respuestas para asignar',
        //     'cananyxx' => [],
        //     'pesthija' => [
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'ÁREAS',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'INDICADORES',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'LÍNEA BASE',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'DOCUMENTO FUENTE',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'GRUPO-LÍNEA BASE',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'PREGUNTAS',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //         [
        //             'routexxx' => 'indiarea',
        //             'parametr' => [],
        //             'titupest' => 'RESPUESTAS',
        //             'muespest' => true,
        //             'activexx' => '',
        //             'tooltipx' => 'Areas para asignar indicadores',
        //             'cananyxx' => ['indiarea-leerxxxx'],
        //         ],
        //     ],
        // ],
    ];


    /**
     * armar la estructura principal de una pestaña
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    public function getArmarPestania($dataxxxx)
    {

        foreach ( $dataxxxx['pesthija'] as $key => $value) {

            if($value['muespest']){
              $dataxxxx['pesthija'][$key]['routexxx']= route($value['routexxx'], $value['parametr']);
            }else {
                $dataxxxx['pesthija'][$key]['routexxx']='#';
                $dataxxxx['pesthija'][$key]['disabled']='disabled';
            }

        }
        $respuest = [
            'muespest' => false, // indica si se mustra o no
            'pestania' => [
                'routexxx' => route($dataxxxx['routexxx'], $dataxxxx['parametr']), // ruta que tiene la pestaña
                'activexx' => $dataxxxx['activexx'], // clase que activa la pestaña cuando se esté en ella
                'titupest' => $dataxxxx['titupest'], // titulo con el que se identifica la pestanña
                'tooltipx' => $dataxxxx['tooltipx'], // Ayuda para la pestaña
                'cananyxx' => $dataxxxx['cananyxx'],
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
                $respuest[] = $this->getArmarPestania($valuexxx);
            }
        }

        return $respuest;
    }
    public function getPestanias($dataxxxx)
    {
        $this->opciones['pestania']  = $this->getArmarPestanias($dataxxxx);
    }
}
