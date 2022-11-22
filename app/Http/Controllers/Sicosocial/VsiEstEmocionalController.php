<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiEstEmocionalCrearRequest;
use App\Http\Requests\Vsi\VsiEstEmocionalEditarRequest;
use App\Models\Parametro;
use App\Models\sicosocial\VsiEstEmocional;
use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Support\Facades\Auth;

class VsiEstEmocionalController extends Controller
{
    use VsiTrait;
    use PuedeTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsiemoci',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'ESTADO EMOCIONAL',
            'carpetax' => 'Estemocional',
            'slotxxxx' => 'vsiemoci',
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
            'rutaxxxx' => 'vsiemoci',
            'routnuev' => 'vsiemoci',
            'routxxxx' => 'vsiemoci',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }

    private function view($dataxxxx)
    {
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
        //$dataxxxx['padrexxx'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['sinoxxxx'] = Tema::combo(23, true, false);
        $this->opciones['sentimie'] = Tema::comboAsc(170, true, false);
        $this->opciones['contexto'] = Tema::comboAsc(160, false, false);
        $this->opciones['reaccion'] = Tema::comboAsc(194, true, false);
        $this->opciones['emocione'] = Tema::comboAsc(195, false, false);
        $this->opciones['dificult'] = Tema::comboAsc(195, false, false);
        $this->opciones['estresan'] = Tema::comboAsc(293, false, false);
        $this->opciones['aconteci'] = Tema::comboAsc(300, false, false);
        $this->opciones['riesgosx'] = Tema::comboAsc(198, true, false);
        $this->opciones['conducta'] = Tema::comboAsc(200, false, false);

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico->name;
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
        //$this->opciones['parametr'] = [$padrexxx->id];
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
    public function store(VsiEstEmocionalCrearRequest $request, $padrexxx)
    {
        $request->request->add(['vsi_id' => $padrexxx]);
        $request->request->add(['sis_esta_id' => 1]);
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
    public function edit(Vsi $objetoxx)
    {

        if (Auth::user()->id == $objetoxx->user_crea_id || User::userAdmin()) {
            if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                        'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        } else {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => false,
                ];
        }

        return $this->view(['modeloxx' => $objetoxx->VsiEstEmocional, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx]);
    }

    private function grabar($dataxxxx)
    {
        //$registro = VsiEstEmocional::transaccion($dataxxxx);

        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [VsiEstEmocional::transaccion($dataxxxx)->vsi_id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VsiEstEmocionalEditarRequest $request, Vsi $objetoxx)
    {

        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => $objetoxx->VsiEstEmocional,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }
}
