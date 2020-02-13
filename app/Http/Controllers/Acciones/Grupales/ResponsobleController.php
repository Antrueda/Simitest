<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Helpers\Traductor\Traductor;
use App\Http\Controllers\Controller;
use App\Http\Requests\Sistema\SisEslugCrearRequest;
use App\Http\Requests\Sistema\SisEslugEditarRequest;
use App\Models\sistema\SisEslug;
use App\Models\Tema;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResponsobleController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'permisox' => 'agactividad',
            'parametr' => [],
            'rutacarp' => 'Acciones.Grupales.Agactividad.Responsable.',
            'tituloxx' => Traductor::getTitulo(29,1),
        ];

        $this->middleware(['permission:' . $this->opciones['permisox'] . '-leer'], ['only' => ['index', 'show']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-crear'], ['only' => ['index', 'show', 'create', 'store', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-editar'], ['only' => ['index', 'show', 'edit', 'update', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-borrar'], ['only' => ['index', 'show', 'destroy']]);

        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'respo';
        $this->opciones['routnuev'] = 'respo';
        $this->opciones['routxxxx'] = 'respo';

        
    }


   
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $this->opciones['condicio'] = Tema::combo(338, false, false);
        $this->opciones['responsa'] = User::combo(false,false);

        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        if ($nombobje != '') {
            $this->opciones[$nombobje] = $objetoxx;
        }
        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($activida)
    {//ddd(4);
        $this->opciones['parametr'] = [$activida];
        $this->opciones['botoform'][] = 
            ['mostrars' => true, 'accionxx' => '', 'routingx' => ['ag.acti.actividad.editar', [$activida]], 
            'formhref' => 2, 'tituloxx' => 'VOLVER A '.Traductor::getTitulo(29,1), 'clasexxx' => 'btn btn-sm btn-primary'];
         //ddd($this->opciones['botoform']);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$activida]],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
           // ddd($this->opciones['botoform']);
        return $this->view(true, '', 'CREAR', $this->opciones['rutacarp'] . 'crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($activida,SisEslugCrearRequest $request)
    {
        $this->opciones['parametr'] = [$activida];
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($activida,SisEslug $objetoxx)
    {
        $this->opciones['parametr'] = [$activida,$objetoxx->id];
        // $this->opciones['botoform'][] =
        //     [
        //         'mostrars' => true, 'accionxx' => 'EDITAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
        //         'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
        //     ];
        return $this->view($objetoxx,  'modeloxx', 'EDITAR', $this->opciones['rutacarp'] . 'editar');
    }
    private function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = SisEslug::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$this->transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($activida,SisEslugEditarRequest $request, SisEslug $objetoxx)
    {
        $this->opciones['parametr'] = [$activida,$objetoxx->id];
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

}
