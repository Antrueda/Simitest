<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\SisDependenciaCrearRequest;
use App\Http\Requests\SisDependenciaEditarRequest;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisDepartamento;
use App\Models\sistema\SisDependencia;
use App\Models\sistema\SisLocalidad;
use App\Models\sistema\SisMunicipio;
use App\Models\sistema\SisUpz;
use App\Models\Tema;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DependenciaController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:dependencia-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:dependencia-crear'], ['only' => ['index, show, create, store']]);
        $this->middleware(['permission:dependencia-editar'], ['only' => ['index, show, edit, update']]);
        $this->middleware(['permission:dependencia-borrar'], ['only' => ['index, show, destroy']]);
        $this->opciones = [
            'tituloxx' => 'Dependencia',
            'rutaxxxx' => 'dependencia',
            'accionxx' => '',
            'rutacarp' => 'administracion.dependencia.',
            'volverax' => 'Volver a Dependencias',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'dependencia',
            'modeloxx' => '',
            'permisox' => 'dependencia',
            'routxxxx' => 'dependencia',
            'routinde' => 'dependencia',
            'parametr' => [],
            'urlxxxxx' => 'api/sis/dependencia',
            'routnuev' => 'dependencia',
            'nuevoxxx' => 'Nuevo Registro',
        ];
        $this->opciones['cabecera'] = [
            ['td' => 'DEPENDENCIA'],
            ['td' => 'SEXO'],
            ['td' => 'DIRECCION'],
            ['td' => 'LOCALIDAD'],
            ['td' => 'BARRIO'],
            ['td' => 'TELÉFONO'],
            ['td' => 'CORREO'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'nombre', 'name' => 'sis_dependencias.nombre'],
            ['data' => 'i_prm_sexo_id', 'name' => 'parametros.nombre as i_prm_sexo_id'],
            ['data' => 's_direccion', 'name' => 'sis_dependencias.s_direccion'],
            ['data' => 'sis_localidad_id', 'name' => 'sis_localidads.s_localidad as sis_localidad_id'],
            ['data' => 'sis_barrio_id', 'name' => 'sis_barrios.s_barrio as sis_barrio_id'],
            ['data' => 's_telefono', 'name' => 'sis_dependencias.s_telefono'],
            ['data' => 's_correo', 'name' => 'sis_dependencias.s_correo'],
            ['data' => 'sis_esta_id', 'name' => 'sis_dependencias.sis_esta_id'],

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


        $this->opciones["urlxxxag"] = 'api/sis/servicio';
        $this->opciones['routxxxa'] = 'dependencia';
        $this->opciones['cabeceag'] = [
            ['td' => 'ID'],
            ['td' => 'SERVICIO'],
        ];
        $this->opciones['columnag'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'users.id'],
            ['data' => 'sis_servicio_id', 'name' => 'sis_servicios.s_servicio as sis_servicio_id'],

        ];

        $this->opciones["urlxxxas"] = 'api/sis/user';
        $this->opciones['routxxxb'] = 'dependencia';
        $this->opciones['cabeceas'] = [
            ['td' => 'ID'],
            ['td' => 'USUARIO'],
            ['td' => 'RESPONSABLE'],
        ];
        $this->opciones['columnas'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'users.id'],
            ['data' => 'name', 'name' => 'users.name'],
            ['data' => 'nombre', 'name' => 'parametros.nombre'],
        ];


        $this->opciones['i_prm_cvital_id'] = Tema::combo(311, true, false);
        $this->opciones['i_prm_tdependen_id'] = Tema::combo(192, true, false);
        $this->opciones['sis_dependencia_id'] = SisDependencia::combo(true, false);
        $this->opciones['i_prm_sexo_id'] = Tema::combo(11, true, false);
        $this->opciones['responsa'] = Tema::comboDesc(23, false, false);
        $this->opciones['sis_departamento_id'] = SisDepartamento::combo(2, false);
        $this->opciones['sis_municipio_id'] = ['' => 'Seleccione'];
        $this->opciones['sis_localidad_id'] = SisLocalidad::combo(true, false);
        $this->opciones['sis_upz_id'] = ['' => 'Seleccione'];
        $this->opciones['sis_barrio_id'] = ['' => 'Seleccione'];
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo

        if ($nombobje != '') {
            $objetoxx->dtiestan = date("Y-m-d", strtotime(date('Y-m-d', time()) . "- $objetoxx->itiestan days"));
            $objetoxx->dtiegabe = date("Y-m-d", strtotime(date('Y-m-d', time()) . "- $objetoxx->itiegabe days"));

            $this->opciones['sis_municipio_id'] = SisMunicipio::combo($objetoxx->sis_departamento_id, false);

            $barrioxx = $objetoxx->sis_upzbarri;
            $objetoxx->sis_upz_id = $barrioxx->sis_upz_id;
            $this->opciones['sis_upz_id'] = SisUpz::combo($barrioxx->sis_localidad_id, false);
            $this->opciones['sis_barrio_id'] = SisBarrio::combo($objetoxx->sis_localupz_id, false);
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
            ->route('dependencia.editar', [SisDependencia::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SisDependenciaCrearRequest $request)
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
    public function show(SisDependencia $objetoxx)
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
    public function edit(SisDependencia $objetoxx)
    {
        $this->opciones['actualiz'] = '';
        return $this->view($objetoxx,  'modeloxx', 'Editar', 'editar');
    }

    public function update(SisDependenciaEditarRequest $request, SisDependencia $objetoxx)
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
    public function destroy(SisDependencia $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('li')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
