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
        $this->middleware(['permission:agtaller-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:agtaller-crear'], ['only' => ['index, show, create, store']]);
        $this->middleware(['permission:agtaller-editar'], ['only' => ['index, show, edit, update']]);
        $this->middleware(['permission:agtaller-borrar'], ['only' => ['index, show, destroy']]);
        $this->opciones = [
            'tituloxx' => 'Taller',
            'rutaxxxx' => 'agr.taller',
            'accionxx' => '',
            'rutacarp'=>'Acciones.Grupales.Agtaller.',
            'volverax' => 'Volver a talleres',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Agtaller',
            'modeloxx' => '',
            'permisox' => 'agtaller',
            'routxxxx' => 'agr.taller',
            'routinde' => 'agr',
            'parametr' => [],
            'urlxxxxx' => 'api/agr/talleres',
            'routnuev' => 'agr.taller',
            'nuevoxxx' => 'Nuevo Registro'
        ];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'TALLER'],
            ['td' => 'DESCRIPCION'],
          
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns','name' => 'btns'],
            ['data' => 'id','name' => 'id'],
            ['data' => 's_taller','name' => 's_taller'],
            ['data' => 's_descripcion','name' => 's_descripcion'],
            ['data' => 'sis_esta_id','name' => 'sis_esta_id'],

        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view($this->opciones['rutacarp'] .'index', ['todoxxxx' => $this->opciones]);
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
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
        return view($this->opciones['rutacarp'].$vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view('', '', 'Crear', 'crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {

        return redirect()
            ->route('agr.taller.editar', [AgTaller::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgTallerCrearRequest $request)
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
    public function show(AgTaller $objetoxx)
    {
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', 'ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AgTaller $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'Editar', 'editar');
    }

    public function update(AgTallerEditarRequest $request, AgTaller $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Taller actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgTaller $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('li')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
