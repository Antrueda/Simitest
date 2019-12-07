<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgSubtemaCrearRequest;
use App\Http\Requests\Acciones\Grupales\AgSubtemaEditarRequest;
use App\Models\Acciones\Grupales\AgSubtema;
use App\Models\Acciones\Grupales\AgTaller;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\Indicadores\Area;
use App\Models\sistema\SisDependencia;
use App\Models\sistema\SisEntidad;
use App\Models\Tema;
use Illuminate\Http\Request;

class AgSubtemaController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:agsubtema-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:agsubtema-crear'], ['only' => ['index, show, create, store']]);
        $this->middleware(['permission:agsubtema-editar'], ['only' => ['index, show, edit, update']]);
        $this->middleware(['permission:agsubtema-borrar'], ['only' => ['index, show, destroy']]);
        $this->opciones = [
            'tituloxx' => 'Subtema',
            'rutaxxxx' => 'ag.subt.subtema',
            'accionxx' => '',
            'rutacarp'=>'Acciones.Grupales.Agsubtema.',
            'volverax' => 'Volver a Subtemas',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Agsubtema',
            'modeloxx' => '',
            'permisox' => 'agsubtema',
            'routxxxx' => 'ag.subt.subtema',
            'routinde' => 'ag.subt',
            'parametr' => [],
            'urlxxxxx' => 'api/ag/subtemas',
            'routnuev' => 'ag.subt.subtema',
            'nuevoxxx' => 'Nuevo Registro'
        ];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'TALLER'],
            ['td' => 'SUBTEMA'],
            ['td' => 'DESCRIPCIÓN'],          
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns','name' => 'btns'],
            ['data' => 'id','name' => 'ag_subtemas.id'],
            ['data' => 'ag_taller_id','name' => 'ag_tallers.s_taller as ag_taller_id'],
            ['data' => 's_subtema','name' => 'ag_subtemas.s_subtema'],
            ['data' => 's_descripcion','name' => 'ag_subtemas.s_descripcion'],
            ['data' => 'activo','name' => 'ag_subtemas.activo'],

        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view($this->opciones['rutacarp'] .'index', ['todoxxxx' => $this->opciones]);
    }


    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $this->opciones['tallerxx'] = AgTaller::comb(true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo

        if ($nombobje != '') {
            $this->opciones['estadoxx'] = $objetoxx->activo == 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones[$nombobje] = $objetoxx;
        }

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
        return view($this->opciones['rutacarp'].$vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view('', '', 'Crear', 'crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {

        return redirect()
            ->route('ag.subt.subtema.editar', [AgSubtema::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgSubtemaCrearRequest $request)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AgSubtema $objetoxx)
    {
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', 'ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AgSubtema $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'Editar', 'editar');
    }

    public function update(AgSubtemaEditarRequest $request, AgSubtema $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Indicador actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgSubtema $objetoxx)
    {
        $objetoxx->activo = ($objetoxx->activo == 0) ? 1 : 0;
        $objetoxx->save();
        $subtvado = $objetoxx->activo == 0 ? 'insubtvado' : 'subtvado';
        return redirect()->route('li')->with('info', 'Registro ' . $subtvado . ' con éxito');
    }
}
