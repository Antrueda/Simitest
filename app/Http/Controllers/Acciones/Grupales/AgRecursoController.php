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
        $this->opciones = [
            'tituloxx' => 'RECURSOS',
            'rutaxxxx' => 'agrecurso',
            'accionxx' => '',
            'rutacarp'=>'Acciones.Grupales.Agrecurso.',
            'volverax' => 'VOLVER A RECURSO',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Agrecurso',
            'modeloxx' => '',
            'permisox' => 'agrecurso',
            'routxxxx' => 'agrecurso',
            'routinde' => 'agrecurso',
            'parametr' => [],
            'urlxxxxx' => 'api/ag/recursos',
            'routnuev' => 'agrecurso',
            'nuevoxxx' => 'NUEVO RECURSO'
        ];
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'NOMBRE'],
            ['td' => 'UNIDAD MEDIDA'],
            ['td' => 'TIPO RECURSO'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'Acciones.Grupales/Agtaller/botones/botonesapi'],
            ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components/botones/estadoxx'],
            ];

        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'ag_recursos.id'],
            ['data' => 's_recurso', 'name' => 'ag_recursos.s_recurso'],
            ['data' => 'umedidax', 'name' => 'parametros.nombre as umedidax'],
            ['data' => 'trecurso', 'name' => 'parametros.nombre as trecurso'],
            ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],

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
             $this->opciones['estadoxx'] = $objetoxx->sis_esta_id == 1 ? 'ACTIVO' : 'INACTIVO';

            $this->opciones[$nombobje] = $objetoxx;
        }

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['tituloxx'];
        return view($this->opciones['rutacarp'] . $vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view('', '', 'CREAR', 'crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {

        return redirect()
            ->route('agrecurso.editar', [AgRecurso::transaccion($dataxxxx, $objectx)->id])
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
        return $this->view($objetoxx,  'modeloxx', 'VER', 'ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AgRecurso $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'EDITAR', 'editar');
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
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('li')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
