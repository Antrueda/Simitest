<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InDocIndicadorCrearRequest;
use App\Http\Requests\Indicadores\InDocIndicadorEditarRequest;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InDocIndi;
use App\Models\Indicadores\InLigru;
use App\Models\Sistema\SisCampoTabla;
use App\Models\Sistema\SisDocumentoFuente;
use App\Models\Sistema\SisTabla;
use Illuminate\Http\Request;

class InDocIndicadorController extends Controller
{

    private $opciones;
    public function __construct()
    {

        $this->opciones = [
            'permisox' => 'documentoFuente',
            'parametr' => [],
            'rutacarp' => 'Indicadores.Admin.DocIndicador.',
            'tituloxx' => 'Preguntas del Documento Fuente',
        ];


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'di.docindicador';
        //$this->opciones['routnuev'] = 'inligru';
        $this->opciones['routxxxx'] = 'di.docindicador';

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'Volver a Grupos', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->opciones['vercrear'] = ''; // motrar el boton de nuevo registro
        $this->opciones['titunuev'] = 'Nuevo grupo Línea Base';
        $this->opciones['titulist'] = 'Listado Grupos Líneas Base';
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'Indicadores/Admin/DocIndicador/botones/botonesgru'],
        ];
        $this->opciones['urlxxxxx'] = 'api/indicadores/documentos';
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],

            ['td' => 'LÍNEA BASE'],
            ['td' => 'DOCUMENTO FUENTE'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'id'],

            ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
            ['data' => 'nombre', 'name' => 'sis_documento_fuentes.nombre'],

        ];
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }


    public function preguntas($in_libagrup_id)
    {
        $this->opciones['vercrear'] ='';
        $this->opciones['campoxxx'] = ['' => 'Seleccione'];
        $this->opciones['modeloxx']=InLigru::where('id',$in_libagrup_id)->first();
        $this->opciones['tablaxxx'] = SisTabla::comboTabla($this->opciones['modeloxx']->in_base_fuente->sis_documento_fuente->id, true, false);
        $this->opciones['parametr'] = [$in_libagrup_id]; // motrar el boton de nuevo registro
        //$this->opciones['vercrear'] = '';// motrar el boton de nuevo registro
        $this->opciones['titunuev'] = 'Nueva Pregunta';
        $this->opciones['titulist'] = 'Lista Preguntas Grupo';
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => ''],
            ['campoxxx' => 'in_libagrup_id', 'dataxxxx' => $in_libagrup_id],
        ];

        $this->opciones['urlxxxxx'] = 'api/indicadores/docpreguntas';

        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'TABLA'],
            ['td' => 'CAMPO'],
            ['td' => 'PREGUNTA'],

        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'id'],
            ['data' => 's_tabla', 'name' => 'sis_tablas.s_descripcion as s_tabla'],
            ['data' => 's_campo', 'name' => 'sis_campo_tablas.s_descripcion as s_campo'],
            ['data' => 's_pregunta', 'name' => 'in_preguntas.s_pregunta'],

        ];
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }

    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {

        $this->opciones['urlxxxxx'] = 'api/indicadores/docpreguntas';

        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'TABLA'],
            ['td' => 'CAMPO'],
            ['td' => 'PREGUNTA'],

        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'id'],
            ['data' => 's_tabla', 'name' => 'sis_tablas.s_descripcion as s_tabla'],
            ['data' => 's_campo', 'name' => 'sis_campo_tablas.s_descripcion as s_campo'],
            ['data' => 's_pregunta', 'name' => 'in_preguntas.s_pregunta'],

        ];


        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        $this->opciones['pregunta'] = InBaseFuente::comboPreguntas($objetoxx->id, false, false);;
        $this->opciones['tablaxxx'] = SisTabla::comboTabla($objetoxx->in_base_fuente->sis_documento_fuente->id, true, false);
        $this->opciones['campoxxx'] = ['' => 'Seleccione'];
        if ($nombobje != '') {

            $this->opciones[$nombobje] = $objetoxx;
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id == 1 ? 'ACTIVO' : 'INACTIVO';
        }
        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['tituloxx'];
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($in_libagrup_id)
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
    public function store($in_libagrup_id,InDocIndicadorCrearRequest $request)
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
    public function show($in_libagrup_id,InLigru $objetoxx)
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
    public function edit($in_libagrup_id,InLigru $objetoxx)
    {

        $this->opciones['parametr'] = [$in_libagrup_id, $objetoxx->id];


        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'Editar', 'routingx' => [$this->opciones['routxxxx'] . '.editar', $this->opciones['parametr']],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.preguntas', $this->opciones['parametr']],
                'formhref' => 2, 'tituloxx' => 'Volver a Grupos Línea Base', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'editar');
    }

    public function update($in_libagrup_id,InDocIndicadorEditarRequest $request, InLigru $objetoxx)
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
    public function destroy($in_libagrup_id,InLigru $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('va')->with('info', 'Registro ' . $activado . ' con éxito');
    }

    function getCamposAjaxx(Request $request)
    {
        if ($request->ajax()) {
            $respuest =  SisCampoTabla::comboTabla($request, false, true);
            return response()->json($respuest);
        }
    }
}
