<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgTtemaCrearRequest;
use App\Http\Requests\Acciones\Grupales\AgTtemaEditarRequest;
use App\Models\Acciones\Grupales\AgTaller;
use App\Models\Acciones\Grupales\AgTallerAgTema;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\Indicadores\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgTallertemaController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'permisox' => 'agtema',
            'parametr' => [],
            'rutacarp' => 'Acciones.Grupales.Agttema.',
            'tituloxx' => 'Taller-Tema',
            'routinde' => 'ttema',
            'volverax' => 'Volver a Talleres-Temas',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['readonly'] = '';
        $this->opciones['vercrear'] = '';
        $this->opciones['rutaxxxx'] = 'ttema';
        $this->opciones['routnuev'] = 'ttema';
        $this->opciones['routxxxx'] = 'ttema';

        $this->opciones['botoform'] = [
            ['mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
            'formhref' => 2, 'tituloxx' => 'Talleres ', 'clasexxx' => 'btn btn-sm btn-primary'],
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->opciones['titunuev'] = 'Nuevo Taller-Tema';
        $this->opciones['titulist'] = 'Lista de Talleres-Temas';
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'Acciones/Grupales/Agttema/botones/botonesapi'],
        ];

        $this->opciones['urlxxxxx'] = 'api/agr/ttemas';
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'ÁREA'],
            ['td' => 'TEMA'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'ag_temas.id'],
            ['data' => 'nombre', 'name' => 'areas.nombre'],
            ['data' => 's_tema', 'name' => 'ag_temas.s_tema'],
            ['data' => 'sis_esta_id', 'name' => 'ag_temas.sis_esta_id'],
        ];

        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }

    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $this->opciones['tallerxx'] = AgTaller::comb( true, false);
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
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
    public function store(AgTtemaCrearRequest $request)
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
    public function edit(AgTema $objetoxx)
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
                $objetoxx->ag_tallers()->attach([$dataxxxx['ag_taller_id']=>['sis_esta_id'=>1, 'user_crea_id'=>Auth::user()->id, 'user_edita_id'=>Auth::user()->id]]);
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
    public function update(AgTtemaEditarRequest $request, AgTema $objetoxx)
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
    public function destroy(AgTema $objetoxx)
    {

        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';

        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
