<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InDocPreguntaCrearRequest;
use App\Http\Requests\Indicadores\InDocPreguntaEditarRequest;
use App\Models\Indicadores\InDocPregunta;
use App\Models\Indicadores\InLigru;
use App\Models\Indicadores\InPregunta;
use App\Models\sistema\SisEsta;
use App\Traits\Pestanias;

class InDocPreguntaController extends Controller
{
    use Pestanias;
    private $opciones;
    public function __construct()
    {
        $this->opciones = [
            'cardhead' => '', // titulo para las pestañas hijas
            'cardheap' => '', // titulo para las pestañas padres
            'readonly' => '', // para cuando se esta por ver
            'permisox' => 'documentoFuente', // hace referencia al permiso que se ha dado en el route
            'parametr' => [], // parametros que puede tener el route
            'rutacarp' => 'Indicadores.Admin.', // carpeta padre para las pestañas
            'tituloxx' => '', // se asigna en el create, edit y en el show
            'slotxxxy' => 'diagnost', // indica cual es la pestaña padre que debe estar activa
            'slotxxxx' => 'pregunta', // indica cual es la pestaña hija que debe estar activa
            'carpetax' => 'DocPregunta', // carpeta a la que accede el controlador
            'indecrea' => false,    // false indica que no debe estar dentro una pestaña, 
            //true indica que debe estar dentro de una pestaña
            'esindexx' => false  // true indica que debe mostrar el index y false el formulario
        ];
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-leer'], ['only' => ['index', 'show']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-crear'], ['only' => ['index', 'show', 'create', 'store', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-editar'], ['only' => ['index', 'show', 'edit', 'update', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-borrar'], ['only' => ['index', 'show', 'destroy']]);
        $this->opciones['rutaxxxx'] = 'grupregu';
        $this->opciones['routnuev'] = 'grupregu';
        $this->opciones['routxxxx'] = 'grupregu';
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A PREGUNTAS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index($padrexxx)
    {
        $padrexxx = InLigru::where('id', $padrexxx)->first();
        $this->opciones['pestania'] = $this->getAreas([
            'tablaxxx' => $this->opciones['slotxxxx'], 'padrexxx' => $padrexxx, 'routxxxx' => $this->opciones['routxxxx']
        ]);

        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['cardheap'] = 'Area: ' . $padrexxx->nombre;

        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'ASIGNACION PREGUNTA',
                'titulist' => 'LISTA DE PREGUNTAS ASIGNADAS',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx->id],
                    ['campoxxx' => 'puededit', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-editar') ? true : false],
                    ['campoxxx' => 'puedasig', 'dataxxxx' => auth()->user()->can('inrespuesta-crear') ? true : false],

                ],
                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => 'api/indicadores/docpreguntas',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'NUMERO'],
                    ['td' => 'PREGUNTA'],
                    ['td' => 'GRUPO'],
                    ['td' => 'INDICADOR'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'in_doc_fuentes.id'],
                    ['data' => 's_numero', 'name' => 'sis_tcampos.s_numero'],
                    ['data' => 's_pregunta', 'name' => 'in_preguntas.s_pregunta'],
                    ['data' => 'in_ligru_id', 'name' => 'in_doc_fuentes.in_ligru_id'],

                    ['data' => 's_indicador', 'name' => 'in_indicadors.s_indicador'],
                    ['data' => 's_estado', 'name' => 'in_doc_fuentes.s_estado'],
                ],
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => 'grupregu',
                'parametr' => [$padrexxx->id],
                'tablaxxx' => 'tablaprincipal',
            ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    private function view($dataxxxx)
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        /**
         * indica si se esta actualizando o viendo
         */
        $seleccio = 0;
        if ($dataxxxx['objetoxx'] != '') {
            $seleccio = $dataxxxx['objetoxx']->sis_tcampo_id;
            $this->opciones['modeloxx'] = $dataxxxx['objetoxx'];
        }
        $this->opciones['pregunta'] = InPregunta::getPreguntas(
            [
                'seleccio' => $seleccio,
                'cabecera' => true,
                'ajaxxxxx' => false,
                'grupoxxx' => $this->opciones['grupoxxx'],
            ]
        );

        /**
         * se crea la funcionalidad de las pestañas para la asignacion de preguntas al grupo
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
        $padrexxx = InLigru::find($padrexxx);
        $this->opciones['grupoxxx'] = $padrexxx;
        $this->opciones['grupoidx'] = [$padrexxx->id => $padrexxx->id];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->in_base_fuente->in_fuente->in_indicador->area->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['indecrea'] = false;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['objetoxx' => '', 'accionxx' => 'Crear', 'padrexxx' => $padrexxx]);
    }

    public function store(InDocPreguntaCrearRequest $request)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }
    public function show(InDocPregunta $objetoxx)
    {
        $padrexxx = $objetoxx->in_ligru;
        $this->opciones['grupoxxx'] = $padrexxx;
        $this->opciones['grupoidx'] = [$padrexxx->id => $padrexxx->id];
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->in_base_fuente->in_fuente->in_indicador->area->nombre;
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$objetoxx->id];
        return $this->view(['objetoxx' => $objetoxx, 'accionxx' => 'Ver', 'padrexxx' => $padrexxx]);
    }

    public function edit(InDocPregunta $objetoxx)
    {
        $padrexxx = $objetoxx->in_ligru;
        $this->opciones['grupoxxx'] = $padrexxx;
        $this->opciones['grupoidx'] = [$padrexxx->id => $padrexxx->id];
        $this->opciones['tituloxx'] = 'ASIGNAR LÍNEA BASE AL INDICADOR ';
        $this->opciones['cardhead'] = 'INDICADOR: ' . $objetoxx->s_indicador;
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];

        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$objetoxx->id];

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR',
                'formhref' => 1, 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        $this->opciones['botoform'][] =
            [
                'mostrars' => true,  'routingx' => ['pregresp', [$objetoxx->id]],
                'formhref' => 2, 'tituloxx' => 'ASIGANAR R', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['objetoxx' => $objetoxx, 'accionxx' => 'Editar', 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $indicado = InDocPregunta::transaccion($dataxxxx, $objectx);

        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$indicado->id])
            ->with('info', $infoxxxx);
    }

    public function update(InDocPreguntaEditarRequest  $request, InDocPregunta $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

    public function destroy(InDocPregunta $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
