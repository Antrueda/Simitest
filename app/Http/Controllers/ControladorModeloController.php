<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaObservacion\FosStseCrearRequest;
use App\Http\Requests\FichaObservacion\FosStseEditarRequest;
use App\Models\fichaobservacion\FosArea;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosTse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ControladorModeloController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'permisox' => 'fossubtipo',
            'parametr' => [],
            'rutacarp' => 'FichaObservacion.Admin.SubTipoSeguimiento.',
            'tituloxx' => 'Sub Tipo Seguimiento',
        ];

        $this->middleware(['permission:' . $this->opciones['permisox'] . '-leer'], ['only' => ['index', 'show']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-crear'], ['only' => ['index', 'show', 'create', 'store', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-editar'], ['only' => ['index', 'show', 'edit', 'update', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-borrar'], ['only' => ['index', 'show', 'destroy']]);

        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'fossubtipo';
        $this->opciones['routnuev'] = 'fossubtipo';
        $this->opciones['routxxxx'] = 'fossubtipo';

        $this->opciones['botoform'] = [
            ['mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []], 
            'formhref' => 2, 'tituloxx' => 'Volver a Sub Tipo Seguimiento', 'clasexxx' => 'btn btn-sm btn-primary'],
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->opciones['titunuev'] = 'Nuevo Sub Tipo de Segumineto';
        $this->opciones['titulist'] = 'Lista de Sub Tipos de Seguimiento';
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'FichaObservacion/Admin/SubTipoSeguimiento/botones/botonesapi'],
        ];

        $this->opciones['urlxxxxx'] = 'api/fos/subtipo';
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'NOMBRE'],
            ['td' => 'ÁREA'],
            ['td' => 'TIPO SEGUIMIENTO'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'fos_stses.id'],
            ['data' => 'nombre', 'name' => 'fos_stses.nombre'],
            ['data' => 's_seguimiento', 'name' => 'fos_tses.nombre as s_seguimiento'],
            ['data' => 's_area', 'name' => 'fos_areas.nombre as s_area'],
            ['data' => 'activo', 'name' => 'fos_stses.activo'],
        ];
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {

        $this->opciones['fosareas'] =  FosArea::combo( true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        $this->opciones['nivelxxx'] = '';
        $this->opciones['tiposegu'] = [];
        if ($nombobje != '') {
            $objetoxx->fos_area_id=$objetoxx->fos_tse->fos_area_id;
            $this->opciones['tiposegu'] =FosTse::combo($objetoxx->fos_area_id, true, false);
            $this->opciones['estadoxx'] = $objetoxx->activo == 1 ? 'ACTIVO' : 'INACTIVO';
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
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'Crear', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FosStseCrearRequest $request)
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
    public function show(FosStse $objetoxx)
    {

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
    public function edit(FosStse $objetoxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'Editar', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
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
                $objetoxx = FosStse::create($dataxxxx);
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
    public function update(FosStseEditarRequest $request, FosStse $objetoxx)
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
    public function destroy(FosStse $objetoxx)
    {

        $objetoxx->activo = ($objetoxx->activo == 0) ? 1 : 0;
        $objetoxx->save();
        $activado = $objetoxx->activo == 0 ? 'inactivado' : 'activado';

        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }

    public function tiposeg(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
         
            return response()->json(FosTse::combo($dataxxxx['padrexxx'], false, true));
        }
    }
}
