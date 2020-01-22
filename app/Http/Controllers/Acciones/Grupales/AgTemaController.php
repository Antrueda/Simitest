<?php

namespace App\Http\Controllers\Acciones\Grupales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgTemaCrearRequest;
use App\Http\Requests\Acciones\Grupales\AgTemaEditarRequest;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\Indicadores\Area;

class AgTemaController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:agtema-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:agtema-crear'], ['only' => ['index, show, create, store']]);
        $this->middleware(['permission:agtema-editar'], ['only' => ['index, show, edit, update']]);
        $this->middleware(['permission:agtema-borrar'], ['only' => ['index, show, destroy']]);
        $this->opciones = [
            'tituloxx' => 'Tema',
            'rutacarp' => 'Acciones.Grupales.Agtema.',
            'rutaxxxx' => 'ag.tema.tema',
            'accionxx' => '',
            'volverax' => 'Volver a Temas',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Agtema',
            'modeloxx' => '',
            'permisox' => 'agtema',
            'routxxxx' => 'ag.tema.tema',
            'routinde' => 'ag.tema',
            'parametr' => [], 
            'urlxxxxx' => 'api/agr/temas',
            'routnuev' => 'ag.tema.tema',
            'nuevoxxx' => 'Nuevo Registro'
        ];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'ÁREA'],
            ['td' => 'NOMBRE'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'ag_temas.id'],
            ['data' => 'nombre', 'name' => 'areas.nombre'],
            ['data' => 's_tema', 'name' => 'ag_temas.s_tema'],
            ['data' => 'sis_esta_id', 'name' => 'ag_temas.sis_esta_id'],

        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }


    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $this->opciones['areasxxx'] = Area::combo_tema('', true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo

        if ($nombobje != '') {

            $this->opciones['indicado'] = Area::combo_tema($objetoxx->area_id, true, false);
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id == 1 ? 'ACTIVO' : 'INACTIVO';

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
            ->route('ag.tema.tema.editar', [AgTema::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgTemaCrearRequest $request)
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
    public function show(AgTema $objetoxx)
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
    public function edit(AgTema $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'Editar', 'editar');
    }

    public function update(AgTemaEditarRequest $request, AgTema $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Tema actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgTema $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('li')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
