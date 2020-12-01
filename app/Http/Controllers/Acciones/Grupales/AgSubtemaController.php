<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgSubtemaCrearRequest;
use App\Http\Requests\Acciones\Grupales\AgSubtemaEditarRequest;
use App\Models\Acciones\Grupales\AgSubtema;
use App\Models\Acciones\Grupales\AgTaller;
use App\Models\Acciones\Grupales\AgTema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgSubtemaController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'permisox' => 'agsubtema',
            'parametr' => [],
            'rutacarp' => 'Acciones.Grupales.Agsubtema.',
            'tituloxx' => 'SubTema',
        ];

        $this->middleware(['permission:'
        . $this->opciones['permisox'] . '-leer|'
        . $this->opciones['permisox'] . '-crear|'
        . $this->opciones['permisox'] . '-editar|'
        . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'agsubt';
        $this->opciones['routnuev'] = 'agsubt';
        $this->opciones['routxxxx'] = 'agsubt';
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($agtaller)
    {
        $this->opciones['parametr'] = [$agtaller];
        $this->opciones['titunuev'] = 'Nuevo Subtema';
        $this->opciones['titulist'] = 'Lista de Subtemas';
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'Acciones.Grupales/Agsubtema/botones/botonesapi'],
            ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts/components/botones/estadoxx'],
        ];

        $this->opciones['urlxxxxx'] = 'api/ag/subtemas';
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'TALLER'],
            ['td' => 'SUBTEMA'],
            ['td' => 'DESCRIPCIÓN'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'ag_subtemas.id'],
            ['data' => 'ag_taller_id', 'name' => 'ag_tallers.s_taller as ag_taller_id'],
            ['data' => 's_subtema', 'name' => 'ag_subtemas.s_subtema'],
            ['data' => 's_descripcion', 'name' => 'ag_subtemas.s_descripcion'],
            ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],

        ];
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }

    public function talleres()
    {
        $this->opciones['vercrear'] = '';
        $this->opciones['titunuev'] = 'Nuevo Sub Tipo de Segumineto';
        $this->opciones['titulist'] = 'Lista de Talleres';
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'Acciones.Grupales/Agsubtema/botones/apitemas'],
            ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components/botones/estadoxx'],
        ];

        $this->opciones['urlxxxxx'] = 'api/agr/tallersubtemas';
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'TALLER'],
            ['td' => 'TEMA'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'ag_tallers.id'],
            ['data' => 's_taller', 'name' => 'ag_tallers.s_taller'],
            ['data' => 's_tema', 'name' => 'ag_tema.s_tema'],
            ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
        ];
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        $this->opciones['nivelxxx'] = '';
        $this->opciones['tiposegu'] = [];
        if ($nombobje != '') {
            $this->opciones[$nombobje] = $objetoxx;
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
    public function create($agtaller)
    {
        $this->opciones['parametr'] = [$agtaller];
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], $this->opciones['parametr']],
                'formhref' => 2, 'tituloxx' => 'Volver a Subtemas', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', $this->opciones['parametr']],
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
    public function store($agtaller, AgSubtemaCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $dataxxxx['ag_taller_id'] = $agtaller;
        return $this->grabar($dataxxxx, '', 'SubTema creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($agtaller, AgSubtema $objetoxx)
    {
        $this->opciones['parametr'] = [$agtaller,$objetoxx->id];
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], [$agtaller]],
                'formhref' => 2, 'tituloxx' => 'Volver a Subtemas', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => $objetoxx->sis_esta_id == 1 ? 'INACTIVAR' : 'ACTIVAR', 'routingx' => [$this->opciones['routxxxx'], $this->opciones['parametr']], 'formhref' => 1,
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
    public function edit($agtaller,AgSubtema $objetoxx)
    {
        $this->opciones['parametr']=[$agtaller,$objetoxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'].'.talleres', [$agtaller]],
                'formhref' => 2, 'tituloxx' => 'Volver a Talleres', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], [$agtaller]],
                'formhref' => 2, 'tituloxx' => 'Volver a Subtemas', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'Editar', 'routingx' => [$this->opciones['routxxxx'] . '.editar', $this->opciones['parametr']],
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
                $objetoxx = AgSubtema::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $subtemax = $this->transaccion($dataxxxx, $objectx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$subtemax->ag_taller_id, $subtemax->id])
            ->with('info', $infoxxxx);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($agtaller,AgSubtemaEditarRequest $request, AgSubtema $objetoxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['ag_tema_id'] = $agtaller;
        return $this->grabar($dataxxxx, $objetoxx, 'Subtema actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($agtaller, AgSubtema $objetoxx)
    {

        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';

        return redirect()->route($this->opciones['routxxxx'],[$agtaller])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
