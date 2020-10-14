<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdDinfamPadreCrearRequest;
use App\Http\Requests\Csd\CsdDinfamPadreEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdDinfamPadre;
use App\Models\Sistema\SisEsta;
use Illuminate\Http\Request;
use App\Models\Tema;
use App\Traits\Csd\CsdTrait;
use Illuminate\Support\Facades\Auth;

class BkCsdDinfamPadreController extends Controller
{
    use CsdTrait;
    private $opciones;

    public function __construct()
    {

        $this->opciones['permisox'] = 'csddfpad';
        $this->opciones['routxxxx'] = 'csddfpad';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'DinFamiliar';
        $this->opciones['slotxxxx'] = 'csddfpad';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "DINAMICA FAMILIAR";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tablaxxx'] = 'datatable';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['ruarchjs'] = [['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']];
        $this->opciones['confirmx'] = 'Desea inactivar la CSD: ';
        $this->opciones['reconfir'] = 'Realmente desea inactivar la CSD: ';
        $this->opciones['msnxxxxx']= 'No se puedo inactivar la vsi';
        $this->opciones['rutaxxxx'] = 'csddfpad';
        $this->opciones['routnuev'] = 'csddfpad';
       

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['vsidinam.editar', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A DINAMICA FAMILIAR', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index(Request $request,$padrexxx)
    {
        if ($request->ajax()) {
            $request->padrexxx = $padrexxx;
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getPadres($request);
        }
    }
    private function view($dataxxxx)
    {
        $this->opciones['diaxxxxx'] = 0;
        $this->opciones['mesxxxxx'] = 0;
        $this->opciones['anoxxxxx'] = 0;
        $this->opciones['hijoxxxx'] = 0;
        $this->opciones['sinoxxxx'] = Tema::combo(23, true, false);
        $this->opciones['separaci'] = Tema::combo(176, true, false);
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
        //$dataxxxx['padrexxx'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['botoform'][0]['routingx'][1] = [$this->opciones['vsixxxxx']->id];
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['diaxxxxx'] = $dataxxxx['modeloxx']->dia;
            $this->opciones['mesxxxxx'] = $dataxxxx['modeloxx']->mes;
            $this->opciones['anoxxxxx'] = $dataxxxx['modeloxx']->ano;
            $this->opciones['hijoxxxx'] = $dataxxxx['modeloxx']->hijo;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 3;
           // ddd($dataxxxx['padrexxx']);
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
    public function create(Csd $padrexxx)
    {
        $this->opciones['parametr'] = [$padrexxx->id];
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
    public function store(CsdDinfamPadreCrearRequest $request, $padrexxx)
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
    public function edit(CsdDinfamPadre $objetoxx)
    {
        //ddd($objetoxx->vsi->id);
        $this->opciones['parametr'] = [$objetoxx->vsi->id];
        $this->opciones['padrexxx'] = $objetoxx->id;
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx->vsi]);
    }
    public function show(CsdDinfamPadre $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->vsi_id];
        $this->opciones['padrexxx'] = $objetoxx->id;
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Ver', 'padrexxx' => $objetoxx->vsi]);
    }
    private function grabar($dataxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [CsdDinfamPadre::transaccion($dataxxxx)->id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CsdDinfamPadreEditarRequest $request, CsdDinfamPadre $objetoxx)
    {
        return $this->grabar([
            'dataxxxx' => $request->all(),
            'modeloxx' => $objetoxx,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }
    public function inactivate(CsdDinfamPadre $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Destroy', 'padrexxx' => $objetoxx->vsi]);
    }


    public function destroy(Request $request, CsdDinfamPadre $objetoxx)
    {
        $objetoxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['slotxxxx'].'.editar', [$objetoxx->vsi_id])
            ->with('info', 'Razón inactivada correctamente');
    }
}
