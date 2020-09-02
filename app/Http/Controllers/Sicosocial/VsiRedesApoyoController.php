<?php

namespace App\Http\Controllers\Sicosocial;
use App\Http\Controllers\Controller;

use App\Http\Requests\Vsi\VsiRedSocialCrearRequest;
use App\Http\Requests\Vsi\VsiRedSocialEditarRequest;
use App\Models\sicosocial\VsiRedSocial;
use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;

class VsiRedesApoyoController extends Controller
{
    use VsiTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsiredes',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'REDES SOCIALES DE APOYO',
            'carpetax' => 'Redsocial',
            'slotxxxx' => 'vsiredes',
            'tablaxxx' => 'datatable',
            'indecrea' => false, // false muestra las pestañas
            'esindexx' => false,
            'tituhead' => '',
            'fechcrea' => '',
            'fechedit' => '',
            'usercrea' => '',
            'useredit' => '',
            'conperfi' => '', // indica si la vista va a tener perfil
            'usuariox' => [],
            'rutaxxxx' => 'vsiredes',
            'routnuev' => 'vsiredes',
            'routxxxx' => 'vsiredes',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }

    private function view($dataxxxx)
    {
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
        $dataxxxx['padrexxx'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['sinoxxxx'] = Tema::combo(23, true, false);
        $this->opciones['personax'] = Tema::combo(70, true, false);
        $this->opciones['accesoxx'] = Tema::combo(71, true, false);
        $this->opciones['motivosx'] = Tema::combo(72, true, false);
        $this->opciones['venefici'] = Tema::combo(59, true, false);

        $this->opciones['tiempoxx'] = Tema::combo(4, false, false);
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->name;

        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        $this->opciones['archivox']='';
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            foreach (explode('/', $dataxxxx['modeloxx']->s_doc_adjunto) as $value) {
                $this->opciones['archivox'] = $value;
            }

            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 3;
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
        }

        $this->opciones['rowscols'] = 'rowspancolspan';
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR RED ACTUAL',
                'titulist' => 'LISTA DE REDES ACTUALES',
                'dataxxxx' => ['campoxxx' => 'padrexxx', 'dataxxxx' => $this->opciones['vsixxxxx']->id],
                'relacion' => '',
                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => route('vsiredac', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'TIPO DE RED', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'NOMBRE PERSONA/INSTITUCION', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'SERVICIO O VENEFICIO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'DATOS DE CONTACTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 2],


                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                    ],
                    [
                        ['td' => 'TELEFONO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DIRECCION', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ]

                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'vsi_redsoc_actuals.id'],
                    ['data' => 'tiporedx', 'name' => 'tiporedx.nombre as tiporedx'],
                    ['data' => 'nombre', 'name' => 'vsi_redsoc_actuals.nombre'],
                    ['data' => 'servicio', 'name' => 'vsi_redsoc_actuals.servicio'],
                    ['data' => 'telefono', 'name' => 'vsi_redsoc_actuals.telefono'],
                    ['data' => 'direccion', 'name' => 'vsi_redsoc_actuals.direccion'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatableactual',
                'permisox' => 'vsiredac',
                'routxxxx' => 'vsiredac',
                'parametr' => $this->opciones['parametr'],
            ],
            [
                'titunuev' => 'CREAR ANTECEDENTE INSTITUCIONAL',
                'titulist' => 'LISTA DE ANTECEDENTES INSTITUCIONALES',
                'dataxxxx' => ['campoxxx' => 'padrexxx', 'dataxxxx' => $this->opciones['vsixxxxx']->id],
                'relacion' => '7.2. Antecedentes Institucionales',
                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => route('vsiredpa', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ENTIDAD-PERSONA', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'SERVICIOS O BENEFICIOS RECIBIDOS', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'DURANTE CUANTO TIEMPO?', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 3],

                        ['td' => 'AñO PRESTACION DEL SERVICIO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                    ],
                    [
                        ['td' => 'DIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'MES', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'AñO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ]

                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'vsi_redsoc_pasados.id'],
                    ['data' => 'servicio', 'name' => 'vsi_redsoc_pasados.servicio'],
                    ['data' => 'nombre', 'name' => 'vsi_redsoc_pasados.nombre'],
                    ['data' => 'dia', 'name' => 'vsi_redsoc_pasados.dia'],
                    ['data' => 'mes', 'name' => 'vsi_redsoc_pasados.mes'],
                    ['data' => 'ano', 'name' => 'vsi_redsoc_pasados.ano'],
                    ['data' => 'ano_prestacion', 'name' => 'vsi_redsoc_pasados.ano_prestacion'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablepasado',
                'permisox' => 'vsiredpa',
                'routxxxx' => 'vsiredpa',
                'parametr' => $this->opciones['parametr'],
            ]

        ];


        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Vsi $padrexxx)
    {
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$padrexxx->id]],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => 'Crear', 'padrexxx' => $padrexxx]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VsiRedSocialCrearRequest $requestx, $padrexxx)
    {
        $requestx->vsi_id = $padrexxx;
        return $this->grabar([
            'requestx' => $requestx,
            'modeloxx' => '',
            'menssage' => 'Registro creado con éxito'
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(VsiRedSocial $objetoxx)
    {

        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->vsi_id];
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx->vsi]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [VsiRedSocial::transaccion($dataxxxx)->id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VsiRedSocialEditarRequest $requestx, VsiRedSocial $objetoxx)
    {


        return $this->grabar([
            'requestx' => $requestx,
            'modeloxx' => $objetoxx,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }
}
