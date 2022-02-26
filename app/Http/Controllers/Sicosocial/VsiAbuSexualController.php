<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiAbuSexualCrearRequest;
use App\Http\Requests\Vsi\VsiAbuSexualEditarRequest;
use App\Models\Parametro;
use App\Models\sicosocial\VsiAbuSexual;
use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Support\Facades\Auth;

class VsiAbuSexualController extends Controller
{
    use VsiTrait;
    use PuedeTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsiabuso',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'PRESUNTO ABUSO SEXUAL',
            'carpetax' => 'Abusexual',
            'slotxxxx' => 'vsiabuso',
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
            'rutaxxxx' => 'vsiabuso',
            'routnuev' => 'vsiabuso',
            'routxxxx' => 'vsiabuso',

        ];
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }

    private function view($dataxxxx)
    {
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
        // 14.1 ¿En algún momento de su vida le ha ocurrido algún evento sexual negativo? 
        // 14.10 ¿Actualmente convive con el presunto agresor?  
        // 14.11 ¿Hay presencia o cercanía en la vivienda del presunto agresor?  
        // 14.13 ¿Existe apoyo de la situación por parte de la familiar?  
        // 14.14 ¿Se ha presentado denuncia ante las autoridades competentes?  
        // 14.15 ¿Ha recibido apoyo terapéutico?  
        $this->opciones['sinoxxxx'] = Tema::combo(23, true, false);
        $this->opciones['familiar'] = Tema::comboAsc(66, true, false);
        // 14.2 Momento en que se presentó el evento
        $this->opciones['eventoxx'] = Tema::comboAsc(202, true, false);
        //14.5 ¿Cuál fue el tipo de evento sexual negativo?    
        // 14.9 ¿Cuál fué el tipo de evento sexual negativo?
        $this->opciones['sexualxx'] = Tema::comboAsc(203, true, false);
        
        $this->opciones['estadosx'] = Tema::comboAsc(204, true, false);
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico->name;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 3;

            if ($dataxxxx['modeloxx']->prm_evento_id == 853) {
                $this->opciones['familiar'] = Parametro::find(235)->Combo;
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
    public function store(VsiAbuSexualCrearRequest $request, $padrexxx)
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

        return $this->view(['modeloxx' => $objetoxx->VsiAbuSexual, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx]);
    }

    private function grabar($dataxxxx)
    {
        $registro = VsiAbuSexual::transaccion($dataxxxx);

        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$registro->vsi_id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VsiAbuSexualEditarRequest $request, Vsi $objetoxx)
    {
        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => $objetoxx->VsiAbuSexual,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }
}
