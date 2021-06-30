<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdRedApoyoAntecedenteCrearRequest;
use App\Http\Requests\Csd\CsdRedApoyoAntecedenteEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdRedsocPasado;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisEntidad;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Csd\CsdTrait;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CsdRedesApoyoController extends Controller
{
    use CsdTrait;
    use PuedeTrait;
    private $opciones;
    public function __construct()
    {
        $this->opciones['permisox'] = 'csdredesapoyo';
        $this->opciones['routxxxx'] = 'csdredesapoyo';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Redapoyo';
        $this->opciones['slotxxxx'] = 'csdredesapoyo';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "REDES DE APOYO";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['tipotiem'] = Tema::comboAsc(4, true, false);
        $this->opciones['anioserv'] = Tema::comboAsc(84, true, false);
        $this->opciones['sexoxxxx'] = Tema::comboAsc(84, true, false);
        $this->opciones['endidadx'] = SisEntidad::combo(true, false);

        $this->opciones['botoform'][] = [
            'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
            'formhref' => 2, 'tituloxx' => "VOLVER A REDES DE APOYO", 'clasexxx' => 'btn btn-sm btn-primary'
        ];
    }
    public function index(CsdSisNnaj $padrexxx)
    {

        $this->opciones['csdxxxxx']=$padrexxx;
       $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];

        $this->opciones['pestpara'] = [$padrexxx->id];
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR ANTECEDENTE INSTITUCIONAL',
                'titulist' => 'LISTA DE ANTECEDENTES INSTITUCIONALES',
                'dataxxxx' => [],
                'vercrear' => true,
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.redes',
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.antecede', [$padrexxx->id]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1,],
                        ['td' => 'ENTIDAD', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SERVICIOS O BENEFICIOS RECIBIDOS', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TIEMPO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TIPO TIEMPO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'AÑO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'csd_redsoc_pasados.id'],
                    ['data' => 'nombre', 'name' => 'sis_entidads.nombre'],
                    ['data' => 'servicios', 'name' => 'servicios'],
                    ['data' => 'cantidad', 'name' => 'csd_redsoc_pasados.cantidad'],
                    ['data' => 'tipotiem', 'name' => 'tiempo.nombre as tipotiem'],
                    ['data' => 'ano', 'name' => 'csd_redsoc_pasados.ano'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatableantecedentes',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [$padrexxx->id],
            ],
            [
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.redes',
                'titunuev' => 'CREAR RED DE APOYO',
                'titulist' => 'LISTA DE REDES DE APOYO ACTUALES',
                'dataxxxx' => [],
                'vercrear' => true,
                'urlxxxxx' => route( 'csdredactual.redactua', [$padrexxx->id]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1,],
                        ['td' => 'TIPO DE RED', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'NOMBRE PERSONA/INSTITUCIÓN', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SERVICIOS O BENEFICIOS', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TELÉFONOS', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DIRECCIÓN', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name'          => 'csd_redsoc_actuals.id'],
                    ['data' => 'redxxxxx', 'name'      => 'red.nombre'],
                    ['data' => 'nombre', 'name'      => 'nombre'],
                    ['data' => 'servicios', 'name'  => 'servicios'],
                    ['data' => 'telefono', 'name'  => 'telefono'],
                    ['data' => 'direccion', 'name'  => 'direccion'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatableredesactuales',
                'permisox' => 'csdredactual',
                'routxxxx' => 'csdredactual',
                'parametr' => [$padrexxx->id],
            ],
        ];
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['usuariox'] = $padrexxx->sis_nnaj->fi_datos_basico;

        $this->opciones['pestpara'] = [$padrexxx->id];

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function getAntecedentes(Request $request, CsdSisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->csd_id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.antecedentes';
            $request->estadoxx = $this->opciones['rutacarp'].'Acomponentes.Botones.estadosx';
            return $this->getAntecedentesTrait($request);
        }
    }
    private function view($dataxxxx)
    {
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.'.$dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];


        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['botoform'][0]['routingx'][1] =
        $this->opciones['parametr'][1] = $dataxxxx['padrexxx']->id;
        $this->opciones['tituloxx'] = "ANTECEDENTES INSTITUCIONALES";
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {

            $this->opciones['pestpadr'] = 3;
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';

            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR ANTECEDENTE INSTITUCIONAL',
                'titulist' => 'ANTECEDENTES INSTITUCIONALES',
                'dataxxxx' => [],
                'vercrear' => false,
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.redes',
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.antecede', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [
                        ['td' => 'ID', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1,],
                        ['td' => 'ENTIDAD', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SERVICIOS O BENEFICIOS RECIBIDOS', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TIEMPO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TIPO TIEMPO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'AÑO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [

                    ['data' => 'id', 'name' => 'csd_redsoc_pasados.id'],
                    ['data' => 'nombre', 'name' => 'sis_entidads.nombre'],
                    ['data' => 'servicios', 'name' => 'servicios'],
                    ['data' => 'cantidad', 'name' => 'csd_redsoc_pasados.cantidad'],
                    ['data' => 'tipotiem', 'name' => 'tiempo.nombre as tipotiem'],
                    ['data' => 'ano', 'name' => 'csd_redsoc_pasados.ano'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatableantecedentes',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [$dataxxxx['padrexxx']->id],
            ],
        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CsdSisNnaj $padrexxx)
    {
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear','formulario'], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$padrexxx->id, CsdRedsocPasado::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdRedApoyoAntecedenteCrearRequest $request, CsdSisNnaj $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['csd_id'] = $padrexxx->csd_id;
        $dataxxxx['sis_esta_id'] = 1;
        return $this->grabar($dataxxxx, '', 'Red Apoyo creado con éxito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiRedesApoyo  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx, CsdRedsocPasado $modeloxx)
     {
        $this->opciones['csdxxxxx']=$padrexxx;
        // $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.ver',$modeloxx->id);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiRedesApoyo  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx,  CsdRedsocPasado $modeloxx)
    {
       
        $this->opciones['csdxxxxx']=$padrexxx;
        if(Auth::user()->id==$padrexxx->user_crea_id||User::userAdmin()){
      
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'GUARDAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        
         }else{
        $this->opciones['botoform'][] =
        [
            'mostrars' => false,
        ];
    }
            return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar','formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiRedesApoyo  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdRedApoyoAntecedenteEditarRequest $request, CsdSisNnaj $padrexxx, CsdRedsocPasado $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Red Apoyo actualizado con éxito', $padrexxx);
    }

    public function inactivate(CsdSisNnaj $padrexxx,CsdRedsocPasado $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroy','destroy'], 'padrexxx' => $padrexxx]);
    }
    public function destroy(CsdSisNnaj $padrexxx,CsdRedsocPasado $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['routxxxx'], [$padrexxx->id])
            ->with('info', 'Antecedente inactivado correctamente');
    }
}
