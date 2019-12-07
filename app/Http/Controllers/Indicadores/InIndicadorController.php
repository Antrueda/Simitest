<?php

namespace App\Http\Controllers\Indicadores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InIndicadorCrearRequest;
use App\Http\Requests\Indicadores\InIndicadorUpdateRequest;

use App\Models\Indicadores\Area;
use App\Models\Indicadores\InIndicador;

class InIndicadorController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:indicador-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:indicador-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
        $this->middleware(['permission:indicador-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
        $this->middleware(['permission:indicador-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
        $this->opciones = [
            'tituloxx' => 'Indicador',
            'rutaxxxx' => 'in.indicador',
            'accionxx' => '',
            'volverax' => 'Indicadores',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'indicador',
            'modeloxx' => '',
            'permisox' => 'indicador',
            'routxxxx' => 'in.indicador',
            'routinde' => 'in',
            'parametr' => [],
            'urlxxxxx' => 'api/indicadores/indicador',
            'routnuev' => 'in.indicador',
            'nuevoxxx' => 'o Registro'
        ];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'INDICADOR'],
            ['td' => 'ÁREA'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns','name'=>'btns'],
            ['data' => 'id','name'=>'in_indicadors.id'],
            ['data' => 's_indicador','name'=>'in_indicadors.s_indicador'],
            ['data' => 'nombre','name'=>'areas.nombre'],

            ['data' => 'activo','name'=>'in_indicadors.activo'],

        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('Indicadores.Admin.Indicador.index', ['todoxxxx' => $this->opciones]);
    }


    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {

        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        $this->opciones['areasxxx'] = Area::combo('', true, false);
        if ($nombobje != '') {
            $this->opciones[$nombobje] = $objetoxx;
            $this->opciones['estadoxx'] = $objetoxx->activo == 1 ? 'ACTIVO' : 'INACTIVO';
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
    public function create()
    {
        return $this->view(true, '', 'Crear', 'Indicadores.Admin.Indicador.crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {

        return redirect()
            ->route('in.indicador.editar', [InIndicador::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InIndicadorCrearRequest $request)
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
    public function show(InIndicador $objetoxx)
    {
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', 'Indicadores.Admin.Indicador.ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InIndicador $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'Editar', 'Indicadores.Admin.Indicador.editar');
    }

    public function update(InIndicadorUpdateRequest $request, InIndicador $objetoxx)
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
    public function destroy(InIndicador $objetoxx)
    {
        $objetoxx->activo = ($objetoxx->activo == 0) ? 1 : 0;
        $objetoxx->save();
        $activado = $objetoxx->activo == 0 ? 'inactivado' : 'activado';
        return redirect()->route('in')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
