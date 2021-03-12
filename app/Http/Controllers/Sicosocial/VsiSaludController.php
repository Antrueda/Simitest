<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiSaludCrearRequest;
use App\Http\Requests\Vsi\VsiSaludEditarRequest;
use App\Models\sicosocial\VsiSalud;
use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use App\Traits\Puede\PuedeTrait;

class VsiSaludController extends Controller
{
    use VsiTrait;
    use PuedeTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsisalud',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'ANTECEDENTES DE SALUD',
            'carpetax' => 'Salud',
            'slotxxxx' => 'vsisalud',
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
            'rutaxxxx' => 'vsisalud',
            'routnuev' => 'vsisalud',
            'routxxxx' => 'vsisalud',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }

    private function view($dataxxxx)
    {
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
        //$dataxxxx['padrexxx'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['sinoxxxx'] = Tema::combo(517, true, false); // Anterior combo 23
        $this->opciones['sinoxxxxx'] = Tema::combo(518, true, false); // Anterior combo 23
        $this->opciones['sinoxxxxxx'] = Tema::combo(519, true, false); // Anterior combo 23
        $this->opciones['sinoxxxxxxx'] = Tema::combo(520, true, false); // Anterior combo 23
        $this->opciones['sinoxxxxxxxx'] = Tema::combo(521, true, false); // Anterior combo 23
        $this->opciones['sinoxxxxxxxxx'] = Tema::combo(522, true, false); // Anterior combo 23
        $this->opciones['sinoxxxxxxxxxx'] = Tema::combo(523, true, false); // Anterior combo 23
        $this->opciones['sinoxxxxxxxxxxx'] = Tema::combo(524, true, false); // Anterior combo 23
        $this->opciones['motivosx'] = Tema::combo(87, true, false);
        $this->opciones['causasxx'] = Tema::combo(207, false, false);
        $this->opciones['rendimie'] = Tema::combo(206, true, false);
        $this->opciones['materias'] = Tema::combo(208, false, false);
        $this->opciones['dificulx'] = Tema::combo(209, false, false);
        $this->opciones['dificuly'] = Tema::combo(210, false, false);

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico->name;
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
    public function store(VsiSaludCrearRequest $request, $padrexxx)
    {
       $request->request->add(['vsi_id' => $padrexxx]);
       $request->request->add(['sis_esta_id'=> 1]);
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

        //$this->opciones['padrexxx'] = $objetoxx->id;
        //$this->opciones['parametr'] = [$objetoxx->vsi_id];

           // ddd( $objetoxx);
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
            }

        //ddd($objetoxx->VsiSalud);
        return $this->view(['modeloxx' => $objetoxx->VsiSalud, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx]);
    }

    private function grabar($dataxxxx)
    {
        //$registro = VsiSalud::transaccion($dataxxxx);

        return redirect()
        ->route($this->opciones['routxxxx'] . '.editar', [VsiSalud::transaccion($dataxxxx)->vsi_id])
        ->with('info', $dataxxxx['menssage']);
 }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VsiSaludEditarRequest $request, Vsi $objetoxx)
    {
        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => $objetoxx->VsiSalud,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }


}
