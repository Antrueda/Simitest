<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InLigruCrearRequest;
use App\Http\Requests\Indicadores\InLigruEditarRequest;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InLigru;
use App\Models\sistema\SisEsta;
use App\Traits\Pestanias;

class InLigruController extends Controller
{
    use Pestanias;
    private $opciones;
    public function __construct()
    {
        $this->opciones = [
            'cardhead' => '', // titulo para las pestañas hijas
            'cardheap' => '', // titulo para las pestañas padres
            'readonly' => '', // para cuando se esta por ver
            'permisox' => 'grupliba', // hace referencia al permiso que se ha dado en el route
            'parametr' => [], // parametros que puede tener el route
            'rutacarp' => 'Indicadores.Admin.', // carpeta padre para las pestañas
            'tituloxx' => '', // se asigna en el create, edit y en el show
             'slotxxxy' => 'diagnost', // indica cual es la pestaña padre que debe estar activa
            'slotxxxx' => 'linegrup', // indica cual es la pestaña hija que debe estar activa
            'carpetax' => 'Inligru', // carpeta a la que accede el controlador
            'indecrea' => false,    // false indica que no debe estar dentro una pestaña, 
            //true indica que debe estar dentro de una pestaña
            'esindexx' => false  // true indica que debe mostrar el index y false el formulario
        ];
        $this->middleware(['permission:' .
            $this->opciones['permisox'] . '-leer|' .
            $this->opciones['permisox'] . '-crear|' .
            $this->opciones['permisox'] . '-editar|' .
            $this->opciones['permisox'] . '-borrar']);
        $this->opciones['rutaxxxx'] = 'inligru';
        $this->opciones['routnuev'] = 'inligru';
        $this->opciones['routxxxx'] = 'inligru';
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] , []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A GRUPOS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index($padrexxx)
    {
        $padrexxx = InBaseFuente::where('id', $padrexxx)->first();
        $this->opciones['pestania'] = $this->getAreas(['tablaxxx' => $this->opciones['slotxxxx'], 'padrexxx' => $padrexxx
        ,'routxxxx'=>$this->opciones['routxxxx']]);
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->in_fuente->in_indicador->area->nombre;
        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'GRUPO',
                'titulist' => 'LISTA DE GRUPOS',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx->id],
                    ['campoxxx' => 'puededit', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] .'-editar') ? true : false],
                    ['campoxxx' => 'puedasig', 'dataxxxx' => auth()->user()->can('documentoFuente-crear') ? true : false],
                ],
                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => 'api/indicadores/grupos',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'LÍNEA BASE'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'in_indicadors.id'],
                    ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
                    ['data' => 'sis_esta_id', 'name' => 'in_indicadors.sis_esta_id'],
                ],
                'tablaxxx' => 'tablaindicadores',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => 'inligru',
                'parametr' => [$padrexxx->id],
            ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    private function view($dataxxxx)
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['objetoxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['objetoxx'];
        }
        /**
        * se crea la funcionalidad de las pestañas para la asignacion de grupos a la línea base
        * cuando se esta en el crear, editar o ver
        */
        $this->opciones['pestania'] = $this->getAreas(['tablaxxx' => $this->opciones['slotxxxx'], 
        'padrexxx' => $dataxxxx['padrexxx'],
        'routxxxx'=>$this->opciones['routxxxx']]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create($padrexxx)
    {
        $padrexxx=InBaseFuente::find($padrexxx);
        $this->opciones['tituloxx'] = 'CREAR GRUPO';
        $inligrup = InLigru::get()->max('id');
        $maximoxx = ($inligrup == null) ? 1 : $inligrup + 1;
        $this->opciones['maximoxx'] = [$maximoxx => $maximoxx];
        $this->opciones['linebase'] = [$padrexxx->id => $padrexxx->in_fuente->in_linea_base->s_linea_base];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['cardheap'] = 'ÁREA: ' .  $padrexxx->in_fuente->in_indicador->area->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
            return $this->view(['objetoxx'=>'','accionxx'=>'Crear','padrexxx'=>$padrexxx]);
    }

    public function store( InLigruCrearRequest $request)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }

    public function show(InLigru $objetoxx)
    {
        $padrexxx=$objetoxx->in_base_fuente;
        $this->opciones['tituloxx'] = 'VER GRUPO';
        $this->opciones['maximoxx'] = [$objetoxx->id => $objetoxx->id];
        $this->opciones['linebase'] = [$padrexxx->id => $padrexxx->in_fuente->in_linea_base->s_linea_base];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['cardheap'] = 'ÁREA: ' .  $padrexxx->in_fuente->in_indicador->area->nombre;
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id, $objetoxx->id];
        return $this->view(['objetoxx'=>$objetoxx,'accionxx'=>'Ver','padrexxx'=>$padrexxx]);
    }

    public function edit(InLigru $objetoxx)
    {
        $padrexxx=$objetoxx->in_base_fuente;
        $this->opciones['tituloxx'] = 'MODIFICAR GRUPO';
        $this->opciones['maximoxx'] = [$objetoxx->id => $objetoxx->id];
        $this->opciones['linebase'] = [$objetoxx->id => $padrexxx->in_fuente->in_linea_base->s_linea_base];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->in_fuente->in_indicador->area->nombre;
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id, $objetoxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR', 
                'formhref' => 1, 'clasexxx' => 'btn btn-sm btn-primary'
            ];

            $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'MODIFICAR', 'routingx' => ['grupregu', [$objetoxx->id]],
                'formhref' => 2, 'tituloxx' => 'ASIGNAR P', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
            return $this->view(['objetoxx'=>$objetoxx,'accionxx'=>'Editar','padrexxx'=>$padrexxx]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $indicado = InLigru::transaccion($dataxxxx, $objectx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$indicado->id])
            ->with('info', $infoxxxx);
    }

    public function update( InLigruEditarRequest  $request, InLigru $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

    public function destroy(InLigru $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
