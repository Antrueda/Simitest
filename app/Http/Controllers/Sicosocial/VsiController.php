<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiActinactivarRequest;
use App\Http\Requests\Vsi\VsiCrearRequest;
use App\Http\Requests\Vsi\VsiEditarRequest;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\sicosocial\Vsi;
use App\Models\Sistema\SisNnaj;
use App\Traits\Combos\CombosTrait;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Traits\Puede\PuedeTrait;

class VsiController extends Controller
{
    use VsiTrait;
    use ManageTimeTrait;
    use PuedeTrait;
    use CombosTrait; // trait que administra los combos
    private $opciones;
    public $estadoid = 1;
    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 2, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsixxxxx',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'VALORACIÓN SICOSOCIAL',
            'carpetax' => 'Vsi',
            'slotxxxx' => 'vsixxxxx',
            'tablaxxx' => 'datatable',
            'indecrea' => false, // false muestra las pestañas
            'esindexx' => false,
            'tituhead' => '',
            'fechcrea' => '',
            'fechedit' => '',
            'usercrea' => '',
            'useredit' => '',
            'conperfi' => '', // indica si la vista va a tener perfil
            'usuariox' => [],

            'confirmx' => 'Desea inactivar la vsi: ',
            'reconfir' => 'Realmente desea inactivar la vsi: ',
            'msnxxxxx' => 'No se puedo inactivar la vsi',
            'rutaxxxx' => 'vsixxxxx',
            'routnuev' => 'vsixxxxx',
            'routxxxx' => 'vsixxxxx',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar|'
            . $this->opciones['permisox'] . '-activarx|'
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SisNnaj $padrexxx)
    {

        $padrexxx = $padrexxx->fi_datos_basico;

        $this->opciones['usuariox'] = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->sis_nnaj_id];
        $this->opciones['tituhead'] = $padrexxx->nombre;
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->sis_nnaj_id];
        $this->opciones['padrexxx'] = '';
        $this->opciones['esindexx'] = true;
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'VALORACIÓN SICOSOCIAL',
                'titulist' => 'LISTA DE VALORACIÓN SICOSOCIAL ',
                'dataxxxx' => [],

                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.vsisxxxx', $this->opciones['parametr']),
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'UPI'],
                    ['td' => 'FECHA DILIGENCIAMIENTO'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'vsis.id'],
                    ['data' => 'nombre', 'name' => 'sis_depens.nombre'],
                    ['data' => 'fecha', 'name' => 'vsis.fecha'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => $this->opciones['tablaxxx'],
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => $this->opciones['botoform'][0]['routingx'][1],
            ]

        ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getVsi(Request $request)
    {

        if ($request->ajax()) {
            $request->puedleer = auth()->user()->can('vsixxxxx-leer');
            $request->routexxx = [$this->opciones['routxxxx'], 'vsixxxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getVsis($request);
        }
    }
    private function view($dataxxxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->sis_nnaj_id]],
                'formhref' => 2, 'tituloxx' => 'VOLVER A VALORACIÓN SICOSOCIAL', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->name;
        // $this->opciones['dependen'] = User::getUpiUsuario(false, false);
        $this->opciones['dependen'] = NnajUpi::getDependenciasNnajUsuario(false, false, $dataxxxx['padrexxx']->sis_nnaj_id);
        $this->opciones['userxxxx'] = [$dataxxxx['padrexxx']->id => $dataxxxx['padrexxx']->name];
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
            $this->opciones['vsixxxxx'] = $dataxxxx['modeloxx'];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 3;
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', [$dataxxxx['padrexxx']->id]],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
        } else {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$dataxxxx['padrexxx']->id]],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SisNnaj $padrexxx)
    {
        $padrexxx = $padrexxx->fi_datos_basico;
        $this->opciones['parametr'] = [$padrexxx->sis_nnaj_id];
        return $this->view(['modeloxx' => '', 'accionxx' => 'Crear', 'padrexxx' => $padrexxx]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VsiCrearRequest $request, $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx;
        $dataxxxx['sis_esta_id'] = 1;

        return $this->grabar([
            'dataxxxx' => $dataxxxx,
            'modeloxx' => '',
            'menssage' => 'Registro creado con éxito'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vsi $objetoxx)
    {
        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->id];
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Ver', 'padrexxx' => $objetoxx->nnaj->fi_datos_basico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vsi $objetoxx)
    {
        $this->opciones['vsixxxxx'] = $objetoxx;
        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->id];
        $respuest = $this->getPuedeTPuede([
            'casoxxxx' => 1,
            'nnajxxxx' => $objetoxx->sis_nnaj_id,
            'permisox' => $this->opciones['permisox'] . '-editar',
        ]);
        if ($respuest) {

            if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                        'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx->nnaj->fi_datos_basico]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [Vsi::transaccion($dataxxxx['dataxxxx'], $dataxxxx['modeloxx'])->id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VsiEditarRequest $request, Vsi $objetoxx)
    {
        return $this->grabar([
            'dataxxxx' => $request->all(),
            'modeloxx' => $objetoxx,
            'menssage' => 'Vsi actualizada con éxito'
        ]);
    }

    public function inactivate(Vsi $modeloxx)
    {
        $this->estadoid = 2;
        $this->getBotones([$this->opciones['permisox'] . '-' . 'borrarxx', [], 1, 'INACTIVAR VSI', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx']]);
    }


    public function destroy(VsiActinactivarRequest $request, Vsi $modeloxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        $modeloxx->update($dataxxxx);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Vsi inactivada correctamente');
    }

    public function activate(Vsi $modeloxx)
    {
        $this->getBotones([$this->opciones['permisox'] . '-' . 'activarx', [], 1, 'ACTIVAR VSI', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);
    }

    public function activar(VsiActinactivarRequest $request, Vsi $modeloxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        $modeloxx->update($dataxxxx);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Vsi activada correctamente');
    }
}
