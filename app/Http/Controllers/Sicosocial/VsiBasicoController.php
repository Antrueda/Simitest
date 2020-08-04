<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiCrearRequest;
use App\Http\Requests\Vsi\VsiEditarRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisEsta;
use App\Models\sicosocial\Vsi;
use App\Models\sistema\SisDepen;
use App\Models\Tema;
use Carbon\Carbon;

class VsiBasicoController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 2, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsidabas',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'DATOS BASICOS',
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
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }



    private function view($dataxxxx)
    {
        $this->opciones['docuemen']=Tema::combo(3,true,false);
        $this->opciones['sinoxxxx']=Tema::combo(23,true,false);
        $this->opciones['sindocum']=Tema::combo(286,true,false);
        $this->opciones['sexoxxxx']=Tema::combo(11,true,false);
        $this->opciones['idengene']=Tema::combo(12,true,false);
        $this->opciones['oriesexu']=Tema::combo(13,true,false);
        $this->opciones['razonesx']=Tema::combo(102,true,false);
        $this->opciones['personas']=Tema::combo(66,true,false);
        $this->opciones['situacio']=Tema::combo(131,true,false);
        $this->opciones['emosione']=Tema::combo(195,true,false);
        $this->opciones['hoyxxxxx']= Carbon::today()->isoFormat('YYYY-MM-DD');
        $this->opciones['edadxxxx']=Carbon::today()->sub(28, 'years')->isoFormat('YYYY-MM-DD');


        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->name;
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr']=3;
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vsi $objetoxx)
    {
        $this->opciones['vsixxxxx']=$objetoxx;
        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx->nnaj->fi_datos_basico, 'accionxx' => 'Editar',
        'padrexxx' => $objetoxx->nnaj->fi_datos_basico]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [Vsi::transaccion($dataxxxx['dataxxxx'], $dataxxxx['modeloxx'])->id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VsiEditarRequest $request, Vsi $objetoxx)
    {
        return $this->grabar([
            'dataxxxx' => $request->all(),
            'modeloxx' => $objetoxx,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }

}
