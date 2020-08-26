<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InValidacionCrearRequest;
use App\Http\Requests\Indicadores\InValidacionEditarRequest;
use App\Models\Indicadores\Area;
use App\Models\Indicadores\InFuente;
use App\Models\Indicadores\InPregunta;
use App\Models\Indicadores\InValidacion;
use App\Models\Sistema\SisDocumentoFuente;
use App\Models\Sistema\SisTabla;
use App\Models\Tema;
use Illuminate\Http\Request;

class InValidacionController extends Controller
{

    private $opciones;
    public function __construct()
    {

        $this->opciones = [
            'tituloxx' => 'Validaciones',
            'rutaxxxx' => 'va.validacion',
            'accionxx' => '',
            'rutacarp' => 'Indicadores.Admin.Validacion.',
            'volverax' => 'Validaciones',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Validacion',
            'modeloxx' => '',

            'permisox' => 'invalidacion',
            'routxxxx' => 'va.validacion',
            'routinde' => 'va',
            'parametr' => [],
            'urlxxxxx' => 'api/indicadores/basedocumen',
            'routnuev' => 'va.validacion',
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
            ['td' => 'PREGUNTA'],
            ['td' => 'TABLA'],
            ['td' => 'CAMPO'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'in_validacions.id'],
            ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
            ['data' => 's_pregunta', 'name' => 'in_preguntas.s_pregunta'],
            ['data' => 's_tabla', 'name' => 'sis_tablas.s_descripcion as s_tabla'],
            ['data' => 's_campo', 'name' => 'sis_campo_tablas.s_descripcion as s_campo'],
            ['data' => 'sis_esta_id', 'name' => 'in_validacions.sis_esta_id'],
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
        $this->opciones['areasxxx'] = Area::combo('', true, false);
        $this->opciones['docufuen'] = SisDocumentoFuente::combo(true, false);
        $this->opciones['indicado'] = ['' => 'Seleccione'];
        $this->opciones['linebase'] = ['' => 'Seleccione'];
        $this->opciones['pregindi'] = InPregunta::combo(true, false);
        $this->opciones['activida'] = ['' => 'Seleccione'];
        $this->opciones['stablaxx'] = SisTabla::combo('', true, false);
        $this->opciones['respuest'] = Tema::combo(297, false, true);

        $this->opciones['scampoxx'] = ['' => 'Seleccione'];
        if ($nombobje != '') {
            $objetoxx->area_id = $objetoxx->in_fuente->in_indicador->area_id;
            $objetoxx->in_indicador_id = $objetoxx->in_fuente->in_indicador_id;
            $this->opciones['indicado'] = Area::combo($objetoxx->area_id, true, false);
            $this->opciones['linebase'] = InFuente::combo($objetoxx->in_indicador_id, true, false);
            //$this->opciones['activida'] = SisActividad::combo($objetoxx->sis_actividad_id, true, false);
            $this->opciones[$nombobje] = $objetoxx;
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id == 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones['scampoxx'] = SisTabla::combo($objetoxx->sis_tabla_id, true, false);
            $respauxi = $this->opciones['respuest'];
            $this->opciones['respuest'] = [];
            foreach ($objetoxx->respuestas as $selected) {
                $this->opciones['selected'][] = ['valuexxx' => $selected->id, 'optionxx' => $selected->nombre];
            }
            foreach ($respauxi as $respuest) {
                $estaxxxx = true;
                foreach ($objetoxx->respuestas as $selected) {

                    if ($selected->id == $respuest['valuexxx']) {
                        $estaxxxx = false;
                    }
                }
                if ($estaxxxx) {
                    $this->opciones['respuest'][] = $respuest;
                }
            }
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
            ->route('va.validacion.editar', [InValidacion::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InValidacionCrearRequest $request)
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
    public function show(InValidacion $objetoxx)
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
    public function edit(InValidacion $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'editar');
    }

    public function update(InValidacionEditarRequest $request, InValidacion $objetoxx)
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
    public function destroy(InValidacion $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('va')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
