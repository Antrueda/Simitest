<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiEducacionCrearRequest;
use App\Http\Requests\Vsi\VsiEducacionEditarRequest;
use App\Models\sicosocial\VsiEducacion;
use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Combos\CombosTrait;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VsiEducacionController extends Controller
{
    use VsiTrait;
    use PuedeTrait;
    use CombosTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsieduca',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'EDUCACIÓN',
            'carpetax' => 'Educacion',
            'slotxxxx' => 'vsieduca',
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
            'rutaxxxx' => 'vsieduca',
            'routnuev' => 'vsieduca',
            'routxxxx' => 'vsieduca',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }

    private function view($dataxxxx)
    {
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];

        $this->opciones['sinoxxxx'] = Tema::combo(23, true, false);
        $this->opciones['motivosx'] = Tema::comboAsc(205, true, false);
        $this->opciones['causasxx'] = Tema::comboAsc(207, false, false);
        $this->opciones['rendimie'] = Tema::comboAsc(206, true, false);
        $this->opciones['materiaf'] = Tema::comboAsc(208, false, false);
        $this->opciones['materiad'] = Tema::comboAsc(208, false, false);
        $this->opciones['dificulx'] = Tema::comboAsc(209, false, false);
        $this->opciones['dificuly'] = Tema::comboAsc(210, false, false);
        $this->opciones['readonly'] = '';
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico->name;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 3;


            if ($dataxxxx['modeloxx']->prm_estudia_id == 227) {
                $this->opciones['readonly'] = 'readonly';
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
    public function store(VsiEducacionCrearRequest $request, $padrexxx)
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
        if(Auth::user()->id==$objetoxx->user_crea_id||User::userAdmin()){
            if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                        'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
                }
            }else{
                $this->opciones['botoform'][] =
                [
                    'mostrars' => false,
                ];
            }
        
        return $this->view(['modeloxx' => $objetoxx->VsiEducacion, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx]);
    }

    private function grabar($dataxxxx)
    {
        
        $registro = VsiEducacion::transaccion($dataxxxx);

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
    public function update(VsiEducacionEditarRequest $request, Vsi $objetoxx)
    {
        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => $objetoxx->VsiEducacion,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }


    protected function validator(array $data)
    {
        $requestx = [
            'prm_estudia_id' => 'required|exists:parametros,id',
            'prm_motivo_id' => 'required_if:prm_estudia_id,228',
            'prm_rendimiento_id' => 'required_if:prm_estudia_id,227',
            'prm_dificultad_id' => 'required_if:prm_estudia_id,227',
            'prm_leer_id' => 'required_if:prm_dificultad_id,227',
            'prm_escribir_id' => 'required_if:prm_dificultad_id,227',
            'descripcion' => 'required|max:4000',
            'causas' => 'required_if:prm_motivo_id,1022|array',
            'fortalezas' => 'nullable|array',
            'dificultades' => 'nullable|array',
            'dificultadesb' => 'nullable|array',
        ];
        if ($data['prm_dificultad_id'] == 227 ) {
            $requestx['dificultadesa'] = 'required|array';
        }
        if($data['prm_estudia_id'] == 228 &
        ($data['dia']=='' || $data['dia']==0)&
        ($data['mes']=='' || $data['mes']==0)&
        ($data['ano']=='' || $data['ano']==0) ){
            $requestx['dia'] = 'required|min:0|max:99';
            $requestx['mes'] = 'nullable|min:0|max:99';
            $requestx['ano'] = 'nullable|min:0|max:99';
        }
        return Validator::make($data, $requestx);
    }


    function limpiar(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [[
                'causasxx' => Tema::combo(207, false, true),
                'rendimie' =>  Tema::combo(206, true, true),
                'motivosx' => Tema::combo(205, true, true),
                'materiad' =>  Tema::combo(208, false, true),
                'materiaf' =>  Tema::combo(208, false, true),
                'dificulx' =>  Tema::combo(209, false, true),
                'dificuly' =>  Tema::combo(210, false, true),
            ]];
            return response()->json($respuest);
        }
    }


    function dificulta(Request $request)
    {
        if ($request->ajax()) {
            $respuest = $this->getTemacomboCTNotIn([
                'temaxxxx'=>208,
                'campoxxx'=>'nombre',
                'orederby'=>'ASC',
                'cabecera' => true,
                'ajaxxxxx' => true,
                'notinxxx' => $request->valuexxx,
                'selected' => $request->selected,
            ])['comboxxx'];
            return response()->json($respuest);
        }
    }
    ///


 



}
