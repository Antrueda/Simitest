<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaObservacion\FosStseCrearRequest;
use App\Http\Requests\FichaObservacion\FosStseEditarRequest;
use App\Models\Indicadores\Area;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosTse;
use App\Models\Usuario\Estusuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FosSubTiposeguimientoController extends Controller
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



        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'fossubtipo';
        $this->opciones['routnuev'] = 'fossubtipo';
        $this->opciones['routxxxx'] = 'fossubtipo';
        $this->opciones['fechcrea'] =  '';
        $this->opciones['fechedit'] =  '';
        $this->opciones['usercrea'] =  '';
        $this->opciones['useredit'] =  '';

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
            ['td' => 'TIPO SEGUIMIENTO'],
            ['td' => 'ÁREA'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'fos_stses.id'],
            ['data' => 'nombre', 'name' => 'fos_stses.nombre'],
            ['data' => 's_seguimiento', 'name' => 'fos_tses.nombre as s_seguimiento'],
            ['data' => 's_area', 'name' => 'areas.nombre as s_area'],
            ['data' => 'sis_esta_id', 'name' => 'fos_stses.sis_esta_id'],
        ];
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {

        $this->opciones['fosareas'] =  Area::comb( true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        $this->opciones['modeloxz'] ='';
        // indica si se esta actualizando o viendo
        $this->opciones['nivelxxx'] = '';
        $estadoid=0;
        $this->opciones['tiposegu'] = [];
        if ($nombobje != '') {
            $objetoxx->area_id=$objetoxx->fos_tse->area_id;
            $this->opciones['tiposegu'] =FosTse::combo($objetoxx->area_id, true, false);
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id == 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones[$nombobje] = $objetoxx;
            $this->opciones['modeloxz'] = $nombobje;
            
        }
        $this->opciones['motivozx'] = Estusuario::combo([
            'cabecera' => true,
            'esajaxxx' => false,
            'estadoid' => $this->opciones['estadoxx'] == 'ACTIVO' ? $this->opciones['estadoxx'] == 'ACTIVO' : $estadoid,
            'formular' => 2481
        ]);

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['tituloxx'];
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
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
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
        $dataxxxx['sis_esta_id'] = 1;
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
                'mostrars' => true, 'accionxx' => $objetoxx->sis_esta_id == 1 ? 'INACTIVAR' : 'ACTIVAR', 'routingx' => [$this->opciones['routxxxx'], []], 'formhref' => 1,
                'tituloxx' => '', 'clasexxx' => $objetoxx->sis_esta_id == 1 ? 'btn btn-sm btn-danger' : 'btn btn-sm btn-success'
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
                'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'editar');
    }
    private function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            $dataxxxx['sis_esta_id'] = 1;
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

        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';

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
