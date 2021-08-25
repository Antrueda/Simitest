<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiActinactivarRequest;
use App\Http\Requests\Vsi\VsiCrearRequest;
use App\Http\Requests\Vsi\VsiEditarRequest;
use App\Models\fichaIngreso\NnajUpi;
use App\Traits\Vsi\VsiTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\sicosocial\Vsi;
use App\Models\Sistema\SisNnaj;
use App\Traits\Combos\CombosTrait;
use App\Traits\BotonesTrait;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Traits\Puede\PuedeTrait;

class VsiController extends Controller
{
    use VsiTrait;
    use ManageTimeTrait;
    use PuedeTrait;
    use CombosTrait; // trait que administra los combos
    use BotonesTrait;
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
        $this->opciones['rutacomp'] = 'Sicosocial.Acomponentes.';
        $this->opciones['rutabxxx'] = $this->opciones['rutacomp'].'tabsxxxx.tabsxxxx';
        $this->opciones['rutaperf'] = $this->opciones['rutacomp'].'tabsxxxx.perfilxx';
        $this->opciones['pestania'] = $this->opciones['rutacomp'] . 'Acrud.pestania';
        $this->opciones['rutaboto'] = $this->opciones['rutacomp'].'Botones.botones';
        $this->opciones['rutaform'] = $this->opciones['rutacarp'].$this->opciones['carpetax'].'.Formulario.formulario';
        $this->middleware([
            'permission:'
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
                'archdttb' => $this->opciones['rutacomp'] . 'Adatatable.index',
                // 'accitabl' => true,
                'vercrear' => true,
                'permtabl' => [
                    $this->opciones['permisox'] . '-leer',
                    $this->opciones['permisox'] . '-crear',
                    $this->opciones['permisox'] . '-editar',
                    $this->opciones['permisox'] . '-borrar',
                    $this->opciones['permisox'] . '-activarx',
                ],
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.vsisxxxx', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'UPI', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA DILIGENCIAMIENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
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
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'Acrud.index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getVsi(Request $request)
    {

        if ($request->ajax()) {
            $request->puedleer = auth()->user()->can('vsixxxxx-leer');
            $request->routexxx = [$this->opciones['routxxxx'], 'vsixxxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacomp'] . 'Botones.estadosx';
            return $this->getVsis($request);
        }
    }
    private function view($dataxxxx)
    {
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];

        $this->getBotones([
            'tituloxx' => 'VOLVER A VALORACIÓN SICOSOCIAL',
            'parametr' => [$dataxxxx['padrexxx']->sis_nnaj_id],
            'tipoboto' => 2,
            'routingx'=>$this->opciones['routxxxx'],
        ]);

        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->name;
        // $this->opciones['dependen'] = User::getUpiUsuario(false, false);
        $this->opciones['dependen'] = NnajUpi::getDependenciasNnajUsuario(false, false, $dataxxxx['padrexxx']->sis_nnaj_id);
        $this->opciones['userxxxx'] = [$dataxxxx['padrexxx']->id => $dataxxxx['padrexxx']->name];
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'cabecera' => false,
            'campoxxx' => 'id',
            'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
            $this->opciones['vsixxxxx'] = $dataxxxx['modeloxx'];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 3;
            $this->getBotones([
                'permisox' => 'crear',
                'tituloxx' => 'NUEVA VALORACIÓN SICOSOCIAL',
                'parametr' => [$dataxxxx['padrexxx']->id],
                'tipoboto' => 2,
                'routingx'=>$this->opciones['routxxxx'] . '.nuevo',
            ]);
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
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
        $this->getBotones(['permisox' => 'crear', 'tituloxx' => 'GUARDAR VSI']);
        $this->opciones['parametr'] = [$padrexxx->sis_nnaj_id];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $padrexxx]);
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
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => ['verxxxxx', 'formulario'], 'padrexxx' => $objetoxx->nnaj->fi_datos_basico]);
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
            $this->getBotones(['permisox' => 'editar', 'tituloxx' => 'GUARDAR VSI']);
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => ['editarxx', 'formulario'], 'padrexxx' => $objetoxx->nnaj->fi_datos_basico]);
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
        $this->opciones['rutabxxx'] = $this->opciones['rutacomp'].'tabsxxxx.tabsxxxy';
        $this->opciones['vsixxxxx'] = $modeloxx;
        $this->opciones['padrexxx'] = $modeloxx->id;
        $this->opciones['parametr'] = [$modeloxx->id];
        $this->estadoid = 2;
        $this->getBotones(['permisox' => 'borrar', 'tituloxx' => 'INACTIVAR VSI']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->nnaj->fi_datos_basico]);
    }


    public function destroy(VsiActinactivarRequest $request, Vsi $modeloxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        $modeloxx->update($dataxxxx);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Vsi inactivada correctamente');
    }

    public function activate(Vsi $modeloxx)
    {
        $this->opciones['rutabxxx'] = $this->opciones['rutacomp'].'tabsxxxx.tabsxxxy';
        $this->opciones['vsixxxxx'] = $modeloxx;
        $this->opciones['padrexxx'] = $modeloxx->id;
        $this->opciones['parametr'] = [$modeloxx->id];
        $this->getBotones(['permisox' => 'activarx', 'tituloxx' => 'ACTIVAR VSI']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->nnaj->fi_datos_basico]);
    }

    public function activar(VsiActinactivarRequest $request, Vsi $modeloxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        $modeloxx->update($dataxxxx);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Vsi activada correctamente');
    }
}
