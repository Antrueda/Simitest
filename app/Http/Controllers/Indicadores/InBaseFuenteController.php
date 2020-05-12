<?php

namespace App\Http\Controllers\Indicadores;


use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InBaseFuenteCrearRequest;
use App\Http\Requests\Indicadores\InBaseFuenteEditarRequest;
use App\Models\Indicadores\Area;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InFuente;
use App\Models\Indicadores\InIndicador;
use App\Models\sistema\SisDocumentoFuente;
use App\Models\sistema\SisEsta;
use Illuminate\Http\Request;

class InBaseFuenteController extends Controller
{
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
            'slotxxxx' => 'inbasedocumen', // indica cual es la pestaña hija que debe estar activa
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
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-leer'], ['only' => ['index', 'show']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-crear'], ['only' => ['index', 'show', 'create', 'store', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-editar'], ['only' => ['index', 'show', 'edit', 'update', 'view', 'grabar']]);
        $this->middleware(['permission:' . $this->opciones['permisox'] . '-borrar'], ['only' => ['index', 'show', 'destroy']]);
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
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadoxx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx->id],
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
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $seleccio=0;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        if ($nombobje != '') {
            $this->opciones[$nombobje] = $objetoxx;
            $seleccio=$objetoxx->in_fuente_id;
        }
        $this->opciones['document'] =SisDocumentoFuente::getBasaDocumentos(
            ['padrexxx' => $this->opciones['parametr'], 'cabecera' => true, 'ajaxxxxx' => false,
            'seleccio'=>$seleccio]
        );
        
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }
    public function create($padrexxx)
    {

        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx];
        $this->opciones['parametr'] = [$padrexxx];
        $padrexxx=InFuente::where('id', $padrexxx)->first();
        $this->opciones['cardhead'] = 'LINEA BASE: ' . $padrexxx->in_linea_base->s_linea_base;
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->in_indicador->area->nombre;
        $this->opciones['linebase'] = [$padrexxx->id => $padrexxx->in_linea_base->s_linea_base];
        $this->opciones['indecrea'] = false;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'pestanias');
    }

    public function store($padrexxx, InBaseFuenteCrearRequest $request)
    {

        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }
    public function show($padrexxx, InBaseFuente $objetoxx)
    {
        $padrexxx = InFuente::where('id', $padrexxx)->first();
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->in_indicador->area->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id, $objetoxx->id];
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'] . 'pestanias');
    }

    public function edit($padrexxx, InBaseFuente $objetoxx)
    {
        $padrexxx = InFuente::where('id', $padrexxx)->first();
        // $this->opciones['cardhead'] = 'INDICADOR: ' . $objetoxx->s_indicador;
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->in_indicador->area->nombre;
        $this->opciones['areasxxx'] = [$padrexxx->id => $padrexxx->nombre];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id, $objetoxx->id];
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'pestanias');
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $registro = InFuente::transaccion($dataxxxx, $objectx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$registro->in_indicador->id,$registro->id])
            ->with('info', $infoxxxx);
    }

    public function update($padrexxx, InBaseFuenteEditarRequest  $request, InFuente $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

    public function destroy($padrexxx, InIndicador $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
