<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgTallerCrearRequest;
use App\Http\Requests\Acciones\Grupales\AgTallerEditarRequest;
use App\Models\Acciones\Grupales\AgTaller;
use Illuminate\Http\Request;

class AgTallerController extends Controller
{
    private $opciones;
    public function __construct()
    {

        $this->opciones = [
            'permisox' => 'agtaller',
            'parametr' => [],
            'rutacarp' => 'Acciones.Grupales.Agtaller.',
            'tituloxx' => 'TALLER',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'agrtaller';
        $this->opciones['routnuev'] = 'agrtaller';
        $this->opciones['routxxxx'] = 'agrtaller';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($agtemaid)
    {
        $this->opciones['parametr'] = [$agtemaid];
        $this->opciones['titunuev'] = 'NUEVO TALLER';
        $this->opciones['titulist'] = 'LISTA DE TALLER';
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'Acciones.Grupales/Agtaller/botones/botonesapi'],
            ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components/botones/estadoxx'],
        ];

        $this->opciones['urlxxxxx'] = 'api/agr/talleres';
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'TALLER'],
            ['td' => 'DESCRIPCIÓN'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns','name' => 'btns'],
            ['data' => 'id','name' => 'ag_tallers.id'],
            ['data' => 's_taller','name' => 'ag_tallers.s_taller'],
            ['data' => 's_descripcion','name' => 'ag_tallers.s_descripcion'],
            ['data' => 's_estado','name' => 'sis_estas.s_estado'],

        ];
        return view($this->opciones['rutacarp'] .'index', ['todoxxxx' => $this->opciones]);
    }

    public function temas()
    {
        $this->opciones['vercrear'] = '';
        $this->opciones['titunuev'] = 'Nuevo Sub Tipo de Segumineto';
        $this->opciones['titulist'] = 'LISTA DE TEMAS';
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'Acciones.Grupales/Agtaller/botones/apitemas'],
        ];

        $this->opciones['urlxxxxx'] = 'api/agr/tematalleres';
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'TEMA'],
            ['td' => 'ÁREA'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'ag_temas.id'],
            ['data' => 's_tema', 'name' => 'ag_temas.s_tema'],
            ['data' => 'nombre', 'name' => 'areas.nombre'],
            ['data' => 'sis_esta_id', 'name' => 'ag_temas.sis_esta_id'],
        ];
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {



        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo

        if ($nombobje != '') {
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id == 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones[$nombobje] = $objetoxx;
        }

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['tituloxx'];
        return view($this->opciones['rutacarp'].$vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($agtemaid)
    {
        $this->opciones['parametr'] = [$agtemaid];
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], $this->opciones['parametr']],
                'formhref' => 2, 'tituloxx' => 'VOLVER A TALLERES', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar',
                $this->opciones['parametr']],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        return $this->view('', '', 'Crear', 'crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $agtemaxx=AgTaller::transaccion($dataxxxx, $objectx);
        return redirect()
            ->route('agrtaller.editar', [$agtemaxx->ag_tema_id,$agtemaxx->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($agtemaid,AgTallerCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $dataxxxx['ag_tema_id']=$agtemaid;
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($agtemaid,AgTaller $objetoxx)
    {
        $this->opciones['parametr'] = [$agtemaid,$objetoxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'].'.temas', []],
                'formhref' => 2, 'tituloxx' => 'Volver a Temas', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], [$agtemaid]],
                'formhref' => 2, 'tituloxx' => 'Volver a Talleres', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => $objetoxx->sis_esta_id == 1 ? 'INACTIVAR' : 'ACTIVAR', 'routingx' => [$this->opciones['routxxxx'], $this->opciones['parametr']], 'formhref' => 1,
                'tituloxx' => '', 'clasexxx' => $objetoxx->sis_esta_id == 1 ? 'btn btn-sm btn-danger' : 'btn btn-sm btn-success'
            ];
        return $this->view($objetoxx,  'modeloxx', 'Ver', 'ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($agtemaid,AgTaller $objetoxx)
    {
        $this->opciones['parametr']=[$agtemaid,$objetoxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'].'.temas', []],
                'formhref' => 2, 'tituloxx' => 'Volver a Temas', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], [$agtemaid]],
                'formhref' => 2, 'tituloxx' => 'Volver a Talleres', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', $this->opciones['parametr']],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view($objetoxx,  'modeloxx', 'Editar', 'editar');
    }

    public function update($agtemaid,AgTallerEditarRequest $request, AgTaller $objetoxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['ag_tema_id']=$agtemaid;
        return $this->grabar($dataxxxx, $objetoxx, 'Taller actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($agtemaid,AgTaller $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route($this->opciones['routxxxx'],[$agtemaid])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
