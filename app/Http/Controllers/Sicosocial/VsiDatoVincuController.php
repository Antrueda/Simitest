<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiDatoVincuCrearRequest;
use App\Http\Requests\Vsi\VsiDatoVincuEditarRequest;
use App\Models\Sistema\SisEsta;
use App\Models\sicosocial\VsiDatosVincula;
use App\Traits\Vsi\VsiTrait;
use Illuminate\Http\Request;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use Illuminate\Support\Facades\Auth;

class VsiDatoVincuController extends Controller
{
    use VsiTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsidatbi',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'RAZONES',
            'carpetax' => 'Vsidavin',
            'slotxxxx' => 'vsidabas',
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
            'rutaxxxx' => 'vsidatbi',
            'routnuev' => 'vsidatbi',
            'routxxxx' => 'vsidatbi',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);



        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['vsidabas.editar', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A DATOS BASICOS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'vsixxxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.botones.botonesapi';
            $request->tiempoxx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.botones.tiempoxx';
            $request->situacio = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.botones.situacio';
            $request->emosione = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.botones.emosione';

            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getDatosVincula($request);
        }
    }
    private function view($dataxxxx)
    {
        $this->opciones['razonesx'] = Tema::combo(102, true, false);
        $this->opciones['personas'] = Tema::combo(66, true, false);
        $this->opciones['situacio'] = Tema::combo(131, false, false);
        $this->opciones['emosione'] = Tema::combo(195, false, false);

        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
      //  $dataxxxx['padrexxx'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['tituhead'] = $this->opciones['usuariox'] ->name;
        $this->opciones['botoform'][0]['routingx'][1] = [$this->opciones['vsixxxxx']->id];
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 3;
         
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
    public function create(Vsi $padrexxx)
    {
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$padrexxx->id]],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => 'Crear', 'padrexxx' => $padrexxx]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VsiDatoVincuCrearRequest $request, $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['vsi_id'] = $padrexxx;
        return $this->grabar([
            'dataxxxx' => $dataxxxx,
            'modeloxx' => '',
            'menssage' => 'Registro creado con éxito'
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(VsiDatosVincula $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->vsi->id];
        $this->opciones['padrexxx'] = $objetoxx->id;
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx->vsi]);
    }

    private function grabar($dataxxxx)
    {
        $datoxxxx = VsiDatosVincula::transaccion($dataxxxx['dataxxxx'], $dataxxxx['modeloxx']);
        $datoxxxx->situaciones()->detach();
        $datoxxxx->emociones()->detach();
        foreach ($dataxxxx['dataxxxx']['situaciones'] as $d) {
            $datoxxxx->situaciones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        foreach ($dataxxxx['dataxxxx']['emociones'] as $d) {
            $datoxxxx->emociones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$datoxxxx->id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VsiDatoVincuEditarRequest $request, VsiDatosVincula $objetoxx)
    {
        return $this->grabar([
            'dataxxxx' => $request->all(),
            'modeloxx' => $objetoxx,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }
    public function inactivate(VsiDatosVincula $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Destroy', 'padrexxx' => $objetoxx->vsi]);
    }


    public function destroy(Request $request,VsiDatosVincula $objetoxx)
    {
        $objetoxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route('vsidabas.editar', [$objetoxx->id])
            ->with('info', 'Razón inactivada correctamente');
    }
}
