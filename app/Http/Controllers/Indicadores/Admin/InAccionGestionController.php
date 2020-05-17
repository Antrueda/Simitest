<?php

namespace App\Http\Controllers\Indicadores\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InAccionGestionCrearRequest;
use App\Http\Requests\Indicadores\InAccionGestionEditarRequest;
use App\Models\Indicadores\InAccionGestion;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\sistema\SisActividad;
use App\Models\sistema\SisEsta;
use App\Models\Tema;
use App\Traits\Combos\CombosTrait;
use App\Traits\Pestanias;
use Illuminate\Http\Request;

class InAccionGestionController extends Controller
{
    use Pestanias;
    use CombosTrait;
    private $opciones;
    public function __construct()
    {
        $this->opciones = [
            'cardhead' => '', // titulo para las pestañas hijas
            'cardheap' => '', // titulo para las pestañas padres
            'readonly' => '', // para cuando se esta por ver
            'permisox' => 'inacciongestion', // hace referencia al permiso que se ha dado en el route
            'parametr' => [], // parametros que puede tener el route
            'rutacarp' => 'Indicadores.Admin.', // carpeta padre para las pestañas
            'tituloxx' => '', // se asigna en el create, edit y en el show
            'slotxxxy' => 'diagnost', // indica cual es la pestaña padre que debe estar activa
            'slotxxxx' => 'activida', // indica cual es la pestaña hija que debe estar activa
            'carpetax' => 'Agactivi', // carpeta a la que accede el controlador
            'indecrea' => false,    // false indica que no debe estar dentro una pestaña, 
            //true indica que debe estar dentro de una pestaña
            'esindexx' => false  // true indica que debe mostrar el index y false el formulario
        ];
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-leer'], ['only' => ['index', 'show']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-crear'], ['only' => ['index', 'show', 'create', 'store', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-editar'], ['only' => ['index', 'show', 'edit', 'update', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-borrar'], ['only' => ['index', 'show', 'destroy']]);
        $this->opciones['rutaxxxx'] = 'accigest';
        $this->opciones['routnuev'] = 'accigest';
        $this->opciones['routxxxx'] = 'accigest';
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER ACTIVIDADES', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index($padrexxx)
    {
        $padrexxx=InLineabaseNnaj::find($padrexxx);
        $sis_nnaj = $padrexxx->sis_nnaj->FiDatosBasico[0];

        $this->opciones['cardheap'] = 'NNAJ: ' . $sis_nnaj->s_primer_nombre . ' ' .
            $sis_nnaj->s_segundo_nombre . ' ' .
            $sis_nnaj->s_primer_apellido . ' ' .
            $sis_nnaj->s_segundo_apellido;
        $this->opciones['pestania'] = $this->getAreas([
            'tablaxxx' => $this->opciones['slotxxxx'], 'padrexxx' => $padrexxx, 'routxxxx' => $this->opciones['routxxxx']
        ]);
        $this->opciones['botoform'][0]['routingx'][1] = [$sis_nnaj->id];
        $this->opciones['parametr'] = [$sis_nnaj->id];


        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'ACTIVIDAD',
                'titulist' => 'LISTA ACTIVIDADES',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $sis_nnaj->id],
                    ['campoxxx' => 'puededit', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-editar') ? true : false],
                    ['campoxxx' => 'puedasig', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-editar') ? true : false],
                ],
                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => 'api/indicadores/baseactividades',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'ACTIVIDAD'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'in_doc_fuentes.id'],
                    ['data' => 'nombre', 'name' => 'parametros.nombre'],
                    ['data' => 's_estado', 'name' => 'in_doc_fuentes.s_estado'],
                ],
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => 'accigest',
                'parametr' => [$sis_nnaj->id],
                'tablaxxx' => 'tablaprincipal',
            ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    private function view($dataxxxx)
    {
        $this->opciones['lineabas']=[$dataxxxx['padrexxx']->id=>$dataxxxx['padrexxx']->in_fuente->in_linea_base->s_linea_base];
        $this->opciones['botoform'][0]['routingx'][1] = [$dataxxxx['padrexxx']->id];
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $sis_nnaj = $dataxxxx['padrexxx']->sis_nnaj->FiDatosBasico[0];
        $this->opciones['docufuen'] = $this->getDocBase(
            [
                'cabecera' => true,
                'ajaxxxxx' => false,
                'padrexxx' => $dataxxxx['padrexxx']->id
            ]
        );
        $this->opciones['ttiempox'] = Tema::combo(4, true, false);
        $this->opciones['fsoporte'] = ['' => 'Seleccione'];
        $this->opciones['activida'] = ['' => 'Seleccione'];
        $this->opciones['cardheap'] = 'NNAJ: ' . $sis_nnaj->s_primer_nombre . ' ' .
            $sis_nnaj->s_segundo_nombre . ' ' .
            $sis_nnaj->s_primer_apellido . ' ' .
            $sis_nnaj->s_segundo_apellido;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        /**
         * indica si se esta actualizando o viendo
         */
        if ($dataxxxx['objetoxx'] != '') {
            $this->opciones['activida'] = SisActividad::combo($dataxxxx['objetoxx']->sis_documento_fuente_id, true, false);
            $this->opciones['modeloxx'] = $dataxxxx['objetoxx'];
        }
        /**
         * se crea la funcionalidad de las pestañas para la asignacion de la respuesta a la pregunta
         * cuando se esta en el crear, editar o ver
         */
        $this->opciones['pestania'] = $this->getAreas([
            'tablaxxx' => $this->opciones['slotxxxx'],
            'padrexxx' => $dataxxxx['padrexxx'],
            'routxxxx' => $this->opciones['routxxxx']
        ]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function create($padrexxx)
    {
        $padrexxx = InLineabaseNnaj::find($padrexxx);
        $this->opciones['indecrea'] = false;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['objetoxx' => '', 'accionxx' => 'Crear', 'padrexxx' => $padrexxx]);
    }

    public function store(InAccionGestionCrearRequest $request)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }
    public function show(InAccionGestion $objetoxx)
    {

        return $this->view(['objetoxx' => $objetoxx, 'accionxx' => 'Ver', 'padrexxx' => $objetoxx->in_doc_pregunta]);
    }

    public function edit(InAccionGestion $objetoxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['objetoxx' => $objetoxx, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx->in_lineabase_nnaj]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $indicado = InAccionGestion::transaccion($dataxxxx, $objectx);

        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$indicado->id])
            ->with('info', $infoxxxx);
    }

    public function update(InAccionGestionEditarRequest  $request, InAccionGestion $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

    public function destroy(InAccionGestion $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }

    public function getPorcenta(Request $request)
    {
        if ($request->ajax()) { 
          
            $porcenta = InAccionGestion::where('in_lineabase_nnaj_id',$request->padrexxx)->sum('i_porcentaje');
            /** saber que porcentaje hace falta para el 100% */
            $totalxxx = 100 - $porcenta;
            $respusta = [];
            /** saber si el porcentaje que se esta ingresando es mayor al que hace falta para el 100% */
            if ($totalxxx < (int) $request->i_porcentaje) {
                $respusta = ['mostrarx' => 'show', 'msnxxxxx' => 'El porcentaje es superior al faltante: ' . $totalxxx, 'faltante' => $totalxxx];
            } else {
                $respusta = ['mostrarx' => 'hide', 'msnxxxxx' => '', 'faltante' => $request->i_porcentaje];
            }

            return response()->json($respusta);
        }
    }
}
