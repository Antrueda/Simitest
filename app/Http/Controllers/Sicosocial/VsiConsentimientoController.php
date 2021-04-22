<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiConsentimientoCrearRequest;
use App\Http\Requests\Vsi\VsiConsentimientoEditarRequest;

use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiConsentimiento;
use App\Models\User;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Http\Request;

class VsiConsentimientoController extends Controller
{
    use VsiTrait;
    use PuedeTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsiconse',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'CONSENTIMIENTO INFORMADO',
            'carpetax' => 'Concentimiento',
            'slotxxxx' => 'vsiconse',
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
            'rutaxxxx' => 'vsiconse',
            'routnuev' => 'vsiconse',
            'routxxxx' => 'vsiconse',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }

    private function view($dataxxxx)
    {
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
        ;

        $this->opciones['usuarios'] = User::userComboRol(['cabecera' =>true, 'ajaxxxxx' => false, 'notinxxx' =>0,'rolxxxxx'=>[4]]);
        $this->opciones['usuarioz'] = User::userComboRol(['cabecera' =>true, 'ajaxxxxx' => false, 'notinxxx' =>0,'rolxxxxx'=>[3]]);
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico->name;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
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
    public function store(VsiConsentimientoCrearRequest $request, $padrexxx)
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
 
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
            }
        
        return $this->view(['modeloxx' => $objetoxx->VsiConsentimiento, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx]);
    }

    private function grabar($dataxxxx)
    {

        $registro = VsiConsentimiento::transaccion($dataxxxx);

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
    public function update(VsiConsentimientoEditarRequest $request, Vsi $objetoxx)
    {
        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => $objetoxx->VsiConsentimiento,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }

    function getResponsable(Request $request,Vsi $padrexxx)
    {
        if ($request->ajax()) {
            $camposxx=['user_doc1_id'=>'#user_doc2_id','user_doc2_id'=>'#user_doc1_id'];
            $usuarios = User::userComboRol(['cabecera' =>true, 'ajaxxxxx' => true, 'notinxxx' =>[$request->usernotx],'rolxxxxx'=>[3]]);
            return response()->json(['dataxxxx'=>$usuarios,'comboxxx'=>$camposxx[$request->comboxxx]]);
        }
    }


}
