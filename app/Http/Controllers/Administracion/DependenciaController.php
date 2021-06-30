<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\SisDepenCrearRequest;
use App\Http\Requests\SisDepenEditarRequest;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisEsta;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisUpz;
use App\Models\Tema;
use App\Models\Usuario\Estusuario;
use Illuminate\Http\Request;

class DependenciaController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr'=>true,// true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'dependencia',
            'parametr' => [],
            'rutacarp' => 'administracion.dependencia.',
            'tituloxx' => 'DEPENDENCIAS',
            'carpetax' => 'Dependencia',
            'slotxxxx' => 'dependen',
            'indecrea' => false,
            'esindexx' => false,
            'tituhead' => '',
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

        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'dependencia';
        $this->opciones['routnuev'] = 'dependencia';
        $this->opciones['routxxxx'] = 'dependencia';

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A DEPENDENCIAS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->opciones['padrexxx'] = '';
        $this->opciones['indecrea'] = false;
        $this->opciones['esindexx'] = true;
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVA DEPENDENCIA',
                'titulist' => 'LISTA DE DEPENDENCIAS',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' =>
                    $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                ],

                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => 'api/sis/dependencia',
                'cabecera' => [
                    ['td' => 'DEPENDENCIA'],
                    ['td' => 'SEXO'],
                    ['td' => 'DIRECCION'],
                    ['td' => 'LOCALIDAD'],
                    ['td' => 'BARRIO'],
                    ['td' => 'TELÉFONO'],
                    ['td' => 'CORREO'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'nombre', 'name' => 'sis_depens.nombre'],
                    ['data' => 'sexo', 'name' => 'parametros.nombre as sexo'],
                    ['data' => 's_direccion', 'name' => 'sis_depens.s_direccion'],
                    ['data' => 'sis_localidad_id', 'name' => 'sis_localidads.s_localidad as sis_localidad_id'],
                    ['data' => 'sis_barrio_id', 'name' => 'sis_barrios.s_barrio as sis_barrio_id'],
                    ['data' => 's_telefono', 'name' => 'sis_depens.s_telefono'],
                    ['data' => 's_correo', 'name' => 'sis_depens.s_correo'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'dependencia',
                'permisox' => 'dependencia',
                'routxxxx' => 'dependencia',
                'parametr' => [],
            ]

        ];
        $this->opciones['accionxx']='index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {

        $this->opciones['indecrea'] = false;
        $this->opciones['padrexxx'] = '';
        $this->opciones['i_prm_cvital_id'] = Tema::comboAsc(311, true, false);
        $this->opciones['i_prm_tdependen_id'] = Tema::comboAsc(192, true, false);
        $this->opciones['i_prm_sexo_id'] = Tema::comboAsc(339, true, false);
        $this->opciones['responsa'] = Tema::comboDesc(23, false, false);
        $this->opciones['sis_departam_id'] = SisDepartam::combo(2, false);
        $this->opciones['sis_municipio_id'] = ['' => 'Seleccione'];
        $this->opciones['sis_localidad_id'] = SisLocalidad::combo(true, false);
        $this->opciones['sis_upz_id'] = ['' => 'Seleccione'];
        $this->opciones['sis_barrio_id'] = ['' => 'Seleccione'];
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => true, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        $estadoid = 0;
        if ($nombobje != '') {
            $this->opciones['padrexxx'] = $objetoxx->id;
            $this->opciones['pestpadr']=false;
            $objetoxx->dtiestan = date("Y-m-d", strtotime(date('Y-m-d', time()) . "- $objetoxx->itiestan days"));
            $objetoxx->dtiegabe = date("Y-m-d", strtotime(date('Y-m-d', time()) . "- $objetoxx->itiegabe days"));
            $objetoxx->dtigafin = date("Y-m-d", strtotime(date('Y-m-d', time()) . "- $objetoxx->itigafin days"));

           $this->opciones['sis_municipio_id'] = SisMunicipio::combo($objetoxx->sis_departam_id, false);

            $barrioxx = $objetoxx->sis_upzbarri;
            $objetoxx->sis_localidad_id = $barrioxx->sis_localupz->sis_localidad_id;
            $objetoxx->sis_upz_id = $barrioxx->sis_localupz->id;

            $this->opciones['sis_upz_id'] = SisUpz::combo($objetoxx->sis_localidad_id, false);
            $this->opciones['sis_barrio_id'] = SisBarrio::combo($objetoxx->sis_upz_id, false);
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
            'formular' => 2327
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
        $this->opciones['indecrea'] = true;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . '.pestanias');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SisDepenCrearRequest $request)
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
    public function show(SisDepen $objetoxx)
    {
        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->id];
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'] . 'pestanias');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SisDepen $objetoxx)
    {
        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'pestanias');
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [SisDepen::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SisDepenEditarRequest $request, SisDepen $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SisDepen $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];

        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';

        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }

    public function getMotivos(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2327])
            );
        }
    }
}
