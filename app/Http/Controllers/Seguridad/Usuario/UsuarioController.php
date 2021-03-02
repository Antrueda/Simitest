<?php

namespace App\Http\Controllers\Seguridad\Usuario;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Seguridad\UsuarioIdipronBorrarRequest;
use App\Http\Requests\Seguridad\UsuarioIdipronCrearRequest;
use App\Http\Requests\Seguridad\UsuarioIdipronEditarRequest;
use App\Models\Sistema\SisCargo;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisEsta;
use App\Models\Sistema\SisMunicipio;
use App\Models\Tema;
use App\Models\User;
use App\Models\Usuario\Estusuario;
use App\Traits\Administracion\UsuariosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    use UsuariosTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => true, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'usuario',
            'parametr' => [],
            'rutacarp' => 'administracion.Usuario.',
            'tituloxx' => 'USUARIOS',
            'carpetax' => 'Usuario',
            'slotxxxx' => 'usuario',
            'tablaxxx' => 'usuarios',
            'indecrea' => false, // false muestra las pestañas
            'esindexx' => false,
            'tituhead' => '',
            'fechcrea' => '',
            'fechedit' => '',
            'usercrea' => '',
            'useredit' => '',

            'usuariox' => [] // usuario para que se esta revisando la informacion
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-contrasenia|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'usuario';
        $this->opciones['routnuev'] = 'usuario';
        $this->opciones['routxxxx'] = 'usuario';

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A USUARIOS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $respuest = Http::get('http://localhost:8085/usuarios')->json();
        // echo '<pre>';
        // print_r($respuest);

        // ddd($respuest);
        $this->opciones['parametr'] = [];
        $this->opciones['tituhead'] = '';
        $this->opciones['botoform'][0]['routingx'][1] = [];
        $this->opciones['padrexxx'] = '';
        $this->opciones['esindexx'] = true;

        $this->opciones['rowscols'] = 'rowspancolspan';
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR USUARIO',
                'titulist' => 'LISTA DE USUARIOS',
                'dataxxxx' => [],
                'vercrear' => true,
                'urlxxxxx' => route('usuario.listaxxx', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],


                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'users.id'],
                    ['data' => 's_documento', 'name' => 'users.s_documento'],
                    ['data' => 's_primer_nombre', 'name' => 'users.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'users.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'users.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'users.s_segundo_apellido'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => 'usuario',
                'routxxxx' => 'usuario',
                'parametr' => $this->opciones['parametr'],
            ],

        ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getUsuario(Request $request)
    {
        if ($request->ajax()) {
            $request->puedleer = auth()->user()->can('usuario-leer');
            $request->routexxx = [$this->opciones['routxxxx'], 'contrase'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getUsuarios($request);
        }
    }
    private function view($dataxxxx)
    {
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        $estadoid = 0;
        $this->opciones['sis_esta_id'] = SisEsta::combo(['cabecera' => true, 'esajaxxx' => false]);
        $this->opciones['sis_cargo_id'] = SisCargo::combo();
        $this->opciones['prm_documento_id'] = Tema::combo(3, true, false);
        $this->opciones['prm_tvinculacion_id'] = Tema::combo(310, true, false);
        $this->opciones['prm_tdependencia_id'] = Tema::combo(3, true, false);
        $this->opciones['sis_depen_id'] = SisDepen::combo('', true, false);
        $this->opciones['sis_departam_id'] = SisDepartam::combo(2, false);
        // indica si se esta actualizando o viendo
        $this->opciones['registro'] = [];
        $this->opciones['sis_municipio_id'] = ['' => 'Seleccione'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['conperfi'] = ''; // indica si la vista va a tener perfil
            $this->opciones['usuariox'] = $dataxxxx['modeloxx'];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $dataxxxx['modeloxx']->dtiestan = date("Y-m-d", strtotime(date('Y-m-d', time()) . "- {$dataxxxx['modeloxx']->itiestan} days"));
            $dataxxxx['modeloxx']->dtiegabe = date("Y-m-d", strtotime(date('Y-m-d', time()) . "- {$dataxxxx['modeloxx']->itiegabe} days"));
            $dataxxxx['modeloxx']->dtigafin = date("Y-m-d", strtotime(date('Y-m-d', time()) . "- {$dataxxxx['modeloxx']->itigafin} days"));
            $this->opciones['sis_municipio_id'] = SisMunicipio::combo($dataxxxx['modeloxx']->sis_municipio->sis_departam_id, false);
            $dataxxxx['modeloxx']->sis_departam_id = $dataxxxx['modeloxx']->sis_municipio->sis_departam_id;

            $this->opciones['pestpadr'] = false;
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', []],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }

            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
            $estadoid= $dataxxxx['modeloxx']->sis_esta_id;
        }
        $this->opciones['motivoxx'] = Estusuario::combo([
            'cabecera' => true,
            'esajaxxx' => false,
            'estadoid' => $estadoid,
            'formular' => 2325
        ]);

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => 'Crear']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioIdipronCrearRequest $request)
    {
        return $this->grabar([
            'dataxxxx' => $request->all(),
            'modeloxx' => '',
            'menssage' => 'Registro creado con éxito'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $objetoxx)
    {
        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->id];
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Ver']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $objetoxx)
    {
        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx->sis_depen]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [User::transaccion($dataxxxx['dataxxxx'], $dataxxxx['modeloxx'])->id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioIdipronEditarRequest $request, User $objetoxx)
    {
        return $this->grabar([
            'dataxxxx' => $request->all(),
            'modeloxx' => $objetoxx,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }

    public function inactivate(User $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $this->opciones['observac'] = Estusuario::combo(['cabecera' => true, 'esajaxxx' => false, 'estadoid' => 2, 'formular' => 2325]);
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Destroy']);
    }


    public function destroy(UsuarioIdipronBorrarRequest $request, User $objetoxx)
    {
        $objetoxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id,'estusuario_id'=>$request->estusuario_id]);
        return redirect()
            ->route($this->opciones['slotxxxx'], [])
            ->with('info', 'Estado inactivado correctamente');
    }

    public function municipioajax(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(SisMunicipio::combo($request->all()['departam'], true));
        }
    }


    public function tiempocarga(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                ['tiemcarg' => IndicadorHelper::getDiasEntreFecha($request->all()['fechaxxx'], date('Y-m-d', time()))]
            );
        }
    }

    public function getMotivos(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2325])
            );
        }
    }

    public function getRestart(User $objetoxx)
    {
        $objetoxx->update(['user_edita_id' => Auth::user()->id,'password'=>$objetoxx->s_documento,
        'password_change_at'=>date('Y-m-d',time()),
        'password_reset_at'=>date('Y-m-d',time()),]);
        return redirect()
            ->route($this->opciones['slotxxxx'], [])
            ->with('info', 'Contraseña restablecida correctamente');
    }

    public function polidatoe(User $objetoxx)
    {
        $this->opciones['slotxxxx'] = 'polidato';
        $this->opciones['botoform']=[];
        if (auth()->user()->can($this->opciones['permisox'] . '-polidato')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'ACEPTAR', 'routingx' => [$this->opciones['routxxxx'] . '.polidato', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => ['editar', 'polidatos']]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function polidatou(Request $request,  User $objetoxx)
    {
       $dataxxxx= $request->all();
       $dataxxxx['polidato_at']=date('Y-m-d H:m:s',time());
        return $this->grabar($dataxxxx, $objetoxx, 'Políticas aceptadas con éxito','polidato');
    }
}
