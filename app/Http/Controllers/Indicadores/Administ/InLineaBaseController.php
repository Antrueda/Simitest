<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Models\Indicadores\Administ\InLineaBase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InLineaBaseCrearRequest;
use App\Http\Requests\Indicadores\InLineaBaseEditarRequest;
use App\Models\Tema;

class InLineaBaseController extends Controller
{
    private $opciones;
    public function __construct()
    {

        $this->opciones = [
            'tituloxx' => 'Linea Base',
            'rutaxxxx' => 'li.lineabase',
            'rutacarp' => 'Indicadores.Admin.Lineabase.',
            'accionxx' => '',
            'volverax' => 'Volver a Líneas Base',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Lineabase',
            'modeloxx' => '',
            'permisox' => 'inlineabase',
            'routxxxx' => 'li.lineabase',
            'routinde' => 'li',
            'parametr' => [],
            'urlxxxxx' => 'api/indicadores/lineabase',
            'routnuev' => 'li.lineabase',
            'nuevoxxx' => 'Nuevo Registro'
        ];


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'LÍNEA BASE'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns','name'=>'btns'],
            ['data' => 'id','name'=>'id'],
            ['data' => 's_linea_base','name'=>'s_linea_base'],
            ['data' => 'sis_esta_id','name'=>'sis_esta_id'],

        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view($this->opciones['rutacarp'].'index', ['todoxxxx' => $this->opciones]);
    }


    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {

        $this->opciones['categori'] = Tema::combo(295, true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo

        if ($nombobje != '') {
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id == 1 ? 'ACTIVO' : 'INACTIVO';
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
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'].'crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {

        return redirect()
            ->route('li.lineabase.editar', [InLineaBase::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InLineaBaseCrearRequest $request)
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
    public function show(InLineaBase $objetoxx)
    {
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'].'ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InLineaBase $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'].'editar');
    }

    public function update(InLineaBaseEditarRequest $request, InLineaBase $objetoxx)
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
    public function destroy(InLineaBase $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('li')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
