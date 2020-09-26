<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdJusticiaCrearRequest;
use App\Http\Requests\Csd\CsdJusticiaEditarRequest;
use App\Http\Requests\FichaIngreso\FiJustrestCrearRequest;
use App\Http\Requests\FichaIngreso\FiJustrestUpdateRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdJusticia;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiJustrest;
use App\Models\fichaIngreso\FiProcesoPard;
use App\Models\fichaIngreso\FiProcesoSpoa;
use App\Models\fichaIngreso\FiProcesoSrpa;
use App\Models\Tema;
use App\Traits\Fi\FiTrait;
use Illuminate\Http\Request;

class CsdJusticiaController extends Controller
{
    use FiTrait;
    private $opciones;
    public function __construct()
    {

        $this->opciones['permisox'] = 'csdjusticia';
        $this->opciones['routxxxx'] = 'csdjusticia';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Justicia';
        $this->opciones['slotxxxx'] = 'csdjusticia';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "JUSTICIA RESTAURATIVA";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['causasxx'] = Tema::combo(120, true, false);
        }

    private function view($dataxxxx)
    {
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'],
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.' . $dataxxxx['accionxx'][2]]
        ];
        $this->opciones['estadoxx'] = 'ACTIVO';
        if ($dataxxxx['modeloxx'] != '') {
            
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['puedexxx'] = '';
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
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
        $this->opciones['csdxxxxx']=$padrexxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario',  'js',], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx)
    {
        $usuariox = CsdJusticia::transaccion($dataxxxx);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$usuariox->id])
            ->with('info',$dataxxxx['infoxxxx']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdJusticiaCrearRequest $request, Csd $padrexxx)
    {
        $dataxxxx = $request->all();
        $request->request->add(['prm_tipofuen_id'=>2315]);
        $request->request->add(['sis_esta_id'=>1]);
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Justicia creada con exito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiJustrest  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(Csd $padrexxx, CsdJusticia $modeloxx)
    {
        $this->opciones['csdxxxxx']=$modeloxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.ver',$modeloxx->id);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'csd'], 'padrexxx' => $modeloxx->sis_nnaj->fi_datos_basico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiJustrest  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(Csd $padrexxx, CsdJusticia $modeloxx)
    {
        $this->opciones['csdxxxxx']=$modeloxx;
        $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.editar',$modeloxx->id);
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario', 'js',], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiJustrest  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdJusticiaEditarRequest $request,  Csd $padrexxx, CsdJusticia $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Justicia Restaurativa actualizada con exito', $padrexxx);
    }
}
