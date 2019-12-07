<?php

namespace App\Http\Controllers\Indicadores;

use App\Models\Indicadores\Infuente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InfuenteCrearRequest;
use App\Http\Requests\Indicadores\InfuenteEditarRequest;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InIndicador;
use App\Models\sistema\SisDocumentoFuente;

class InBaseDocumenController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:inbasedocumen-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:inbasedocumen-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
        $this->middleware(['permission:inbasedocumen-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
        $this->middleware(['permission:inbasedocumen-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
        $this->opciones = [
            'tituloxx' => 'Linea Base Documento Fuente',
            'rutaxxxx' => 'bd.basedocumen',
            'rutacarp' => 'Indicadores.Admin.Basedocumen.',
            'accionxx' => '',
            'volverax' => 'Volver a Linea Base Indicador',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Basedocumen',
            'modeloxx' => '',
            'permisox' => 'inbasedocumen',
            'routxxxx' => 'bd.basedocumen',
            'routinde' => 'bd',
            'parametr' => [],
            'urlxxxxx' => 'api/indicadores/basedocumen',
            'routnuev' => 'bd.basedocumen',
            'nuevoxxx' => 'Nuevo Registro',
            'vercrear' => ''
        ];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],            
            ['td' => 'INDICADOR'],
            ['td' => 'LÍNEA BASE'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'in_fuentes.id'],
            
            ['data' => 's_indicador', 'name' => 'in_indicadors.s_indicador'],
            ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
            
            ['data' => 'activo', 'name' => 'in_fuentes.activo'],
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
        $this->opciones['linebase'] =Infuente::comboDocumentos($objetoxx,false);
        $this->opciones['estadoxx'] = 'ACTIVO';
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
    public function create()
    {
        return $this->view(true, '', 'Crear',$this->opciones['rutacarp'] . 'crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        return redirect()
            ->route('bd.basedocumen.editar', [InFuente::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfuenteCrearRequest $request)
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
        return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'] . 'ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Infuente $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'editar');
    }

    public function update(InfuenteEditarRequest $request, Infuente $objetoxx)
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
        return redirect()->route('bd')->with('info', 'Registro ' . $activado . ' con éxito');
    }

    function documentos(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
           
            $respuest=[Infuente::combobuscar($dataxxxx)];
            return response()->json($respuest);
        }
    }
    function asignardocumento(Request $request)
    {
        if ($request->ajax()) { 
            $dataxxxx = $request->all(); 
            $dataxxxx['activo']=1;
            $respuest =  InBaseFuente::transaccion($dataxxxx,  '');
            return response()->json($respuest);
        }
    }
}
