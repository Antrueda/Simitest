<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\SisEpsCrearRequest;
use App\Http\Requests\SisEpsEditarRequest;
use App\Models\Sistema\SisEntidadSalud;
use App\Models\Tema;

use Illuminate\Http\Request;

class EpsController extends Controller
{
    private $opciones;
    public function __construct()
    {

        $this->opciones = [
            'tituloxx' => 'Entidad salud',
            'rutaxxxx' => 'eps',
            'accionxx' => '',
            'rutacarp' => 'administracion.eps.',
            'volverax' => 'Volver a Entidad salud',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'eps',
            'modeloxx' => '',
            'permisox' => 'eps',
            'routxxxx' => 'eps',
            'routinde' => 'eps',
            'parametr' => [],
            'urlxxxxx' => 'api/sis/eps',
            'routnuev' => 'eps',
            'nuevoxxx' => 'Nuevo Registro',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['cabecera'] = [
            ['td' => 'ENTIDAD'],
            ['td' => 'TIPO DE ENTIDAD'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 's_eps', 'name' => 'sis_ep.s_eps'],
            ['data' => 'i_prm_teps_id', 'name' => 'parametros.nombre as i_prm_teps_id'],

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
        $this->opciones['i_prm_teps_id'] = [];
        foreach(Tema::combo(21 ,true, false) as $key=>$temaxxxx){
            if($key!=168)
            {
                     $this->opciones['i_prm_teps_id'][$key] = $temaxxxx;
            }

        }


        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo

        if ($nombobje != '') {
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id == 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones[$nombobje] = $objetoxx;
        }

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['tituloxx'];
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
            ->route('eps.editar', [SisEntidadSalud::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SisEpsCrearRequest $request)
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
    public function show(SisEntidadSalud $objetoxx)
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
    public function edit(SisEntidadSalud $objetoxx)
    {
        $this->opciones['actualiz'] = '';
        return $this->view($objetoxx,  'modeloxx', 'Editar', 'editar');
    }

    public function update(SisEpsEditarRequest $request, SisEntidadSalud $objetoxx)
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
    public function destroy(SisEntidadSalud $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('li')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
