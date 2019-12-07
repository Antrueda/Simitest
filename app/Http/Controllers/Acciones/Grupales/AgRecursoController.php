<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgRecursoCrearRequest;
use App\Http\Requests\Acciones\Grupales\AgRecursoEditarRequest;
use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Tema;
use Illuminate\Http\Request;

class AgRecursoController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:agrecurso-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:agrecurso-crear'], ['only' => ['index, show, create, store']]);
        $this->middleware(['permission:agrecurso-editar'], ['only' => ['index, show, edit, update']]);
        $this->middleware(['permission:agrecurso-borrar'], ['only' => ['index, show, destroy']]);
        $this->opciones = [
            'tituloxx' => 'Recurso',
            'rutaxxxx' => 'ag.recu.recurso',
            'accionxx' => '',
            'rutacarp'=>'Acciones.Grupales.Agrecurso.',
            'volverax' => 'Volver a recursos',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Agrecurso',
            'modeloxx' => '',
            'permisox' => 'agrecurso',
            'routxxxx' => 'ag.recu.recurso',
            'routinde' => 'ag.recu',
            'parametr' => [],
            'urlxxxxx' => 'api/ag/recursos',
            'routnuev' => 'ag.recu.recurso',
            'nuevoxxx' => 'Nuevo Registro'
        ];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'NOMBRE'],
            ['td' => 'UNIDAD MEDIDA'],
            ['td' => 'TIPO RECURSO'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'ag_recursos.id'],
            ['data' => 's_recurso', 'name' => 'ag_recursos.s_recurso'],
            ['data' => 'umedidax', 'name' => 'parametros.nombre as umedidax'],
            ['data' => 'trecurso', 'name' => 'parametros.nombre as trecurso'],
            ['data' => 'activo', 'name' => 'ag_recursos.activo'],

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
        $this->opciones['umedidax'] = Tema::combo(288, true, false);
        $this->opciones['trecurso'] = Tema::combo(283, true, false);
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo

        if ($nombobje != '') {
             $this->opciones['estadoxx'] = $objetoxx->activo == 1 ? 'ACTIVO' : 'INACTIVO';

            $this->opciones[$nombobje] = $objetoxx;
        }

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
        return view($this->opciones['rutacarp'] . $vistaxxx, ['todoxxxx' => $this->opciones]);
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
            ->route('ag.recu.recurso.editar', [AgRecurso::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgRecursoCrearRequest $request)
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
    public function show(AgRecurso $objetoxx)
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
    public function edit(AgRecurso $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'Editar', 'editar');
    }

    public function update(AgRecursoEditarRequest $request, AgRecurso $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Recurso actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgRecurso $objetoxx)
    {
        $objetoxx->activo = ($objetoxx->activo == 0) ? 1 : 0;
        $objetoxx->save();
        $activado = $objetoxx->activo == 0 ? 'inactivado' : 'activado';
        return redirect()->route('li')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
