<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SisCargoCrearRequest;
use App\Http\Requests\SisCargoEditarRequest;
use App\Models\sistema\SisCargo;
use App\Models\sistema\SisTabla;

class SisCargoController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:siscargo-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:siscargo-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
        $this->middleware(['permission:siscargo-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
        $this->middleware(['permission:siscargo-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
        $this->opciones = [
            'tituloxx' => 'Cargos',
            'rutaxxxx' => 'sis.cargo',
            'rutacarp' => 'administracion.cargo.',
            'accionxx' => '',
            'volverax' => 'Cargos',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'cargo',
            'modeloxx' => '',
            'permisox' => 'siscargo',
            'routxxxx' => 'sis.cargo',
            'routinde' => 'sis.cargo',
            'parametr' => [],
            'urlxxxxx' => 'api/sis/cargo',
            'routnuev' => 'sis.cargo',
            'nuevoxxx' => 'Nuevo Registro'
        ];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'CARGO'],
            ['td' => 'TIEMPO STANDARD'],
            ['td' => 'TIEMPO GABELA'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'id'],
            ['data' => 's_cargo', 'name' => 'sis_cargos.s_cargo'],
            ['data' => 'itiestan', 'name' => 'sis_cargos.itiestan'],
            ['data' => 'itiegabe', 'name' => 'sis_cargos.itiegabe'],
            ['data' => 'sis_esta_id', 'name' => 'sis_esta_id'],
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

        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo

        $this->opciones['stablaxx'] = SisTabla::combo('', true, false);
        if ($nombobje != '') {
            $objetoxx->dtiestan = date("Y-m-d", strtotime(date('Y-m-d', time()) . "- $objetoxx->itiestan days"));
            $objetoxx->dtiegabe = date("Y-m-d", strtotime(date('Y-m-d', time()) . "- $objetoxx->itiegabe days"));

            $this->opciones[$nombobje] = $objetoxx;
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
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
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {

        return redirect()
            ->route('sis.cargo.editar', [SisCargo::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SisCargoCrearRequest $request)
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
    public function show(SisCargo $objetoxx)
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
    public function edit(SisCargo $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'editar');
    }

    public function update(SisCargoEditarRequest $request, SisCargo $objetoxx)
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
    public function destroy(SisCargo $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('sis.cargo')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
