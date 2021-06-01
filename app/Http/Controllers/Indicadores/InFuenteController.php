<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InfuenteCrearRequest;
use App\Http\Requests\Indicadores\InfuenteEditarRequest;
use App\Models\Indicadores\InFuente;
use App\Models\Indicadores\InIndicador;
use App\Models\Indicadores\Admin\InLineaBase;
use App\Models\Sistema\SisEsta;
use App\Traits\Pestanias;

class InFuenteController extends Controller
{
    use Pestanias;
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
            'slotxxxx' => 'basefuen', // indica cual es la pestaña hija que debe estar activa
            'carpetax' => 'Infuente', // carpeta a la que accede el controlador
            'indecrea' => false,    // false indica que no debe estar dentro una pestaña,
            //true indica que debe estar dentro de una pestaña
            'esindexx' => false,  // true indica que debe mostrar el index y false el formulario
            'pestania' => [

            ]
        ];
        $this->middleware(['permission:' .
        $this->opciones['permisox'] . '-leer|' .
        $this->opciones['permisox'] . '-crear|' .
        $this->opciones['permisox'] . '-editar|' .
        $this->opciones['permisox'] . '-borrar']);
        $this->opciones['rutaxxxx'] = 'lbf.basefuente';
        $this->opciones['routnuev'] = 'lbf.basefuente';
        $this->opciones['routxxxx'] = 'lbf.basefuente';
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A LÍNEAS BASE', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index($padrexxx)
    {
        $padrexxx = InIndicador::where('id', $padrexxx)->first();
        $this->opciones['pestania'] = $this->getAreas(['tablaxxx' => $this->opciones['slotxxxx'], 'padrexxx' => $padrexxx
        ,'routxxxx'=>$this->opciones['routxxxx']]);

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
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx->id],
                    ['campoxxx' => 'puededit', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] .'-editar') ? true : false],
                    ['campoxxx' => 'puedasig', 'dataxxxx' => auth()->user()->can('inbasedocumen-crear') ? true : false],
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
                    ['data' => 's_estado', 'name' => 'in_fuentes.s_estado'],
                ],
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => 'lbf.basefuente',
                'parametr' => [$padrexxx->id],
                'tablaxxx' => 'tablaprincipal',
            ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    private function view($dataxxxx)
    {
        $seleccio = 0;
        //$this->opciones['linebase'] = InLineaBase::combo($padrexxx, false, false);
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['objetoxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['objetoxx'];
            $seleccio = $dataxxxx['objetoxx']->in_linea_base_id;
        }
       /**
        * se crea la funcionalidad de las pestañas para la asignacion de linea base al indiecador
        * cuando se esta en el crear, editar o ver
        */
        $this->opciones['pestania'] = $this->getAreas(['tablaxxx' => $this->opciones['slotxxxx'],
        'padrexxx' => $dataxxxx['padrexxx'],
        'routxxxx'=>$this->opciones['routxxxx']]);

        $this->opciones['linebase'] = InLineaBase::getIndicarBases(
            [
                'padrexxx' => $this->opciones['parametr'], 'cabecera' => true, 'ajaxxxxx' => false,
                'seleccio' => $seleccio
            ]
        );
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
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
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
            return $this->view(['objetoxx'=>'','accionxx'=>'Crear','padrexxx'=>$padrexxx]);
    }

    public function store(InfuenteCrearRequest $request)
    {

        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Línea base creada con éxito');
    }




    public function show(InFuente $objetoxx)
    {

        $padrexxx =$objetoxx->in_indicador;
        $this->opciones['cardhead'] = 'INDICADOR: ' . $padrexxx->s_indicador;
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->area->nombre;
        $this->opciones['indicado'] = [$padrexxx->id => $padrexxx->s_indicador];
        $this->opciones['botoform'][0]['routingx'][1] = [$objetoxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$objetoxx->id];
        return $this->view(['objetoxx'=>$objetoxx,'accionxx'=>'Ver','padrexxx'=>$padrexxx]);
    }

    public function edit(InFuente $objetoxx)
    {
        $padrexxx =$objetoxx->in_indicador;
        $this->opciones['cardhead'] = 'INDICADOR: ' . $padrexxx->s_indicador;
        $this->opciones['cardheap'] = 'ÁREA: ' . $padrexxx->area->nombre;
        $this->opciones['indicado'] = [$padrexxx->id => $padrexxx->s_indicador];
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['indecrea'] = false;
        $this->opciones['parametr'] = [$padrexxx->id, $objetoxx->id];

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', $this->opciones['parametr']],
                'formhref' => 1, 'tituloxx' => 'EDITAR', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR', 'routingx' => ['bd.basedocumen', [$objetoxx->id]],
                'formhref' => 2, 'tituloxx' => 'ASIGNAR DF', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
            return $this->view(['objetoxx'=>$objetoxx,'accionxx'=>'Editar','padrexxx'=>$padrexxx]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $registro = InFuente::transaccion($dataxxxx, $objectx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$registro->id])
            ->with('info', $infoxxxx);
    }

    public function update(InfuenteEditarRequest  $request, InFuente $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Línea base actualizada con éxito');
    }

    public function destroy(InFuente $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
