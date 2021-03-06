<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiGenIngresoCrearRequest;
use App\Http\Requests\Vsi\VsiGenIngresoEditarRequest;
use App\Http\Requests\Vsi\VsiGenIngresosCrearRequest;
use App\Http\Requests\Vsi\VsiGenIngresosEditarRequest;
use App\Models\Parametro;
use App\Models\sicosocial\VsiGenIngreso;
use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class VsiGenIngresosController extends Controller
{
    use VsiTrait;
    use PuedeTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsigener',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'GENERACIÓN DE INGRESOS',
            'carpetax' => 'Geningreso',
            'slotxxxx' => 'vsigener',
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
            'rutaxxxx' => 'vsigener',
            'routnuev' => 'vsigener',
            'routxxxx' => 'vsigener',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }

    private function view($dataxxxx)
    {
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
        $this->opciones['activida'] = Tema::combo(114, true, false);
        $this->opciones['actividx'] = Tema::combo(114, false, false);
        $this->opciones['informal'] = Tema::combo(115, TRUE, false);
        $this->opciones['otrosxxx'] = Tema::combo(116, TRUE, false);
        $this->opciones['ningunax'] = Tema::combo(122, TRUE, false);
        $this->opciones['tiempoxx'] = Tema::combo(4, false, false);
        $this->opciones['ampmxxxx'] = Tema::combo(5, false, false);
        $this->opciones['semanaxx'] = Tema::combo(129, false, false);
        $this->opciones['frecuenc'] = Tema::combo(110, true, false);
        $this->opciones['laboralx'] = Tema::combo(117, true, false);
        $this->opciones['sinoxxxx'] = Tema::combo(23, true, false);
        $this->opciones['parentes'] = Tema::combo(66, false, false);
        $this->opciones['jorgener'] = Tema::combo(123, true, false);
        $this->opciones['cuantoxx'] = '';

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico->name;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
          
            
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 3;
            if($dataxxxx['modeloxx']->prm_actividad_id==853){
                $this->opciones['jorgener']=Parametro::find(235)->Combo;
            }

            if($dataxxxx['modeloxx']->prm_no_id!=711){
                $this->opciones['cuantoxx']='readonly';
                $this->opciones['tiempoxx']=Parametro::find(235)->Combo;
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
    public function store(VsiGenIngresosCrearRequest $request, $padrexxx)
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
        
        return $this->view(['modeloxx' => $objetoxx->VsiGenIngreso, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
        ->route($this->opciones['routxxxx'] . '.editar', [VsiGenIngreso::transaccion($dataxxxx)->vsi_id])
        ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VsiGenIngresosEditarRequest $request, Vsi $objetoxx)
    {
       
        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => $objetoxx->VsiGenIngreso,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }

    protected function validator(array $data){
        return Validator::make($data, [

            'prm_actividad_id' => 'required|exists:parametros,id',
            'trabaja' => 'required_if:prm_actividad_id,626|max:120',
            'prm_informal_id' => 'required_if:prm_actividad_id,627',
            'prm_otra_id' => 'required_if:prm_actividad_id,628',
            'prm_no_id' => 'required_if:prm_actividad_id,853',
            'cuanto' => 'required_if:prm_no_id,711',
            'prm_periodo_id' => 'required_if:prm_actividad_id,853|required_if:prm_no_id,711',
            'prm_jornada_genera_ingreso_id'=> 'required_if:prm_actividad_id,853|required_if:prm_no_id,711',
            'jornada_entre' => 'required_unless:prm_actividad_id,853',
            'prm_jor_entre_id' => 'required_unless:prm_actividad_id,853',
            'jornada_a' => 'required_unless:prm_actividad_id,853',
            'prm_jor_a_id' => 'required_unless:prm_actividad_id,853',
            'prm_frecuencia_id' => 'required_unless:prm_actividad_id,853',
            'aporte' => 'required_unless:prm_actividad_id,853',
            'prm_laboral_id' => 'required_if:prm_actividad_id,626',
            'prm_aporta_id' => 'required_unless:prm_actividad_id,853',
            'porque' => 'required_if:prm_aporta_id,853',
            'cuanto_aporta' => 'required_if:prm_aporta_id,853',
            'expectativa' => 'nullable|string|max:4000',
            'descripcion' => 'nullable|string|max:4000',
            'dias' => 'required_unless:prm_actividad_id,853',
            'quienes' => 'nullable|array',
            'labores' => 'nullable|array',
        ]);
    }

    protected function validatorMayor(array $data){
        return Validator::make($data, [
            'expectativa' => 'required|string|max:4000',
            'descripcion' => 'required|string|max:4000',
            'quienes' => 'required|array',
            'labores' => 'required|array',
        ]);
    }

    public function jornada(\Illuminate\Http\Request $request)
    {

        if ($request->ajax()) {
            $respuest=Tema::combo(123, true, true);
            if($request->padrexxx==853){
            $respuest=[['valuexxx'=>235,'optionxx'=>'N/A']];
            }
            return response()->json($respuest);
        }
    }

    function limpiar(Request $request)
    {

        if ($request->ajax()) {
            $respuest = [[
                'semanaxx' => Tema::combo(129, false, true),
                'parentes' =>  Tema::combo(66, false, true),
                'actividx' =>  Tema::combo(114, false, true),
                'frecuenc' =>  Tema::combo(110, true, true),
                'activida' =>  Tema::combo(23, true, true),
            ]];
            return response()->json($respuest);
        }
    }
}
