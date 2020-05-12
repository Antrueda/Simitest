<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InDocPreguntaCrearRequest;
use App\Http\Requests\Indicadores\InDocPreguntaEditarRequest;
use App\Models\Indicadores\Area;
use App\Models\Indicadores\InDocPregunta;
use App\Models\Indicadores\InLigru;
use App\Models\Indicadores\InPregunta;
use App\Models\sistema\SisEsta;
use App\Models\User;

class InDocPreguntaController extends Controller
{

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
        $this->opciones['rutaxxxx'] = 'di.docindicador';
        $this->opciones['routnuev'] = 'di.docindicador';
        $this->opciones['routxxxx'] = 'di.docindicador';
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'].'.preguntas', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A PREGUNTAS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index(Area $padrexxx, InLigru $grupoxxx)
    {      
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id, $grupoxxx->id];
        $this->opciones['parametr'] = [$padrexxx->id, $grupoxxx->id];
        $this->opciones['cardheap'] = 'Area: ' . $padrexxx->nombre;

        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'ASIGNACION PREGUNTA',
                'titulist' => 'LISTA DE PREGUNTAS ASIGNADAS',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    [
                        'campoxxx' => 'botodata', 'dataxxxx' =>json_encode(
                        [
                            User::getPuede(['permisox' => $this->opciones['permisox'] . '-editar']),
                            User::getPuede(['permisox' => $this->opciones['permisox'] . '-leer']),
                            User::getPuede(['permisox' => $this->opciones['permisox'] . '-borrar']),
                        ])
                    ],
    
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadoxx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx->id],
                    ['campoxxx' => 'grupoxxx', 'dataxxxx' => $grupoxxx->id],
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
                'routxxxx' => 'di.docindicador',
                'parametr' => [$padrexxx->id, $grupoxxx->id],
                'tablaxxx' => 'tablaprincipal',
            ];
        $this->opciones['accionxx'] = 'index';
       return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $accionxx;
        /**
         * indica si se esta actualizando o viendo
         */
        $dataxxxx['seleccio'] = 0;
        if ($nombobje != '') {
            $dataxxxx['seleccio'] = $objetoxx->sis_tcampo_id;
            $this->opciones[$nombobje] = $objetoxx;
        }

        $dataxxxx['cabecera'] = true;
        $dataxxxx['ajaxxxxx'] = false;
        $dataxxxx['grupoxxx'] = $this->opciones['grupoxxx'];
        $this->opciones['pregunta'] = InPregunta::getPreguntas($dataxxxx);
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }
    public function create(Area $padrexxx, InLigru $grupoxxx)
    {

        $this->opciones['grupoxxx'] = $grupoxxx;
        $this->opciones['grupoidx'] = [$grupoxxx->id => $grupoxxx->id];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id, $grupoxxx->id];
        $this->opciones['parametr'] = [$padrexxx->id, $grupoxxx->id];
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['indecrea'] = false;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'pestanias');
    }

    public function store(Area $padrexxx, InLigru $grupoxxx, InDocPreguntaCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $dataxxxx['areaxxxx'] = $padrexxx->id;
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }
    public function show(Area $padrexxx, InLigru $grupoxxx, InDocPregunta $objetoxx)
    {
        $this->opciones['grupoxxx'] = $grupoxxx;
        $this->opciones['grupoidx'] = [$grupoxxx->id => $grupoxxx->id];
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id, $grupoxxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id, $objetoxx->id];
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'] . 'pestanias');
    }

    public function edit(Area $padrexxx, InLigru $grupoxxx, InDocPregunta $objetoxx)
    {
        $this->opciones['grupoxxx'] = $grupoxxx;
        $this->opciones['grupoidx'] = [$grupoxxx->id => $grupoxxx->id];
        $this->opciones['tituloxx'] = 'ASIGNAR LÍNEA BASE AL INDICADOR ';
        $this->opciones['cardhead'] = 'INDICADOR: ' . $objetoxx->s_indicador;
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id,$grupoxxx->id];
        
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id, $grupoxxx->id, $objetoxx->id];

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'pestanias');
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $indicado = InDocPregunta::transaccion($dataxxxx, $objectx);

        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$dataxxxx['areaxxxx'], $indicado->in_ligru_id, $indicado->id])
            ->with('info', $infoxxxx);
    }

    public function update(Area $padrexxx, $document, InDocPreguntaEditarRequest  $request, InDocPregunta $objetoxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['areaxxxx'] = $padrexxx->id;
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

    public function destroy(Area $padrexxx, $document, InDocPregunta $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
