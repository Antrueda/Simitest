<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InActsoporteCrearRequest;
use App\Models\Indicadores\InAccionGestion;
use App\Models\Indicadores\InActsoporte;
use App\Models\Sistema\SisEsta;
use App\Traits\Combos\CombosTrait;
use App\Traits\Pestanias;

class InActFuenteController extends Controller
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
            'slotxxxx' => 'actifuen', // indica cual es la pestaña hija que debe estar activa
            'carpetax' => 'Fuentesx', // carpeta a la que accede el controlador
            'indecrea' => false,    // false indica que no debe estar dentro una pestaña,
            //true indica que debe estar dentro de una pestaña
            'esindexx' => false  // true indica que debe mostrar el index y false el formulario
        ];


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['rutaxxxx'] = 'actifuen';
        $this->opciones['routnuev'] = 'actifuen';
        $this->opciones['permisox'] = 'actifuen';
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['permisox'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A FUENTES', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index($padrexxx)
    {
        $padrexxx = InAccionGestion::find($padrexxx);
        $sis_nnaj = $padrexxx->in_lineabase_nnaj->sis_nnaj->FiDatosBasico[0];
        $this->opciones['cardheap'] = 'NNAJ: ' . $sis_nnaj->s_primer_nombre . ' ' .
            $sis_nnaj->s_segundo_nombre . ' ' .
            $sis_nnaj->s_primer_apellido . ' ' .
            $sis_nnaj->s_segundo_apellido;
        $this->opciones['pestania'] = $this->getAreas([
            'tablaxxx' => $this->opciones['slotxxxx'], 'padrexxx' => $padrexxx, 'permisox' => $this->opciones['permisox']
        ]);
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['parametr'] = [$padrexxx->id];


        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'FUENTE',
                'titulist' => 'LISTA DE FUENTES',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $sis_nnaj->id],
                    ['campoxxx' => 'puededit', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-editar') ? true : false],
                    ['campoxxx' => 'puedasig', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-editar') ? true : false],
                ],
                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => 'api/indicadores/actividadfuentes',
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
                'permisox' => 'actifuen',
                'parametr' => [$padrexxx->id],
                'tablaxxx' => 'tablaprincipal',
            ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    private function view($dataxxxx)
    {
        $this->opciones['botoform'][0]['routingx'][1] = [$dataxxxx['padrexxx']->id];
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $sis_nnaj = $dataxxxx['padrexxx']->in_lineabase_nnaj->sis_nnaj->FiDatosBasico[0];
        $this->opciones['activida']=[$dataxxxx['padrexxx']->id=>$dataxxxx['padrexxx']->sis_actividad->nombre];
        $this->opciones['cardheap'] = 'NNAJ: ' . $sis_nnaj->s_primer_nombre . ' ' .
            $sis_nnaj->s_segundo_nombre . ' ' .
            $sis_nnaj->s_primer_apellido . ' ' .
            $sis_nnaj->s_segundo_apellido;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        $seleccio=0;
        /**
         * indica si se esta actualizando o viendo
         */
        if ($dataxxxx['objetoxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['objetoxx'];
            $seleccio= $this->opciones['modeloxx']->sis_fsoporte_id;
        }

        $this->opciones['fsoporte'] = $this->getSoportes([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'padrexxx' => $dataxxxx['padrexxx']->id,
            'seleccio' => $seleccio,
        ]);
        /**
         * se crea la funcionalidad de las pestañas para la asignacion de la respuesta a la pregunta
         * cuando se esta en el crear, editar o ver
         */
        $this->opciones['pestania'] = $this->getAreas([
            'tablaxxx' => $this->opciones['slotxxxx'],
            'padrexxx' => $dataxxxx['padrexxx'],
            'permisox' => $this->opciones['permisox']
        ]);

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function create($padrexxx)
    {
        $padrexxx = InAccionGestion::find($padrexxx);
        $this->opciones['indecrea'] = false;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['permisox'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['objetoxx' => '', 'accionxx' => 'Crear', 'padrexxx' => $padrexxx]);
    }

    public function store(InActsoporteCrearRequest $request)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }
    public function show(InActsoporte $objetoxx)
    {

        return $this->view(['objetoxx' => $objetoxx, 'accionxx' => 'Ver', 'padrexxx' => $objetoxx->in_accion_gestion]);
    }

    public function edit(InActsoporte $objetoxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR', 'routingx' => [$this->opciones['permisox'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['objetoxx' => $objetoxx, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx->in_accion_gestion]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $indicado = InActsoporte::transaccion($dataxxxx, $objectx);

        return redirect()
            ->route($this->opciones['permisox'] . '.editar', [$indicado->id])
            ->with('info', $infoxxxx);
    }

    public function update(InActsoporteCrearRequest  $request, InActsoporte $objetoxx)
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
        return redirect()->route($this->opciones['permisox'])->with('info', 'Registro ' . $activado . ' con éxito');
    }


}
