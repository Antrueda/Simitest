<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiRazoneArchivoCrearRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiRazone;
use App\Models\Tema;
use App\Models\User;
use App\Models\fichaIngreso\FiDocumentosAnexa;
use App\Models\Sistema\SisEsta;
use Illuminate\Support\Facades\Auth;

class FiRazonArchivoController extends Controller
{

    private $opciones;

    public function __construct()
    {

        $this->opciones['permisox'] = 'fiarchiv';
        $this->opciones['routxxxx'] = 'fiarchiv';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Razones';
        $this->opciones['slotxxxx'] = 'firazones';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "CONTACTO CON IDPRON Y TRATAMIENTO DE DATOS";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
            $this->opciones['botoform'][] = [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['firazones.nuevo', []],
                'formhref' => 2, 'tituloxx' => "VOLVER A RAZONES", 'clasexxx' => 'btn btn-sm btn-primary'
            ];
    }

    private function view($dataxxxx)
    {
        $padrexxx = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['botoform'][0]['routingx'][1]=$padrexxx->id;
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $padrexxx;
        $this->opciones['pestpara'] = [$padrexxx->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'],
        ];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        $this->opciones['usuarios'] = User::combo(true, false);
        $this->opciones['archivox']='';

        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        // indica si se esta actualizando o viendo
        $dataxxxy = ['razonesx' => $dataxxxx['padrexxx'], 'selected' => '', 'temaxxxx' => 155, 'cabecera' => false, 'ajaxxxxx' => false];
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxy['selected'] = $dataxxxx['modeloxx']->i_prm_documento_id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            foreach (explode('/', $dataxxxx['modeloxx']->s_ruta) as $value) {
                $this->opciones['archivox'] = $value;
            }
        }

        $this->opciones['tablasxx'] = [
            [
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'titunuev' => 'CREAR DOCUMENTO',
                'titulist' => 'LISTA DE DOCUMENTOS',
                'dataxxxx' => [],
                'vercrear' => false,
                'urlxxxxx' => route('firazones.listaxxx', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 250, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1,],
                        ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fi_documentos_anexas.id'],
                    ['data' => 'nombre', 'name' => 'parametros.nombre'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    
                ],
                'tablaxxx' => 'datatablearchivos',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [$dataxxxx['padrexxx']->id],
            ],
        ];
        $this->opciones['docanexa'] = FiDocumentosAnexa::comboTema($dataxxxy);
        $this->opciones['estaingr'] = Tema::combo(303, true, false);
        $this->opciones['docuanex'] = FiRazone::getDocumento($dataxxxx['modeloxx']);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FiRazone $padrexxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'archivo'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx)
    {
        
        return redirect()
            ->route($this->opciones['permisox'] . '.editar', [
                FiDocumentosAnexa::transaccion($dataxxxx)->id
            ])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FiRazoneArchivoCrearRequest $request, FiRazone $padrexxx)
    {
        $request->request->add(['fi_razone_id' => $padrexxx->id]);
        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Razones para ingreso creados creada con exito'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiRazone  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDocumentosAnexa $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'archivo'], 'padrexxx' => $modeloxx->fi_razone]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiRazone  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDocumentosAnexa $modeloxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'archivo'], 'padrexxx' => $modeloxx->fi_razone]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiRazone  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiRazoneArchivoCrearRequest $request, FiDocumentosAnexa $modeloxx)
    {
        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Documento actualizado con exito'
        ]);
    }

    public function inactivate(FiDocumentosAnexa $modeloxx)
    {

        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'], 'padrexxx' => $modeloxx->fi_razone]);
    }
    public function destroy(FiDocumentosAnexa $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('firazones.nuevo', [$modeloxx->fi_razone->sis_nnaj->fi_datos_basico->id])
            ->with('info', 'Documento inactivado correctamente');
    }
}
