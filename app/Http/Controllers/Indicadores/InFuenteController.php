<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InfuenteCrearRequest;
use App\Http\Requests\Indicadores\InfuenteEditarRequest;
use App\Models\Indicadores\InFuente;
use App\Models\Indicadores\InIndicador;
use App\Models\Indicadores\InLineaBase;
use App\Models\sistema\SisEsta;

class InFuenteController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->opciones = [
            'cardhead' => '', // titulo para las pestañas hijas
            'cardheap' => '', // titulo para las pestañas padres
            'readonly' => '', // para cuando se esta por ver
            'permisox' => 'inbasefuente', // hace referencia al permiso que se ha dado en el route
            'parametr' => [], // parametros que puede tener el route
            'rutacarp' => 'Indicadores.Admin.', // carpeta padre para las pestañas
            'tituloxx' => '', // se asigna en el create, edit y en el show
            'slotxxxy' => 'diagnost', // indica cual es la pestaña padre que debe estar activa
            'slotxxxx' => 'inbasefuente', // indica cual es la pestaña hija que debe estar activa
            'carpetax' => 'Infuente', // carpeta a la que accede el controlador
            'indecrea' => false,    // false indica que no debe estar dentro una pestaña, 
            //true indica que debe estar dentro de una pestaña
            'esindexx' => false,  // true indica que debe mostrar el index y false el formulario
            'pestania' => [
                'indicado' => ['', true],
                'linebase' => ['disabled', false],
                'docufuen' => ['disabled', true],
                'grupoxxx' => ['disabled', false],
                'pregunta' => ['disabled', false],
                'respuest' => ['disabled', false]
            ]
        ];
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-leer'], ['only' => ['index', 'show']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-crear'], ['only' => ['index', 'show', 'create', 'store', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-editar'], ['only' => ['index', 'show', 'edit', 'update', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-borrar'], ['only' => ['index', 'show', 'destroy']]);
        $this->opciones['rutaxxxx'] = 'lbf.basefuente';
        $this->opciones['routnuev'] = 'lbf.basefuente';
        $this->opciones['routxxxx'] = 'lbf.basefuente';
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A INDICADORES', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index($padrexxx)
    {
        $padrexxx = InIndicador::where('id', $padrexxx)->first();
        $this->opciones['cardhead'] = 'INDICADOR: ' . $padrexxx->s_indicador;
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['cardheap'] = 'Area: ' . $padrexxx->area->nombre;
        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'LÍNEA BASE',
                'titulist' => 'LISTA DE LÍNEAS BASES',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadoxx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx->id],
                    ['campoxxx' => 'indicado', 'dataxxxx' => $padrexxx->area_id],
                ],
                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => 'api/indicadores/indicadorlineasbase',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'LÍNEA BASE'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'in_fuentes.id'],
                    ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
                    ['data' => 'sis_esta_id', 'name' => 'in_fuentes.sis_esta_id'],
                ],
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => 'lbf.basefuente',
                'parametr' => [$padrexxx->area_id, $padrexxx->id],
                'tablaxxx' => 'tablaprincipal',
            ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $seleccio = 0;

        //$this->opciones['linebase'] = InLineaBase::combo($padrexxx, false, false);
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        if ($nombobje != '') {
            $this->opciones[$nombobje] = $objetoxx;
            $seleccio = $objetoxx->in_linea_base_id;
        }

        $this->opciones['linebase'] = InLineaBase::getIndicarBases(
            ['padrexxx' => $this->opciones['parametr'], 'cabecera' => true, 'ajaxxxxx' => false,
            'seleccio'=>$seleccio]
        );
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    public function create($padrexxx)
    {

        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx];
        $this->opciones['parametr'] = [$padrexxx];
        $padrexxx = InIndicador::where('id', $padrexxx)->first();
        $this->opciones['cardhead'] = 'INDICADOR: ' . $padrexxx->s_indicador;
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->area->nombre;
        $this->opciones['indicado'] = [$padrexxx->id => $padrexxx->s_indicador];
        $this->opciones['indecrea'] = false;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'pestanias');
    }

    public function store($padrexxx, InfuenteCrearRequest $request)
    {

        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }




    public function show($padrexxx, InFuente $objetoxx)
    {

        $padrexxx = InIndicador::where('id', $padrexxx)->first();
        $this->opciones['cardhead'] = 'INDICADOR: ' . $padrexxx->s_indicador;
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->area->nombre;
        $this->opciones['indicado'] = [$padrexxx->id => $padrexxx->s_indicador];
        $this->opciones['botoform'][0]['routingx'][1] = [$objetoxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$objetoxx->id];
        return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'] . 'pestanias');
    }

    public function edit($padrexxx, InFuente $objetoxx)
    {
        $padrexxx = InIndicador::where('id', $padrexxx)->first();
        $this->opciones['cardhead'] = 'INDICADOR: ' . $padrexxx->s_indicador;
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->area->nombre;
        $this->opciones['indicado'] = [$padrexxx->id => $padrexxx->s_indicador];
        $this->opciones['botoform'][0]['routingx'][1] = [$objetoxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id,$objetoxx->id];

        $this->opciones['botoform'][] =
        [
            'mostrars' => true, 'accionxx' => 'MODIFICAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', $this->opciones['parametr']],
            'formhref' => 1, 'tituloxx' => 'MODIFICAR', 'clasexxx' => 'btn btn-sm btn-primary'
        ];
        $this->opciones['botoform'][] =
        [
            'mostrars' => true, 'accionxx' => 'MODIFICAR', 'routingx' => [ 'bd.basedocumen', [$objetoxx->id]],
            'formhref' => 2, 'tituloxx' => 'ASIGANAR DOCUMENTOS FUENTES', 'clasexxx' => 'btn btn-sm btn-primary'
        ];
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'pestanias');
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $registro = InFuente::transaccion($dataxxxx, $objectx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$registro->in_indicador->id,$registro->id])
            ->with('info', $infoxxxx);
    }

    public function update($padrexxx, InfuenteEditarRequest  $request, InFuente $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

    public function destroy($padrexxx, InFuente $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
