<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdConclusionesCrearRequest;
use App\Http\Requests\Csd\CsdConclusionesEditarRequest;

use App\Models\consulta\CsdComFamiliar;
use App\Models\consulta\CsdConclusiones;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Parametro;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Fi\FiTrait;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CsdConclusionesController extends Controller
{
    use FiTrait;
    use PuedeTrait;
    // private $opciones=['botoform'=>[]];

    public function __construct()
    {
        $this->opciones['botoform'] = [];
        $this->opciones['permisox'] = 'csdconclusiones';
        $this->opciones['routxxxx'] = 'csdconclusiones';
        $this->opciones['rutacarp'] = 'Csd.';
        $this->opciones['carpetax'] = 'Conclusiones';
        $this->opciones['slotxxxx'] = 'csdconclusiones';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "CONCLUSIONES DE LA CONSULTA SOCIAL EN DOMICILIO";
        $this->opciones['pestpadr'] = 3; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'CONSULTA SOCIAL EN DOMICILIO';
        $this->opciones['readonly'] = '';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
    }



    private function view($dataxxxx)
    {
        if ($dataxxxx['padrexxx']->csd->CsdDatosBasico == null) {
            return redirect()
                ->route('csdatbas.nuevo', [$dataxxxx['padrexxx']->id])
                ->with('info', 'Por favor llene los datos basicos de la consulta primero');
        }
        $this->opciones['condicix'] = Tema::combo(23, false, false);
        $compfami = CsdComFamiliar::where('csd_id', $dataxxxx['padrexxx']->csd_id)
        ->where('s_documento', $dataxxxx['padrexxx']->csd->CsdDatosBasico->s_documento)
        ->first();
        if (Auth::user()->s_documento=='17496705') {
            // $compfami = CsdComFamiliar::where('s_documento', $dataxxxx['padrexxx']->csd->CsdDatosBasico->s_documento)
            // ->get();
           
        }
       
         
        if (is_null($compfami)) {
            $document=$dataxxxx['padrexxx']->csd->CsdDatosBasico->s_documento;
            $nombresx=$dataxxxx['padrexxx']->csd->CsdDatosBasico;
            $nombresx=$nombresx->s_primer_nombre .' '.$nombresx->s_segundo_nombre .' '.$nombresx->s_primer_apellido .' '.$nombresx->s_segundo_apellido;
            // if (Auth::user()->s_documento == '1070010061') {
            //     dd( $nombresx);
            // }
            return redirect()
                ->route('csdcomfamiliar.nuevo', [$dataxxxx['padrexxx']->id])
                ->with('info1', "La persona: $nombresx con documento de identidad: $document no se encuentra en la composición familiar, 
                para continuar con las observaciones primero se debe agregar");
        }
        // if (Auth::user()->s_documento == '1070010061') {
       
        $this->opciones['familiax'] = Parametro::find($compfami->prm_parentezco_id)->combo;
        $nombrexx = $dataxxxx['padrexxx']->csd->CsdDatosBasico;
        $nombrexx =
            $nombrexx->s_primer_nombre . ' ' .
            $nombrexx->s_segundo_nombre . ' ' .
            $nombrexx->s_primer_apellido . ' ' .
            $nombrexx->s_segundo_apellido;
        $this->opciones['document'] = $dataxxxx['padrexxx']->csd->CsdDatosBasico->s_documento;
        $this->opciones['nombrexx'] = $nombrexx;
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico;
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],

        ];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        $this->opciones['usuarios'] = User::userComboRol(['cabecera' => true, 'ajaxxxxx' => false, 'notinxxx' => 0, 'rolxxxxx' => [4]]);
        $this->opciones['usuarioz'] = User::userComboRol(['cabecera' => true, 'ajaxxxxx' => false, 'notinxxx' => 0, 'rolxxxxx' => [3, 4]]);
        $this->opciones['estadoxx'] = 'ACTIVO';


        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['pestpadr'] = 3;
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
        }
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(CsdSisNnaj $padrexxx)
    {

        $this->opciones['csdxxxxx'] = $padrexxx;
        $this->opciones['rutaxxxx'] = route($this->opciones['permisox'] . '.nuevo', $padrexxx->id);
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$padrexxx->id, CsdConclusiones::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CsdConclusionesCrearRequest $request, CsdSisNnaj $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['csd_id'] = $padrexxx->csd_id;
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Conclusiones registradas con éxito', $padrexxx);
    }


    public function show(CsdSisNnaj $padrexxx, CsdConclusiones $modeloxx)
    {
        $this->opciones['csdxxxxx'] = $padrexxx;
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiSustanciaformulario $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(CsdSisNnaj $padrexxx, CsdConclusiones $modeloxx)
    {

        $value = Session::get('csdver_' . Auth::id());
        if (!$value) {
            return redirect()
                ->route($this->opciones['permisox'] . '.ver', [$padrexxx->id, $modeloxx->id]);
        }
        $this->opciones['csdxxxxx'] = $padrexxx;
        if (Auth::user()->id == $padrexxx->user_crea_id || User::userAdmin()) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        } else {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => false,
                ];
        }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\FiSustanciaConsumida $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(CsdConclusionesEditarRequest $request,  CsdSisNnaj $padrexxx, CsdConclusiones $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Conclusiones actualizadas con éxito', $padrexxx);
    }


    function getResponsable(Request $request, CsdSisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $camposxx = ['user_doc1_id' => '#user_doc2_id', 'user_doc2_id' => '#user_doc1_id'];
            $usuarios = User::userComboRol(['cabecera' => true, 'ajaxxxxx' => true, 'notinxxx' => [$request->usernotx], 'rolxxxxx' => [3, 4]]);
            return response()->json(['dataxxxx' => $usuarios, 'comboxxx' => $camposxx[$request->comboxxx]]);
        }
    }
}
