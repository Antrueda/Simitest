<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\SisFsoporteCrearRequest;
use App\Http\Requests\SisFsoporteEditarRequest;
use App\Models\Sistema\SisActividad;
use App\Models\Sistema\SisDocfuen;
use App\Models\Sistema\SisDocumentoFuente;
use App\Models\Sistema\SisFsoporte;
use Illuminate\Http\Request;

class SisFsoporteController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:fsoporte-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:fsoporte-crear'], ['only' => ['index, show, create, store']]);
        $this->middleware(['permission:fsoporte-editar'], ['only' => ['index, show, edit, update']]);
        $this->middleware(['permission:fsoporte-borrar'], ['only' => ['index, show, destroy']]);
        $this->opciones = [
            'tituloxx' => 'Fuente Soporte',
            'rutaxxxx' => 'fsoporte',
            'accionxx' => '',
            'rutacarp' => 'administracion.fsoporte.',
            'volverax' => 'Volver a Fuente Soporte',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'fsoporte',
            'modeloxx' => '',
            'permisox' => 'fsoporte',
            'routxxxx' => 'fsoporte',
            'routinde' => 'fsoporte',
            'parametr' => [],
            'urlxxxxx' => 'api/sis/fsoporte',
            'routnuev' => 'fsoporte',
            'nuevoxxx' => 'Nuevo Registro',
        ];
        $this->opciones['cabecera'] = [
            ['td' => 'FUENTE SOPORTE'],
            ['td' => 'ACTIVIDAD'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'nombre', 'name' => 'sis_fsoporte.nombre'],
            ['data' => 'sis_actividad_id', 'name' => 'sis_actividads.nombre as sis_actividad_id'],

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
        $this->opciones['sis_actividad_id'] = [''=>'Seleccione'];
        $this->opciones['docufuen'] = SisDocfuen::combo(true, false);

        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo

        if ($nombobje != '') {
            $objetoxx->sis_docfuen_id=$objetoxx->sis_actividad->sisDocumentoFuente->id;
            $this->opciones['sis_actividad_id'] = SisActividad::combo($objetoxx->sis_docfuen_id,true, false);
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id == 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones[$nombobje] = $objetoxx;
        }

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
        return view($this->opciones['rutacarp'] . $vistaxxx, ['todoxxxx' => $this->opciones]);
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
            ->route('fsoporte.editar', [SisFsoporte::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SisFsoporteCrearRequest $request)
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
    public function show(SisFsoporte $objetoxx)
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
    public function edit(SisFsoporte $objetoxx)
    {
        $this->opciones['actualiz'] = '';
        return $this->view($objetoxx,  'modeloxx', 'Editar', 'editar');
    }

    public function update(SisFsoporteEditarRequest $request, SisFsoporte $objetoxx)
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
    public function destroy(SisFsoporte $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('li')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
