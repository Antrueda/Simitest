<?php

namespace App\Http\Controllers\Indicadores;


use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InBaseFuenteCrearRequest;
use App\Http\Requests\Indicadores\InBaseFuenteEditarRequest;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InFuente;
use App\Models\Indicadores\InIndicador;
use App\Models\sistema\SisDocumentoFuente;
use App\Models\sistema\SisEsta;
use App\Traits\Pestanias;

class InBaseFuenteController extends Controller
{
    use Pestanias;
    private $opciones;
    public function __construct()
    {
        $this->opciones = [
            'cardhead' => '', // titulo para las pestañas hijas
            'cardheap' => '', // titulo para las pestañas padres
            'readonly' => '', // para cuando se esta por ver
            'permisox' => 'inbasedocumen', // hace referencia al permiso que se ha dado en el route
            'parametr' => [], // parametros que puede tener el route
            'rutacarp' => 'Indicadores.Admin.', // carpeta padre para las pestañas
            'tituloxx' => '', // se asigna en el create, edit y en el show
            'slotxxxy' => 'diagnost', // indica cual es la pestaña padre que debe estar activa
            'slotxxxx' => 'basedocu', // indica cual es la pestaña hija que debe estar activa
            'carpetax' => 'Basefuente', // carpeta a la que accede el controlador
            'indecrea' => false,    // false indica que no debe estar dentro una pestaña, 
            //true indica que debe estar dentro de una pestaña
            'esindexx' => false,  // true indica que debe mostrar el index y false el formulario
            'pestania' => [
                'indicado' => ['', true],
                'linebase' => ['', true],
                'docufuen' => ['', true],
                'grupoxxx' => ['disabled', false],
                'pregunta' => ['disabled', false],
                'respuest' => ['disabled', false]
            ]
        ];
        $this->middleware(['permission:' .
            $this->opciones['permisox'] . '-leer|' .
            $this->opciones['permisox'] . '-crear|' .
            $this->opciones['permisox'] . '-editar|' .
            $this->opciones['permisox'] . '-borrar']);
        $this->opciones['rutaxxxx'] = 'bd.basedocumen';
        $this->opciones['routnuev'] = 'bd.basedocumen';
        $this->opciones['routxxxx'] = 'bd.basedocumen';
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'REGRESAR A DOCUMENTOS FUENTES', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index($padrexxx)
    {
        $padrexxx = InFuente::where('id', $padrexxx)->first();
        $this->opciones['pestania'] = $this->getAreas([
            'tablaxxx' => $this->opciones['slotxxxx'], 'padrexxx' => $padrexxx, 'routxxxx' => $this->opciones['routxxxx']
        ]);
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->in_indicador->area->nombre;
        $this->opciones['cardhead'] = 'LINEA BASE: ' . $padrexxx->in_linea_base->s_linea_base;
        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'DOCUMENTO FUENTE',
                'titulist' => 'DOCUEMENTOS FUENTES',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx->id],
                    ['campoxxx' => 'puededit', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-editar') ? true : false],
                    ['campoxxx' => 'puedasig', 'dataxxxx' => auth()->user()->can('grupliba-crear') ? true : false],
                ],
                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => 'api/indicadores/basefuentes',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'DOCUMENTO FUENTE'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'in_fuentes.id'],
                    ['data' => 'nombre', 'name' => 'sis_documento_fuentes.nombre'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => 'bd.basedocumen',
                'parametr' => [$padrexxx->id],
                'tablaxxx' => 'tablaprincipal',
            ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    private function view($dataxxxx)
    {
        $seleccio = 0;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['objetoxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['objetoxx'];
            $seleccio = $dataxxxx['objetoxx']->sis_documento_fuente_id;
        }
        $this->opciones['document'] = SisDocumentoFuente::getBasaDocumentos(
            [
                'padrexxx' => $this->opciones['parametr'], 'cabecera' => true, 'ajaxxxxx' => false,
                'seleccio' => $seleccio
            ]
        );

        /**
         * se crea la funcionalidad de las pestañas para la asignacion de documento fuente a la línea base
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

        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx];
        $this->opciones['parametr'] = [$padrexxx];
        $padrexxx = InFuente::where('id', $padrexxx)->first();
        $this->opciones['cardhead'] = 'LINEA BASE: ' . $padrexxx->in_linea_base->s_linea_base;
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->in_indicador->area->nombre;
        $this->opciones['linebase'] = [$padrexxx->id => $padrexxx->in_linea_base->s_linea_base];
        $this->opciones['indecrea'] = false;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['objetoxx' => '', 'accionxx' => 'Crear', 'padrexxx' => $padrexxx]);
    }

    public function store(InBaseFuenteCrearRequest $request)
    {

        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }
    public function show(InBaseFuente $objetoxx)
    {
        $padrexxx = $objetoxx->in_fuente;
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->in_indicador->area->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$objetoxx->id];
        $this->opciones['readonly'] = 'readonly';
        $this->opciones['linebase'] = [$padrexxx->id => $padrexxx->in_linea_base->s_linea_base];
        return $this->view(['objetoxx' => $objetoxx, 'accionxx' => 'Ver', 'padrexxx' => $padrexxx]);
    }

    public function edit(InBaseFuente $objetoxx)
    {
        $padrexxx = $objetoxx->in_fuente;
        // $this->opciones['cardhead'] = 'INDICADOR: ' . $objetoxx->s_indicador;
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->in_indicador->area->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$objetoxx->id];
        $this->opciones['linebase'] = [$padrexxx->id => $padrexxx->in_linea_base->s_linea_base];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'MODIFICAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', $this->opciones['parametr']],
                'formhref' => 1, 'tituloxx' => 'MODIFICAR', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'MODIFICAR', 'routingx' => ['inligru', [$objetoxx->id]],
                'formhref' => 2, 'tituloxx' => 'ASIGNAR G-LB', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['objetoxx' => $objetoxx, 'accionxx' => 'Editar', 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
       
        $registro = InBaseFuente::transaccion($dataxxxx, $objectx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$registro->id])
            ->with('info', $infoxxxx);
    }

    public function update(InBaseFuenteEditarRequest  $request, InBaseFuente $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

    public function destroy(InIndicador $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
