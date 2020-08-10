<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiConsumoCrearRequest;
use App\Http\Requests\Vsi\VsiConsumoEditarRequest;
use App\Models\sicosocial\VsiConsumo;
use App\Models\sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
class VsiConsumoController extends Controller
{
    use VsiTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsiconsu',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'CONSUMO DE SUSTANCIAS PSICOACTIVAS',
            'carpetax' => 'Consumo',
            'slotxxxx' => 'vsiconsu',
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
            'rutaxxxx' => 'vsiconsu',
            'routnuev' => 'vsiconsu',
            'routxxxx' => 'vsiconsu',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }

    private function view($dataxxxx)
    {
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
        $dataxxxx['padrexxx'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['sinoxxxx'] = Tema::combo(23, false, false);
        $this->opciones['contexto'] = Tema::combo(171, false, false);
        $this->opciones['motivosx'] = Tema::combo(180, false, false);
        $this->opciones['expectat'] = Tema::combo(181, false, false);
        $this->opciones['familiar'] = Tema::combo(66, false, false);

        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->name;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
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
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$padrexxx->id]],
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
    public function store(VsiConsumoCrearRequest $request, $padrexxx)
    {
       $request->request->add(['vsi_id' => $padrexxx]);
        return $this->grabar([
            'requestx' => $request,
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
    public function edit(VsiConsumo $objetoxx)
    {

        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->vsi_id];
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
        $registro = VsiConsumo::transaccion($dataxxxx);

        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$registro->id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VsiConsumoEditarRequest $request, VsiConsumo $objetoxx)
    {
        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => $objetoxx,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }


}
