<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiBasicoEditarRequest;
use App\Http\Requests\Vsi\VsiEditarRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisEsta;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use App\Traits\Puede\PuedeTrait;
use Carbon\Carbon;

class VsiBasicoController extends Controller
{
    private $opciones;
    use PuedeTrait;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 2, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsidabas',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'DATOS BÁSICOS',
            'carpetax' => 'Dbasicos',
            'slotxxxx' => 'vsidabas',
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
            'rutaxxxx' => 'vsidabas',
            'routnuev' => 'vsidabas',
            'routxxxx' => 'vsidabas',
            'routxxxy' => 'vsidatbi',
            'confirmx' => 'Desea inactivar la razón: ',
            'reconfir' => 'Realmente desea inactivar la razón: ',
            'msnxxxxx' => 'No se puedo inactivar la razón',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }



    private function view($dataxxxx)
    {

        $this->opciones['docuemen'] = Tema::combo(3, true, false);
        $this->opciones['sinoxxxx'] = Tema::combo(23, true, false);
        $this->opciones['sindocum'] = Tema::combo(286, true, false);
        $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
        $this->opciones['idengene'] = Tema::combo(12, true, false);
        $this->opciones['oriesexu'] = Tema::combo(13, true, false);
        $this->opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $this->opciones['edadxxxx'] = Carbon::today()->sub(28, 'years')->isoFormat('YYYY-MM-DD');


        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->name;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            
            $dataxxxx['modeloxx']->prm_documento_id=$dataxxxx['modeloxx']->nnaj_docu->prm_tipodocu_id;
            $dataxxxx['modeloxx']->prm_doc_fisico_id=$dataxxxx['modeloxx']->nnaj_docu->prm_doc_fisico_id;
            $dataxxxx['modeloxx']->prm_ayuda_id=$dataxxxx['modeloxx']->nnaj_docu->prm_ayuda_id;
            
            $dataxxxx['modeloxx']->s_documento=$dataxxxx['modeloxx']->nnaj_docu->s_documento;
            $dataxxxx['modeloxx']->s_nombre_identitario=$dataxxxx['modeloxx']->nnaj_sexo->s_nombre_identitario;
            $dataxxxx['modeloxx']->prm_sexo_id=$dataxxxx['modeloxx']->nnaj_sexo->prm_sexo_id;
            //ddd($dataxxxx['modeloxx']);
            $dataxxxx['modeloxx']->prm_identidad_genero_id=$dataxxxx['modeloxx']->nnaj_sexo->prm_identidad_genero_id;
            $dataxxxx['modeloxx']->prm_orientacion_sexual_id=$dataxxxx['modeloxx']->nnaj_sexo->prm_orientacion_sexual_id;
            $dataxxxx['modeloxx']->d_nacimiento=$dataxxxx['modeloxx']->nnaj_nacimi->d_nacimiento;
            
            //nnaj_sexo
            //nnaj_nacimi d_nacimiento
            
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
           // ddd( $this->opciones['modeloxx']);
            //prm_documento_id
            $this->opciones['pestpadr'] = 3;
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
        }
        $this->opciones['rowscols'] = 'rowspancolspan';

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'RAZONES',
                'titulist' => 'LISTA DE RAZONES',
                'dataxxxx' => [],

                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => route('vsidatbi', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'Acciones', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '1.11 Razones o problemas por las que el NNAJ se vincula al IDIPRON', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '1.12 ¿Qué persona(s) parecen producir o empeorar estas dificultades?', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '1.13 ¿Hace cuánto tiempo se presenta esta situación?', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 3],
                        ['td' => '1.14 ¿Qué situaciones, condiciones o actividades parecen producir o empeorar estas dificultades?', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => '1.15 ¿Qué emociones le generan estas dificultades?', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                    ],
                    [
                        ['td' => 'DIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'MES', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'AÑO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ]

                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'vsi_datos_vinculas.id'],
                    ['data' => 'razon', 'name' => 'razon.nombre'],
                    ['data' => 'personas', 'name' => 'personas'],
                    ['data' => 'dia', 'name' => 'vsi_datos_vinculas.dia'],
                    ['data' => 'mes', 'name' => 'vsi_datos_vinculas.mes'],
                    ['data' => 'ano', 'name' => 'vsi_datos_vinculas.ano'],
                    ['data' => 'situacio', 'name' => 'situacio'],
                    ['data' => 'emosione', 'name' => 'emosione'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => 'vsidatbi',
                'routxxxx' => 'vsidatbi',
                'parametr' => $this->opciones['parametr'],
            ]
        ];


        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vsi $objetoxx)
    { 
        $respuest=$this->getPuedeTPuede(['casoxxxx'=>1,
        'nnajxxxx'=>$objetoxx->sis_nnaj_id,
        'permisox'=>$this->opciones['permisox'] . '-editar',
        ]);
        if ($respuest) {
        $this->opciones['vsixxxxx'] = $objetoxx;
        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
            }
        }

        
        return $this->view([
            'modeloxx' => $objetoxx->nnaj->fi_datos_basico, 'accionxx' => 'Editar',
            'padrexxx' => $objetoxx->nnaj->fi_datos_basico
        ]);
    }

    private function grabar($dataxxxx)
    {
        FiDatosBasico::getTransactionVsi($dataxxxx['dataxxxx'], $dataxxxx['modeloxx'])->id;
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$dataxxxx['vsixxxxx']->id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VsiBasicoEditarRequest $request, Vsi $objetoxx)
    {
        return $this->grabar([
            'dataxxxx' => $request->all(),
            'modeloxx' => $objetoxx->nnaj->fi_datos_basico,
            'vsixxxxx' =>  $objetoxx,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }
}
