<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class VsiMetaController extends Controller
{
    use VsiTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsimetas',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'POTENCIALIDADES Y METAS',
            'carpetax' => 'Meta',
            'slotxxxx' => 'vsimetas',
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
            'rutaxxxx' => 'vsimetas',
            'routnuev' => 'vsimetas',
            'routxxxx' => 'vsimetas',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-metaxxxx'
            ]);
    }
    private function view($dataxxxx)
    {
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
        $dataxxxx['padrexxx'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;

        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->name;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        $this->opciones['archivox']='';
        $vercrear=false;
        if($this->opciones['vsixxxxx']->user_crea_id==Auth::user()->id||User::userAdmin()){
            $vercrear=true;
        }
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
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
                'titunuev' => 'CREAR POTENCIALIDAD',
                'titulist' => 'LISTA DE POTENCIALIDADES',
                'dataxxxx' => [['campoxxx' => 'padrexxx', 'dataxxxx' => $this->opciones['vsixxxxx']->id]],
                'relacion' => '18.1 Potencialidad',
                'accitabl' => true,
                'vercrear' => $vercrear,
                'urlxxxxx' => route('vsimetpo', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'POTENCIALIDAD', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ]


                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'vsi_potencialidads.id'],
                    ['data' => 'potencialidad', 'name' => 'vsi_potencialidads.potencialidad'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablepotenci',
                'permisox' => 'vsimetpo',
                'routxxxx' => 'vsimetpo',
                'parametr' => $this->opciones['parametr'],
            ],
            [
                'titunuev' => 'CREAR META',
                'titulist' => 'LISTA DE METAS',
                'dataxxxx' => [['campoxxx' => 'padrexxx', 'dataxxxx' => $this->opciones['vsixxxxx']->id]],
                'relacion' => '18.2 Meta',
                'accitabl' => true,
                'vercrear' => $vercrear,
                'urlxxxxx' => route('vsimetme', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'METAS', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ]

                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'vsi_metas.id'],
                    ['data' => 'meta', 'name' => 'vsi_metas.meta'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablemetas',
                'permisox' => 'vsimetme',
                'routxxxx' => 'vsimetme',
                'parametr' => $this->opciones['parametr'],
            ]

        ];


        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function meta(Vsi $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$objetoxx->id]],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => 'Sin', 'padrexxx' => $objetoxx]);
    }
}
