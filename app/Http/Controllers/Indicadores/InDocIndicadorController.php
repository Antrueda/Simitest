<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InDocIndicadorCrearRequest;
use App\Http\Requests\Indicadores\InDocIndicadorEditarRequest;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InDocIndi;
use App\Models\sistema\SisCampoTabla;
use App\Models\sistema\SisDocumentoFuente;
use App\Models\sistema\SisTabla;
use Illuminate\Http\Request;

class InDocIndicadorController extends Controller
{

    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:documentoFuente-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:documentoFuente-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
        $this->middleware(['permission:documentoFuente-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
        $this->middleware(['permission:documentoFuente-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
        $this->opciones = [
            'tituloxx' => 'Preguntas del Documento Fuente',
            'rutaxxxx' => 'di.docindicador',
            'rutacarp' => 'Indicadores.Admin.Docindicador.',
            'accionxx' => '',
            'volverax' => 'Volver a: Preguntas del Documento Fuente',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Docindicador',
            'modeloxx' => '',
            'permisox' => 'documentoFuente',
            'routxxxx' => 'di.docindicador',
            'routinde' => 'di',
            'parametr' => [],
            'urlxxxxx' => 'api/indicadores/documentos',
            'routnuev' => 'di.docindicador',
            'nuevoxxx' => 'Nuevo Registro'
        ];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'INDICADOR'],
            ['td' => 'LÍNEA BASE'],
            ['td' => 'DOCUMENTO FUENTE'],

        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'id'],
            ['data' => 's_indicador', 'name' => 'in_indicadors.s_indicador'],
            ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
            ['data' => 'nombre', 'name' => 'sis_documento_fuentes.nombre'],

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
        
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'TABLA'],
            ['td' => 'CAMPO'],
            ['td' => 'PREGUNTA'],

        ];
        $this->opciones['columnxx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'id'],
            ['data' => 's_tabla', 'name' => 'sis_tablas.s_descripcion as s_tabla'],
            ['data' => 's_campo', 'name' => 'sis_campo_tablas.s_descripcion as s_campo'],
            ['data' => 's_pregunta', 'name' => 'in_preguntas.s_pregunta'],

        ];
        $this->opciones['urlxxxxy'] = 'api/indicadores/docpreguntas';

        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        $this->opciones['pregunta'] = InBaseFuente::comboPreguntas($objetoxx->id, false, false);;
        $this->opciones['tablaxxx'] = SisTabla::comboTabla($objetoxx->sis_documento_fuente->id, true, false);
        $this->opciones['campoxxx']=[''=>'Seleccione'];
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
        return $this->view('', '', 'Crear', $this->opciones['rutacarp'] . 'crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {

        return redirect()
            ->route('di.docindicador.editar', [InDocIndi::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InDocIndicadorCrearRequest $request)
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
    public function show(SisDocumentoFuente $objetoxx)
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
    public function edit(InBaseFuente $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'editar');
    }

    public function update(InDocIndicadorEditarRequest $request, InDocIndi $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SisDocumentoFuente $objetoxx)
    {
        $objetoxx->activo = ($objetoxx->activo == 0) ? 1 : 0;
        $objetoxx->save();
        $activado = $objetoxx->activo == 0 ? 'inactivado' : 'activado';
        return redirect()->route('va')->with('info', 'Registro ' . $activado . ' con éxito');
    }

    function getCamposAjaxx(Request $request)
    {
        if ($request->ajax()) {            
            $respuest =  SisCampoTabla::comboTabla($request,false,true);
            return response()->json($respuest);
        }
    }
}
