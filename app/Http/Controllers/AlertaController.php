<?php

namespace App\Http\Controllers;

use App\Events\PostEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Alertas\AlertasCrearRequest;
use App\Http\Requests\Alertas\AlertasEditarRequest;
use App\Models\Post;
use App\Models\Sistema\SisEsta;
use App\Models\User;
use App\Notifications\PostNotification;
use Illuminate\Http\Request;

use App\Traits\Alertas\AlertasTrait;
use Illuminate\Support\Facades\Auth;

class AlertaController extends Controller
{
    use AlertasTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'permisox' => 'alertas', ///////////////////////////////
            'parametr' => [],
            'rutacarp' => 'Alertas.', ///////////////////////////////
            'tituloxx' => 'ALERTA',//////////////////////////////////
            'carpetax' => 'Alerta',//////////////////////////////////////
            'slotxxxx' => 'alertas',//////////////////////////
            'tablaxxx' => 'datatable',
            'indecrea' => false, // false muestra las pestañas
            'esindexx' => false,
            'tituhead' => '',
            'fechcrea' => '',
            'fechedit' => '',
            'usercrea' => '',
            'useredit' => '',

            'usuariox' => [],

            'confirmx' => 'Desea inactivar la alerta: ',
            'reconfir' => 'Realmente desea inactivar la alerta: ',
            'msnxxxxx' => 'No se puedo inactivar la alerta',
            'rutaxxxx' => 'alertas', //////////////////////////
            'routnuev' => 'alertas',/////////////////////////
            'routxxxx' => 'alertas',/////////////////////
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);



        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A ALERTAS', 'clasexxx' => 'btn btn-sm btn-primary' ///////////////////////////
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

        $this->opciones['botoform'][0]['routingx'][1] = [];
        $this->opciones['padrexxx'] = '';
        $this->opciones['esindexx'] = true;
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'ALERTA', ////////
                'titulist' => 'LISTA DE ALERTAS',////////
                'dataxxxx' => [

                ],

                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'].'.alertas',$this->opciones['parametr']), //////
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'TITULO'], /////
                    ['td' => 'DESCRIPCION'],////


                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'posts.id'],
                    ['data' => 'titulo', 'name' => 'posts.titulo'], //////
                    ['data' => 'descripcion', 'name' => 'posts.descripcion'],  //////



                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => $this->opciones['tablaxxx'],
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => $this->opciones['botoform'][0]['routingx'][1],
            ]

        ];

        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
/**
 * datos que se muestarn en la tabla del index
 */
    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx=[$this->opciones['routxxxx']];
            $request->botonesx= $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.botones.botonesapi';
            $request->estadoxx='layouts.components.botones.estadosx';
            return $this->getRegistros($request);
        }
    }
    private function view($dataxxxx)
    {


        $this->opciones['parametr'] = [];
        $this->opciones['botoform'][0]['routingx'][1] = [];
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', []],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
        }

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
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => 'Crear',]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlertasCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $dataxxxx['user_id']=Auth::user()->id;
        $post = post::create($dataxxxx);
        //auth()->user()->notify(new PostNotification($post));
        /*
        User::all()
                ->except($post->user_id)
                ->each(function(user $user)use ($post){
                $user->notify(new PostNotification($post));
                });
                e*/

        event(new PostEvent($post));
        return $this->grabar([
            'dataxxxx' => $dataxxxx,
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
    public function show(Post $objetoxx)
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
    public function edit(Post $objetoxx)
    {


        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$objetoxx->id]],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Editar']);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [Post::transaccion($dataxxxx['dataxxxx'], $dataxxxx['modeloxx'])->id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlertasEditarRequest $request, Post $objetoxx)
    {
        return $this->grabar([
            'dataxxxx' => $request->all(),
            'modeloxx' => $objetoxx,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

    }

    public function markNotification(request $request){
        auth()->user()->unreadNotifications->when($request->input('id'), function($query)use ($request){
            return $query->where('id',$request->input('id'));
        })->markAsRead();
        return response()->noContent();
    }

    public function inicio(){
        $postnotification = auth()->user()->unreadNotifications;
        return view('Alertas.tabsxxxx.notifications',compact('postnotification'));
    }

}
