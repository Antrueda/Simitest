<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InRespuestaCrearRequest;
use App\Http\Requests\Indicadores\InRespuestaEditarRequest;
use App\Models\Indicadores\InDocPregunta;
use App\Models\Indicadores\InRespu;
use App\Models\sistema\SisEsta;
use App\Traits\Combos\CombosTrait;
use App\Traits\Pestanias;

class InRespuestaController extends Controller
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
            'permisox' => 'inrespuesta', // hace referencia al permiso que se ha dado en el route
            'parametr' => [], // parametros que puede tener el route
            'rutacarp' => 'Indicadores.Admin.', // carpeta padre para las pestañas
            'tituloxx' => '', // se asigna en el create, edit y en el show
            'slotxxxy' => 'diagnost', // indica cual es la pestaña padre que debe estar activa
            'slotxxxx' => 'respuest', // indica cual es la pestaña hija que debe estar activa
            'carpetax' => 'Respuesta', // carpeta a la que accede el controlador
            'indecrea' => false,    // false indica que no debe estar dentro una pestaña, 
            //true indica que debe estar dentro de una pestaña
            'esindexx' => false  // true indica que debe mostrar el index y false el formulario
        ];
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-leer'], ['only' => ['index', 'show']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-crear'], ['only' => ['index', 'show', 'create', 'store', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-editar'], ['only' => ['index', 'show', 'edit', 'update', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-borrar'], ['only' => ['index', 'show', 'destroy']]);
        $this->opciones['rutaxxxx'] = 'pregresp';
        $this->opciones['routnuev'] = 'pregresp';
        $this->opciones['routxxxx'] = 'pregresp';
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A REPUESTAS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index($padrexxx)
    {
        $padrexxx = InDocPregunta::find($padrexxx);
        $pregunta = $padrexxx->sis_tcampo;
        $this->opciones['cardhead'] = 'PREGUNTA: '.$pregunta->s_numero . ' ' . $pregunta->in_pregunta->s_pregunta;
        $this->opciones['pestania'] = $this->getAreas([
            'tablaxxx' => $this->opciones['slotxxxx'], 'padrexxx' => $padrexxx, 'routxxxx' => $this->opciones['routxxxx']
        ]);
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['cardheap'] = 'Area: ' . $padrexxx->in_ligru->in_base_fuente->in_fuente->in_indicador->area->nombre;

        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'RESPUESTA',
                'titulist' => 'LISTA DE RESPUESTAS',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx->id],
                    ['campoxxx' => 'puededit', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-editar') ? true : false],
                ],
                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => 'api/indicadores/pregrespuestas',
                'cabecera' => [
                    ['td' => 'ID'],

                    ['td' => 'RESPUESTA'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'in_doc_fuentes.id'],
                    ['data' => 'nombre', 'name' => 'parametros.nombre'],
                    ['data' => 's_estado', 'name' => 'in_doc_fuentes.s_estado'],
                ],
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => 'pregresp',
                'parametr' => [$padrexxx->id],
                'tablaxxx' => 'tablaprincipal',
            ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    private function view($dataxxxx)
    {
        $this->opciones['grupoxxx'] = $dataxxxx['padrexxx']->in_ligru;
        $this->opciones['botoform'][0]['routingx'][1] = [$dataxxxx['padrexxx']->id];
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['cardheap'] = 'ÁREA: ' .
            $dataxxxx['padrexxx']->in_ligru->in_base_fuente->in_fuente->in_indicador->area->nombre;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        /**
         * indica si se esta actualizando o viendo
         */
        if ($dataxxxx['objetoxx'] != '') {
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
        $this->opciones['respuest'] = $this->getInRespuestas(['padrexxx' => $dataxxxx['padrexxx'], 'cabecera' => true, 'ajaxxxxx' => false]);
        $this->opciones['pregunta'] = [$dataxxxx['padrexxx']->id => $dataxxxx['padrexxx']->sis_tcampo->in_pregunta->s_pregunta];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function create($padrexxx)
    {
        $padrexxx = InDocPregunta::find($padrexxx);
        $pregunta = $padrexxx->sis_tcampo;
        $this->opciones['cardhead'] = 'PREGUNTA: '.$pregunta->s_numero . ' ' . $pregunta->in_pregunta->s_pregunta;
        $this->opciones['indecrea'] = false;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['objetoxx' => '', 'accionxx' => 'Crear', 'padrexxx' => $padrexxx]);
    }

    public function store(InRespuestaCrearRequest $request)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }
    public function show(InRespu $objetoxx)
    {
        $pregunta = $objetoxx->in_doc_pregunta->sis_tcampo;
        $this->opciones['cardhead'] = 'PREGUNTA: '.$pregunta->s_numero . ' ' . $pregunta->in_pregunta->s_pregunta;
        return $this->view(['objetoxx' => $objetoxx, 'accionxx' => 'Ver', 'padrexxx' => $objetoxx->in_doc_pregunta]);
    }

    public function edit(InRespu $objetoxx)
    {
        $pregunta = $objetoxx->in_doc_pregunta->sis_tcampo;
        $this->opciones['cardhead'] = 'PREGUNTA: '.$pregunta->s_numero . ' ' . $pregunta->in_pregunta->s_pregunta;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['objetoxx' => $objetoxx, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx->in_doc_pregunta]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $indicado = InRespu::transaccion($dataxxxx, $objectx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$indicado->id])
            ->with('info', $infoxxxx);
    }

    public function update(InRespuestaEditarRequest  $request, InRespu $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

    public function destroy(InRespu $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
