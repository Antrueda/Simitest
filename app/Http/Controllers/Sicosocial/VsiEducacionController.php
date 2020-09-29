<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Models\sicosocial\VsiEducacion;
use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class VsiEducacionController extends Controller
{
    use VsiTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsieduca',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'EDUCACION',
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
        $this->opciones['motivosx'] = Tema::combo(205, true, false);
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
    public function store(Request $request, $padrexxx)
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
    public function edit(Vsi $objetoxx)
    {


        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx->VsiEducacion, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx]);
    }

    private function grabar($dataxxxx)
    {
        $this->validator($dataxxxx['requestx']->all())->validate();
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
    public function update(Request $request, Vsi $objetoxx)
    {
        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => $objetoxx->VsiEducacion,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }
//10.5,10.8,

    protected function validator(array $data){
        return Validator::make($data, [
            'prm_estudia_id' => 'required|exists:parametros,id',
            'dia' => 'nullable|min:0|max:99',
            'mes' => 'nullable|min:0|max:99',
            'ano' => 'nullable|min:0|max:99',
            'prm_motivo_id' => 'required_if:prm_estudia_id,228',
            'prm_rendimiento_id' => 'required_if:prm_estudia_id,227|exists:parametros,id',
            'prm_dificultad_id' => 'required_if:prm_estudia_id,227|exists:parametros,id',
            'prm_leer_id' => 'required_if:prm_dificultad_id,227',
            'prm_escribir_id' => 'required_if:prm_dificultad_id,227',
            'descripcion' => 'required|max:4000',
            'causas' => 'required_if:prm_motivo_id,1022|array',
            'fortalezas' => 'nullable|array',
            'dificultades' => 'nullable|array',
            'dificultadesa' => 'required_if:prm_dificultad_id,227|array',
            'dificultadesb' => 'nullable|array',
        ]);
    }
}
