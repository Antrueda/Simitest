<?php

namespace App\Http\Controllers\Indicadores\Administ;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InValoracionCrearRequest;
use App\Http\Requests\Indicadores\InValoracionEditarRequest;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\Indicadores\InValoracion;
use App\Models\Sistema\SisEsta;
use App\Traits\Combos\CombosTrait;
use App\Traits\Pestanias;
use App\Traits\Valoraciones\ValoracionTrait;
use Illuminate\Http\Request;

class InValoracionController extends Controller
{
    use Pestanias;
    use CombosTrait;
    use ValoracionTrait;
    private $opciones;
    public function __construct()
    {
        $this->opciones = [
            'cardhead' => '', // titulo para las pestañas hijas
            'cardheap' => '', // titulo para las pestañas padres
            'readonly' => '', // para cuando se esta por ver
            'permisox' => 'invaloracion', // hace referencia al permiso que se ha dado en el route
            'parametr' => [], // parametros que puede tener el route
            'rutacarp' => 'Indicadores.Admin.', // carpeta padre para las pestañas
            'tituloxx' => '', // se asigna en el create, edit y en el show
            'slotxxxx' => 'valoraci', // indica cual es la pestaña hija que debe estar activa
            'carpetax' => 'Valoracion_ok', // carpeta a la que accede el controlador
            'indecrea' => false,    // false indica que no debe estar dentro una pestaña,
            //true indica que debe estar dentro de una pestaña
            'esindexx' => false  // true indica que debe mostrar el index y false el formulario
        ];


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['rutaxxxx'] = 'valoraci';
        $this->opciones['routnuev'] = 'valoraci';
        $this->opciones['permisox'] = 'valoraci';
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['permisox'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A VALORACIONES', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index($padrexxx)
    {
        $padrexxx = InLineabaseNnaj::find($padrexxx);
        $sis_nnaj = $padrexxx->sis_nnaj->FiDatosBasico[0];

        $this->opciones['cardheap'] = 'NNAJ: ' . $sis_nnaj->s_primer_nombre . ' ' .
            $sis_nnaj->s_segundo_nombre . ' ' .
            $sis_nnaj->s_primer_apellido . ' ' .
            $sis_nnaj->s_segundo_apellido;
        $this->opciones['pestania'] = $this->getAreas([
            'tablaxxx' => $this->opciones['slotxxxx'], 'padrexxx' => $padrexxx, 'permisox' => $this->opciones['permisox']
        ]);
        $this->opciones['botoform'][0]['routingx'][1] = [$sis_nnaj->id];
        $this->opciones['parametr'] = [$sis_nnaj->id];
        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'VALORACIÓN',
                'titulist' => 'LISTA DE VALORACIONES',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $sis_nnaj->id],
                    ['campoxxx' => 'puededit', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-editar') ? true : false],
                    ['campoxxx' => 'puedasig', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-editar') ? true : false],
                ],
                'accitabl' => true,
                'vercrear' => $this->getPuede(['libannaj' => $padrexxx->id, 'permisox' => $this->opciones['permisox']]),
                'urlxxxxx' => 'api/indicadores/valoraciones',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'AVANCE'],
                    ['td' => 'NIVEL'],
                    ['td' => 'CATEGORÍA'],
                    ['td' => 'VALORACION'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'in_valoracions.id'],
                    ['data' => 'avancexx', 'name' => 'avance.nombre as avancexx'],
                    ['data' => 'nivelxxx', 'name' => 'avance.nombre as nivelxxx'],
                    ['data' => 'cactualx', 'name' => 'avance.nombre as cactualx'],
                    ['data' => 's_valoracion', 'name' => 'in_valoracions.s_valoracion'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'permisox' => $this->opciones['permisox'],
                'permisox' => 'valoraci',
                'parametr' => [$padrexxx->id],
                'tablaxxx' => 'tablaprincipal',
            ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    private function view($dataxxxx)
    {

        $this->opciones['lineabas'] = [$dataxxxx['padrexxx']->id => $dataxxxx['padrexxx']->in_fuente->in_linea_base->s_linea_base];
        $this->opciones['botoform'][0]['routingx'][1] = [$dataxxxx['padrexxx']->id];
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $sis_nnaj = $dataxxxx['padrexxx']->sis_nnaj->FiDatosBasico[0];
        $this->opciones['docufuen'] = $this->getDocBase(
            [
                'cabecera' => true,
                'ajaxxxxx' => false,
                'padrexxx' => $dataxxxx['padrexxx']->id
            ]
        );

        $this->opciones['cardheap'] = 'NNAJ: ' . $sis_nnaj->s_primer_nombre . ' ' .
            $sis_nnaj->s_segundo_nombre . ' ' .
            $sis_nnaj->s_primer_apellido . ' ' .
            $sis_nnaj->s_segundo_apellido;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        /**
         * indica si se esta actualizando o viendo
         */
        if ($dataxxxx['objetoxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['objetoxx'];
            if ($this->getPuede(['libannaj' => $dataxxxx['padrexxx']->id, 'permisox' => $this->opciones['permisox']])) {
                $this->opciones['botoform'][] = [
                    'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['permisox'] . '.nuevo', [$dataxxxx['padrexxx']->id]],
                    'formhref' => 2, 'tituloxx' => 'CREAR', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
            }
        }

        $avancexx = $this->getNivel($dataxxxx['categori'], false);
        $this->opciones['paddrexx'] = $dataxxxx['padrexxx'];
        $this->opciones['cateactu'] = $avancexx[2];
        $this->opciones['avancexx'] = $avancexx[1];
        $this->opciones['nivelxxx'] = $avancexx[0];
        $this->opciones['categori'] = $this->getVista(['cateactu' => $dataxxxx['categori'], 'avancexx' => $dataxxxx['avancexx']], false)['categori'];



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
        $padrexxx = InLineabaseNnaj::find($padrexxx);
        $categori = $padrexxx->i_prm_categoria_id;
        $avancexx = 559;
        $valoraci = InValoracion::where('in_lineabase_nnaj_id', $padrexxx)->orderBy('created_at', 'desc')->first();
        if (isset($valoraci->id)) {
            $categori = $valoraci->i_prm_cactual_id;
            $avancexx = $valoraci->i_prm_avance_id;
        }

        $this->opciones['indecrea'] = false;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['permisox'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['objetoxx' => '', 'accionxx' => 'Crear', 'padrexxx' => $padrexxx, 'categori' => $categori, 'avancexx' => $avancexx]);
    }

    public function store(InValoracionCrearRequest $request)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'VALORACIÓN GUARDADA CON ÉXITO');
    }
    public function show(InValoracion $objetoxx)
    {
        $categori = $objetoxx->i_prm_categoria_id;
        return $this->view([
            'objetoxx' => $objetoxx,
            'accionxx' => 'Ver',
            'padrexxx' => $objetoxx->in_lineabase_nnaj,
            'categori' => $categori,
            'avancexx' => $objetoxx->i_prm_avance_id
        ]);
    }

    public function edit(InValoracion $objetoxx)
    {
        $categori = $objetoxx->i_prm_categoria_id;
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR', 'routingx' => [$this->opciones['permisox'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view([
            'objetoxx' => $objetoxx,
            'accionxx' => 'Editar',
            'padrexxx' => $objetoxx->in_lineabase_nnaj,
            'categori' => $categori,
            'avancexx' => $objetoxx->i_prm_avance_id
        ]);
    }

    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $indicado = InValoracion::transaccion($dataxxxx, $objectx);
        return redirect()
            ->route($this->opciones['permisox'] . '.editar', [$indicado->id])
            ->with('info', $infoxxxx);
    }

    public function update(InValoracionEditarRequest  $request, InValoracion $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'VALORACIÓN MODIFICADA CON ÉXITO');
    }

    public function destroy(InValoracion $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route($this->opciones['permisox'])->with('info', 'Registro ' . $activado . ' con éxito');
    }

    public function valoracion(Request $request)
    {
        if ($request->ajax()) {
            return response()->json($this->getVista($request->all(), true));
        }
    }
}
