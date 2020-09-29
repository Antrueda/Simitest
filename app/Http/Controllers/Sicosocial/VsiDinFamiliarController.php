<?php

namespace App\Http\Controllers\Sicosocial;

use App\Helpers\Archivos\Archivos;
use App\Http\Controllers\Controller;

use App\Http\Requests\Vsi\VsiDinFamiliarCrearRequest;
use App\Http\Requests\Vsi\VsiDinFamiliarEditarRequest;
use App\Models\sicosocial\VsiDinFamiliar;
use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;

class VsiDinFamiliarController extends Controller
{
    use VsiTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsidinam',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'DINAMICA FAMILIAR',
            'carpetax' => 'DinFamiliar',
            'slotxxxx' => 'vsidinam',
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
            'rutaxxxx' => 'vsidinam',
            'routnuev' => 'vsidinam',
            'routxxxx' => 'vsidinam',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }

    private function view($dataxxxx)
    {
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
    
        $this->opciones['sinoxxxx'] = Tema::combo(23, false, false);
        $this->opciones['familiax'] = Tema::combo(98, true, false);
        $this->opciones['hogarxxx'] = Tema::combo(99, true, false);
        $this->opciones['familiay'] = Tema::combo(66, false, false);
        $this->opciones['ausencia'] = Tema::combo(292, false, false);
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico->name;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        $this->opciones['archivox']='';
        $vercrear = false;
        
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $vercrear =true;
            foreach (explode('/', $dataxxxx['modeloxx']->s_doc_adjunto) as $value) {
                $this->opciones['archivox'] = $value;
            }

            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 3;
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
        }

        $this->opciones['rowscols'] = 'rowspancolspan';
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR RELACION',
                'titulist' => 'LISTA DE RELACIONES DEL PROGENITOR',
                'dataxxxx' => ['campoxxx' => 'padrexxx', 'dataxxxx' => $this->opciones['vsixxxxx']->id],
                'relacion' => '5.2.1 Relaciones de la progenitor (Cuando el vinculado se NNA) o relaciones del joven vinculado al IDIPRON',
                'accitabl' => true,
                'vercrear' => $vercrear,
                'urlxxxxx' => route('vsidfpad', $this->opciones['parametr'] ),
                'cabecera' => [
                    [
                        ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'CONVIVIERON', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'TIEMPO DE CONVIVENCIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 3],
                        ['td' => '# HIJOS(AS)', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'MOTIVO DE SEPARACION', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                    ],
                    [
                        ['td' => 'DIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'MES', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'AñO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ]

                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'vsi_dinfam_padres.id'],
                    ['data' => 'convive', 'name' => 'convive.nombre as convive'],
                    ['data' => 'dia', 'name' => 'vsi_dinfam_padres.dia'],
                    ['data' => 'mes', 'name' => 'vsi_dinfam_padres.mes'],
                    ['data' => 'ano', 'name' => 'vsi_dinfam_padres.ano'],
                    ['data' => 'hijo', 'name' => 'vsi_dinfam_padres.hijo'],
                    ['data' => 'separado', 'name' => 'separado.nombre as separado'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablepadre',
                'permisox' => 'vsidfpad',
                'routxxxx' => 'vsidfpad',
                'parametr' => $this->opciones['parametr'] ,
            ],
            [
                'titunuev' => 'CREAR RELACION',
                'titulist' => 'LISTA DE RELACIONES DE LA PROGENITORA',
                'dataxxxx' => ['campoxxx' => 'padrexxx', 'dataxxxx' => $this->opciones['vsixxxxx']->id],
                'relacion' => '5.2.2 Relaciones del progenitora (Cuando el vinculado se NNA) o relaciones del joven vinculado al IDIPRON',
                'accitabl' => true,
                'vercrear' => $vercrear,
                'urlxxxxx' => route('vsidfmad', $this->opciones['parametr'] ),
                'cabecera' => [
                    [
                        ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'CONVIVIERON', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'TIEMPO DE CONVIVENCIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 3],
                        ['td' => '# HIJOS(AS)', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'MOTIVO DE SEPARACION', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                    ],
                    [
                        ['td' => 'DIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'MES', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'AñO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ]

                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'vsi_dinfam_pamres.id'],
                    ['data' => 'convive', 'name' => 'convive.nombre as convive'],
                    ['data' => 'dia', 'name' => 'vsi_dinfam_pamres.dia'],
                    ['data' => 'mes', 'name' => 'vsi_dinfam_pamres.mes'],
                    ['data' => 'ano', 'name' => 'vsi_dinfam_pamres.ano'],
                    ['data' => 'hijo', 'name' => 'vsi_dinfam_pamres.hijo'],
                    ['data' => 'separado', 'name' => 'separado.nombre as separado'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablew',
                'permisox' => 'vsidfmad',
                'routxxxx' => 'vsidfmad',
                'parametr' => $this->opciones['parametr'] ,
            ]

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
    public function store(VsiDinFamiliarCrearRequest $requestx, $padrexxx)
    {
        
        
        $requestx->request->add(['vsi_id'=> $padrexxx]); 
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

     // public function edit(VsiDinFamiliar $objetoxx)

    public function edit(Vsi $objetoxx)
    {
      
      //  $this->opciones['padrexxx'] = $objetoxx->id;
       
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx->VsiDinFamiliar, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [VsiDinFamiliar::transaccion($dataxxxx)->vsi_id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VsiDinFamiliarEditarRequest $requestx,Vsi $objetoxx )
    {
        
            return $this->grabar([
            'requestx' => $requestx,
            'modeloxx' => $objetoxx->VsiDinFamiliar,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }
}
