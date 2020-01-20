<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InLigruCrearRequest;
use App\Http\Requests\Indicadores\InLigruEditarRequest;
use App\Models\fichaobservacion\FosArea;
use App\Models\Indicadores\InLigru;
use App\Models\Indicadores\InBaseFuente;
use App\Models\fichaobservacion\FosTse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InLigruController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'permisox' => 'indicador',
            'parametr' => [],
            'rutacarp' => 'Indicadores.Admin.Inligru.',
            'tituloxx' => 'Grupo Línea Base',
        ];

        $this->middleware(['permission:' . $this->opciones['permisox'] . '-leer'], ['only' => ['index', 'show']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-crear'], ['only' => ['index', 'show', 'create', 'store', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-editar'], ['only' => ['index', 'show', 'edit', 'update', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-borrar'], ['only' => ['index', 'show', 'destroy']]);

        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'inligru';
        //$this->opciones['routnuev'] = 'inligru';
        $this->opciones['routxxxx'] = 'inligru';

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'Volver a Líneas Base', 'clasexxx' => 'btn btn-sm btn-primary'
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
        $this->opciones['vercrear'] = ''; // motrar el boton de nuevo registro
        $this->opciones['titunuev'] = 'Nuevo grupo Línea Base';
        $this->opciones['titulist'] = 'Listado Líneas Base';
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'Indicadores/Admin/Inligru/botones/botonesbase'],
        ];

        $this->opciones['urlxxxxx'] = 'api/indicadores/basegrupos';
        $this->opciones['cabecera'] = [

            ['td' => 'ID'],
            ['td' => 'LÍNEA BASE'],
            ['td' => 'DOCUMENTO FUENTE'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [

            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'in_base_fuentes.id'],
            ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
            ['data' => 'nombre', 'name' =>'sis_documento_fuentes.nombre'],
            ['data' => 'activo', 'name' => 'in_base_fuentes.activo'],
        ];
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }

    public function grupos($in_linea_id)
    {
        $this->opciones['parametr'] = [$in_linea_id]; // motrar el boton de nuevo registro
        //$this->opciones['vercrear'] = '';// motrar el boton de nuevo registro
        $this->opciones['titunuev'] = 'Nuevo grupo Línea Base';
        $this->opciones['titulist'] = 'Lista grupos Línea Base';
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'Indicadores/Admin/Inligru/botones/botonesapi'],
            ['campoxxx' => 'in_base_fuente_id', 'dataxxxx' => $in_linea_id],
        ];

        $this->opciones['urlxxxxx'] = 'api/indicadores/grupos';
        $this->opciones['cabecera'] = [

            ['td' => 'ID'],
            ['td' => 'LÍNEA BASE'],
            
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'in_base_fuentes.id'],

            ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
           
            ['data' => 'activo', 'name' => 'in_ligrus.sis_esta_id as activo'],
        ];
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        if ($nombobje != '') {
            $this->opciones['estadoxx'] = $objetoxx->sis_esta->s_estado;
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


    public function create($in_linea_id)
    {
        $this->opciones['linebase'] = InBaseFuente::where('id', $in_linea_id)->first()->in_fuente->in_linea_base->s_linea_base;
        $this->opciones['maximoxx'] = InLigru::get()->max('id') == null ? 1 : InLigru::get()->max('id') + 1;
        $this->opciones['parametr'] = [$in_linea_id];
        array_unshift(
            $this->opciones['botoform'],
            [
                'mostrars' => true, 'accionxx' => 'Crear', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ]
        );
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.grupos', $this->opciones['parametr']],
                'formhref' => 2, 'tituloxx' => 'Volver a Grupos Línea Base', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InLigruCrearRequest $request, $in_linea_id)
    {
        $dataxxxx = $request->all();
        $dataxxxx['in_base_fuente_id'] = $in_linea_id;
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(InLigru $objetoxx, $in_linea_id)
    {
        $this->opciones['linebase'] = InBaseFuente::where('id', $in_linea_id)->first()->in_fuente->in_linea_base->s_linea_base;
        $this->opciones['maximoxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$in_linea_id];

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => $objetoxx->activo == 1 ? 'INACTIVAR' : 'ACTIVAR', 'routingx' => [$this->opciones['routxxxx'], []], 'formhref' => 1,
                'tituloxx' => '', 'clasexxx' => $objetoxx->activo == 1 ? 'btn btn-sm btn-danger' : 'btn btn-sm btn-success'
            ];
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'] . 'ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($in_linea_id, InLigru $objetoxx)
    {
       
        $this->opciones['linebase'] = InBaseFuente::where('id', $in_linea_id)->first()->in_fuente->in_linea_base->s_linea_base;
        $this->opciones['maximoxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$in_linea_id, $objetoxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'Editar', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.grupos', $this->opciones['parametr']],
                'formhref' => 2, 'tituloxx' => 'Volver a Grupos Línea Base', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'editar');
    }
    private function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = InLigru::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $transacc = $this->transaccion($dataxxxx, $objectx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$transacc->in_base_fuente_id, $transacc->id])
            ->with('info', $infoxxxx);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InLigruEditarRequest $request, $dd, InLigru $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Linea base del NNAJ actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InLigru $objetoxx)
    {

        $objetoxx->sis_esta_id   = ($objetoxx->activo == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->activo == 0 ? 'inactivado' : 'activado';

        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
