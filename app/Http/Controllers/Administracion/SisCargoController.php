<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SisCargoCrearRequest;
use App\Http\Requests\SisCargoEditarRequest;
use App\Models\Sistema\SisCargo;
use App\Models\Sistema\SisEsta;
use App\Models\Sistema\SisTabla;
use App\Models\Usuario\Estusuario;

class SisCargoController extends Controller
{
    private $opciones;
    public function __construct()
    {

        $this->opciones = [
            'tituloxx' => 'CARGOS',
            'rutaxxxx' => 'sis.cargo',
            'rutacarp' => 'administracion.cargo.',
            'accionxx' => '',
            'volverax' => 'CARGOS',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'cargo',
            'modeloxx' => '',
            'permisox' => 'siscargo',
            'routxxxx' => 'sis.cargo',
            'routinde' => 'sis.cargo',
            'parametr' => [],
            'urlxxxxx' => 'api/sis/cargo',
            'routnuev' => 'sis.cargo',
            'nuevoxxx' => 'NUEVO REGISTRO',
            'fechcrea' => '',
            'fechedit' => '',
            'usercrea' => '',
            'useredit' => '',
        ];


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
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
        $estadoid = 0;
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        $this->opciones['sis_esta_id'] = SisEsta::combo(['cabecera' => true, 'esajaxxx' => false]);
        $this->opciones['stablaxx'] = SisTabla::combo('', true, false);
        if ($nombobje != '') {
            $objetoxx->dtiestan = date("Y-m-d", strtotime(date('Y-m-d', time()) . "- $objetoxx->itiestan days"));
            $objetoxx->dtiegabe = date("Y-m-d", strtotime(date('Y-m-d', time()) . "- $objetoxx->itiegabe days"));
            $objetoxx->dtigafin = date("Y-m-d", strtotime(date('Y-m-d', time()) . "- $objetoxx->itigafin days"));
            $this->opciones[$nombobje] = $objetoxx;

            $this->opciones['fechcrea'] = $objetoxx->created_at;
            $this->opciones['fechedit'] = $objetoxx->updated_at;
            $this->opciones['usercrea'] = $objetoxx->creador->name;
            $this->opciones['useredit'] = $objetoxx->editor->name;
            $estadoid= $objetoxx->sis_esta_id;
        }
        $this->opciones['motivoxx'] = Estusuario::combo([
            'cabecera' => true,
            'esajaxxx' => false,
            'estadoid' => $estadoid,
            'formular' => 2326
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
        return $this->view(true, '', 'CREAR', $this->opciones['rutacarp'] . 'crear');
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

    public function getMotivos(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2326])
            );
        }
    }
}
