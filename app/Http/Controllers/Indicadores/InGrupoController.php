<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InLigruCrearRequest;
use App\Http\Requests\Indicadores\InLigruEditarRequest;
use App\Models\Indicadores\Area;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InLigru;
use App\Models\sistema\SisEsta;

class InGrupoController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->opciones = [
            'cardhead' => '', // titulo para las pestañas hijas
            'cardheap' => '', // titulo para las pestañas padres
            'readonly' => '', // para cuando se esta por ver
            'permisox' => 'indicador', // hace referencia al permiso que se ha dado en el route
            'parametr' => [], // parametros que puede tener el route
            'rutacarp' => 'Indicadores.Admin.', // carpeta padre para las pestañas
            'tituloxx' => '', // se asigna en el create, edit y en el show
            'slotxxxy' => 'diagnost', // indica cual es la pestaña padre que debe estar activa
            'slotxxxx' => 'inligru', // indica cual es la pestaña hija que debe estar activa
            'carpetax' => 'Grupo', // carpeta a la que accede el controlador
            'indecrea' => false,    // false indica que no debe estar dentro una pestaña, 
            //true indica que debe estar dentro de una pestaña
            'esindexx' => false  // true indica que debe mostrar el index y false el formulario
        ];
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-leer'], ['only' => ['index', 'show']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-crear'], ['only' => ['index', 'show', 'create', 'store', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-editar'], ['only' => ['index', 'show', 'edit', 'update', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-borrar'], ['only' => ['index', 'show', 'destroy']]);
        $this->opciones['rutaxxxx'] = 'inligru';
        $this->opciones['routnuev'] = 'inligru';
        $this->opciones['routxxxx'] = 'inligru';
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'].'.grupos', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A GRUPOS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index(Area $padrexxx,$inbafuid)
    {
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id,$inbafuid];
        $this->opciones['parametr'] = [$padrexxx->id,$inbafuid];
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->nombre;
        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'GRUPO',
                'titulist' => 'LISTA DE GRUPOS',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadoxx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx->id],
                    ['campoxxx' => 'inbafuid', 'dataxxxx' => $inbafuid],
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
                'parametr' => [$padrexxx->id,$inbafuid],
            ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        if ($nombobje != '') {
            $this->opciones[$nombobje] = $objetoxx;
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    public function create(Area $padrexxx,InBaseFuente $inbafuid)
    {
        $this->opciones['tituloxx']='CREAR GRUPO';
        $inligrup=InLigru::get()->max('id');
        $maximoxx=($inligrup == null) ? 1 : $inligrup + 1;
        $this->opciones['maximoxx'] = [$maximoxx=>$maximoxx];
        $this->opciones['linebase'] = [$inbafuid->id=>$inbafuid->in_fuente->in_linea_base->s_linea_base];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id,$inbafuid->id];
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id, $inbafuid->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'pestanias');
    }

    public function store(Area $padrexxx,$in_base_fuente_id, InLigruCrearRequest $request)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }

    public function show(Area $padrexxx,InBaseFuente $inbafuid, InLigru $objetoxx)
    {
        $this->opciones['tituloxx']='VER GRUPO';
        $this->opciones['maximoxx'] = [$objetoxx->id=>$objetoxx->id];
        $this->opciones['linebase'] = [$inbafuid->id=>$inbafuid->in_fuente->in_linea_base->s_linea_base];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id,$inbafuid->id];
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id, $objetoxx->id];
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'] . 'pestanias');
    }

    public function edit(Area $padrexxx,InBaseFuente $inbafuid, InLigru $objetoxx)
    {
        $this->opciones['tituloxx']='MODIFICAR GRUPO';
        $this->opciones['maximoxx'] = [$objetoxx->id=>$objetoxx->id];
        $this->opciones['linebase'] = [$inbafuid->id=>$inbafuid->in_fuente->in_linea_base->s_linea_base];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id,$inbafuid->id];
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id,$inbafuid->id, $objetoxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'pestanias');
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $indicado = InLigru::transaccion($dataxxxx, $objectx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$indicado->in_base_fuente->in_fuente->in_indicador->area_id,$indicado->in_base_fuente_id, $indicado->id])
            ->with('info', $infoxxxx);
    }

    public function update(Area $padrexxx,$in_base_fuente_id, InLigruEditarRequest  $request, InLigru $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

    public function destroy(Area $padrexxx,$in_base_fuente_id, InLigru $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
