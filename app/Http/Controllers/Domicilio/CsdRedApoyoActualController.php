<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdRedApoyoActualCrearRequest;
use App\Http\Requests\Csd\CsdRedApoyoActualEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdRedsocActual;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Csd\CsdTrait;
use App\Traits\Sessionver\SessionVerTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CsdRedApoyoActualController extends Controller
{
    use CsdTrait;
    use SessionVerTrait;
    private $opciones=['botoform'=>[]];
    public function __construct()
    {

        $this->opciones['permisox'] = 'csdredactual';
        $this->opciones['routxxxx'] = 'csdredactual';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Redapoyo';
        $this->opciones['slotxxxx'] = 'csdredactual';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "REDES DE APOYO ACTUALES";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['tipotiem'] = Tema::comboAsc(4, true, false);
        $this->opciones['tiporedx'] = Tema::comboAsc(88, true, false);
        $this->opciones['anioserv'] = Tema::comboAsc(84, true, false);

        $this->opciones['botoform'][] = [
            'mostrars' => true, 'accionxx' => '', 'routingx' => ['csdredesapoyo', []],
            'formhref' => 2, 'tituloxx' => "VOLVER A REDES DE APOYO", 'clasexxx' => 'btn btn-sm btn-primary'
        ];
    }

    public function getActuales(Request $request, CsdSisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx->csd_id;
            $request->datobasi = $padrexxx->id;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->sesionxx = Session::get('csdver_' . Auth::id());
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.antecedentes';
            $request->estadoxx = $this->opciones['rutacarp'].'Acomponentes.Botones.estadosx';
            return $this->getActualesTrait($request);
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
        $this->opciones['tituloxx'] = "REDES DE APOYO ACTUALES";
        $this->opciones['servicio'] = ['' => 'seleccione'];
        $this->opciones['botoform'][0]['routingx'][1] =
        $this->opciones['parametr'][1] = $dataxxxx['padrexxx']->id;
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
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
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.redes',
                'titunuev' => 'CREAR RED DE APOYO',
                'titulist' => 'LISTA DE REDES DE APOYO ACTUALES',
                'dataxxxx' => [],
                'vercrear' =>$this->vercrear(['formular'=>'csd']),
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.redactua', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [

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

                    ['data' => 'id', 'name'          => 'csd_redsoc_actuals.id'],
                    ['data' => 'redxxxxx', 'name'      => 'red.nombre'],
                    ['data' => 'nombre', 'name'      => 'nombre'],
                    ['data' => 'servicios', 'name'  => 'servicios'],
                    ['data' => 'telefono', 'name'  => 's_telefono'],
                    ['data' => 'direccion', 'name'  => 's_direccion'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatableredesactuales',
                'permisox' => 'csdredactual',
                'routxxxx' => 'csdredactual',
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
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx'=>'','accionxx'=>['crear','formactual'],'padrexxx'=>$padrexxx]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx,$padrexxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'].'.editar', [$padrexxx->id, CsdRedsocActual::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdRedApoyoActualCrearRequest $request,CsdSisNnaj $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['csd_id'] = $padrexxx->csd_id;
        $dataxxxx['sis_esta_id'] = 1;
        $dataxxxx['prm_tipofuen_id'] = 2315;
        return $this->grabar($dataxxxx, '', 'Red Apoyo creado con éxito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiRedApoyoActual  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(CsdSisNnaj $padrexxx,CsdRedsocActual $modeloxx)
    {
        $this->opciones['csdxxxxx']=$padrexxx;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' =>['ver','formactual'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiRedApoyoActual  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx,  CsdRedsocActual $modeloxx)
    {
        $value = Session::get('csdver_' . Auth::id());
        if (!$value) {
            return redirect()
                ->route($this->opciones['permisox'].'.ver', [$padrexxx->id,$modeloxx->id]);
        }
        $this->opciones['csdxxxxx']=$padrexxx;
        if(Auth::user()->id==$padrexxx->user_crea_id||User::userAdmin()){
      
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        
         }else{
        $this->opciones['botoform'][] =
        [
            'mostrars' => false,
        ];
    }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' =>['editar','formactual'] , 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiRedApoyoActual  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdRedApoyoActualEditarRequest $request,  CsdSisNnaj $padrexxx,  CsdRedsocActual $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Red actual actualizada con éxito',$padrexxx);
    }

    public function inactivate(CsdSisNnaj $padrexxx,CsdRedsocActual $modeloxx)
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
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' =>['destroy','destroy'],'padrexxx'=>$padrexxx]);
    }
    public function destroy(CsdSisNnaj $padrexxx,CsdRedsocActual $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('csdredesapoyo', [$padrexxx->id])
            ->with('info', 'Red actual inactivada correctamente');
    }
}
