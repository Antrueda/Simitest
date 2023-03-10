<?php
namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgConvenioCrearRequest;
use App\Http\Requests\Acciones\Grupales\AgConvenioEditarRequest;
use App\Models\Acciones\Grupales\AgConvenio;
use App\Models\Sistema\SisEntidad;
use App\Models\Tema;
use Illuminate\Http\Request;

class AgConvenioController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->opciones['permisox']='agconvenio';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones = [
            'tituloxx' => 'CONVENIO',
            'rutaxxxx' => 'ag.conv.convenio',
            'accionxx' => '',
            'rutacarp'=>'Acciones.Grupales.Agconvenio.',
            'volverax' => 'VOLVER A CONVENIOS',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Agconvenio',
            'modeloxx' => '',
            'permisox' => 'agconvenio',
            'routxxxx' => 'ag.conv.convenio',
            'routinde' => 'ag.conv',
            'parametr' => [],
            'urlxxxxx' => 'api/ag/convenios',
            'routnuev' => 'ag.conv.convenio',
            'nuevoxxx' => 'Nuevo Registro'
        ];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'NOMBRE'],
            ['td' => 'NOMBRE ENTIDAD'],
            ['td' => 'TIPO CONVENIO'],
            ['td' => 'DESCRIPCIÓN'],
            ['td' => 'N° CONVENIO'],
            ['td' => 'FECHA DE SUBSCRIPCIÓN'],
            ['td' => 'FECHA DE TERMINACIÓN'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'ag_convenios.id'],
            ['data' => 's_convenio', 'name' => 'ag_convenios.s_convenio'],
            ['data' => 'i_prm_entidad_id', 'name' => 'parametros.nombre as i_prm_entidad_id'],
            ['data' => 'i_prm_tconvenio_id', 'name' => 'parametros.nombre as tconveni'],
            ['data' => 's_descripcion', 'name' => 'ag_convenios.s_descripción'],
            ['data' => 'i_nconvenio', 'name' => 'ag_convenios.i_nconvenio'],
            ['data' => 'd_subscrip', 'name' => 'ag_convenios.d_subscrip'],
            ['data' => 'd_terminac', 'name' => 'ag_convenios.d_terminac'],
            ['data' => 'sis_esta_id', 'name' => 'ag_convenios.sis_esta_id'],
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
        $this->opciones['umedidax'] = Tema::comboAsc(288, true, false);
        $this->opciones['tconbenio'] = SisEntidad::combo(true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';
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
            ->route('ag.conv.convenio.editar', [AgConvenio::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgConvenioCrearRequest $request)
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
    public function show(AgConvenio $objetoxx)
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
    public function edit(AgConvenio $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'Editar', 'editar');
    }

    public function update(AgConvenioEditarRequest $request, AgConvenio $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Convenio actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgConvenio $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('li')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
