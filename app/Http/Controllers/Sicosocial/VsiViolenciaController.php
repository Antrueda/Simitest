<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;

use App\Http\Requests\Vsi\VsiViolenciaCrearRequest;
use App\Http\Requests\Vsi\VsiViolenciaEditarRequest;
use App\Models\sicosocial\VsiViolencia;
use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Support\Facades\Auth;

class VsiViolenciaController extends Controller
{
    use VsiTrait;
    use PuedeTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsiviole',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'VIOLENCIAS Y CONDICIÓN ESPECIAL',
            'carpetax' => 'Violencia',
            'slotxxxx' => 'vsiviole',
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
            'rutaxxxx' => 'vsiviole',
            'routnuev' => 'vsiviole',
            'routxxxx' => 'vsiviole',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }

    private function view($dataxxxx)
    {
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
        //$dataxxxx['padrexxx'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['sinoxxxz'] = Tema::combo(23, true, false);
        $this->opciones['sinoxxxx'] = Tema::combo(25, true, false);
        $this->opciones['contexto'] = Tema::comboAsc(142, false, false);
        $this->opciones['violenci'] = Tema::comboAsc(7, false, false);
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico->name;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];

        $vercrear=false;
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 3;
            if($this->opciones['modeloxx']->prm_tip_vio_id==227){
                $vercrear=true;
            }
            
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
        }
                $this->opciones['rowscols'] = 'rowspancolspan';
                $this->opciones['tablasxx'] = [
                
                    [
                        'titunuev' => 'INDICAR TIPO DE VIOLENCIA',
                        'titulist' => 'LISTA DE TIPO DE VIOLENCIA',
                        'dataxxxx' => [['campoxxx' => 'padrexxx', 'dataxxxx' => $this->opciones['vsixxxxx']->id]],
                        'relacion' => '',
                        'accitabl' => true,
                        'vercrear' => $vercrear,
                        'urlxxxxx' => route('vsitipov', $this->opciones['parametr']),
                        'cabecera' => [
                            [
                                ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                                ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                                ['td' => 'TIPO DE VIOLENCIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                                ['td' => 'FORMA DE VIOLENCIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                                ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                            ]
        ],
                        'columnsx' => [
                            ['data' => 'botonexx', 'name' => 'botonexx'],
                            ['data' => 'id', 'name' => 'vsi_tipo_vios.id'],
                            ['data' => 'tipo', 'name' => 'tipo.nombre as tipo'],
                            ['data' => 'forma', 'name' => 'forma.nombre as forma'],
                            ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                        ],
                        'tablaxxx' => 'datatable',
                        'permisox' => 'vsitipov',
                        'routxxxx' => 'vsitipov',
                        'parametr' => $this->opciones['parametr'],
                    ],
                ];
      
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
    public function store(VsiViolenciaCrearRequest $requestx, $padrexxx)
    {
        $requestx->request->add(['vsi_id'=> $padrexxx]); 
        $requestx->request->add(['sis_esta_id'=> 1]);
        return $this->grabar([
            'requestx' => $requestx,
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
                        'mostrars' => true, 'accionxx' => 'GUARDAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                        'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
                }
            }else{
                $this->opciones['botoform'][] =
                [
                    'mostrars' => false,
                ];
            }
        
        
        return $this->view(['modeloxx' => $objetoxx->VsiViolencia, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [VsiViolencia::transaccion($dataxxxx)->vsi_id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VsiViolenciaEditarRequest $requestx, Vsi $objetoxx)
    {
        return $this->grabar([
            'requestx' => $requestx,
            'modeloxx' => $objetoxx->VsiViolencia,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }
}
