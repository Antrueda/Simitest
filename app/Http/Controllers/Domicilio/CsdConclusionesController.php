<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Csd\CsdConclusionesCrearRequest;
use App\Http\Requests\Csd\CsdConclusionesEditarRequest;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdComFamiliar;
use App\Models\consulta\CsdConclusiones;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\Parametro;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Fi\FiTrait;
use Illuminate\Http\Request;

class CsdConclusionesController extends Controller
{
    use FiTrait;
    private $opciones;

    public function __construct()
    {

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
        if($dataxxxx['padrexxx']->csd->CsdDatosBasico==null){
            return redirect()
            ->route('csdatbas.nuevo', [$dataxxxx['padrexxx']->id])
            ->with('info', 'Por favor llene los datos basicos de la consulta primero');
        }
        //ddd($dataxxxx['padrexxx']->csd->CsdDatosBasico);
        $this->opciones['condicix'] = Tema::combo(23, false, false);
        $compfami=CsdComFamiliar::where('csd_id',$dataxxxx['padrexxx']->csd_id)
        ->where('s_documento',$dataxxxx['padrexxx']->csd->CsdDatosBasico->s_documento)
        ->first();
        $this->opciones['familiax'] = Parametro::find( $compfami->prm_parentezco_id)->combo;
        $nombrexx=$dataxxxx['padrexxx']->csd->CsdDatosBasico;
        $nombrexx=
        $nombrexx->s_primer_nombre.' '.
        $nombrexx->s_segundo_nombre.' '.
        $nombrexx->s_primer_apellido.' '.
        $nombrexx->s_segundo_apellido;
        $this->opciones['document']=$dataxxxx['padrexxx']->csd->CsdDatosBasico->s_documento;
        $this->opciones['nombrexx']=$nombrexx;
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
        $this->opciones['usuarios'] = User::comboCargo(true, false);
        $this->opciones['usuarioz'] = $this->opciones['usuarios'];
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

    $this->opciones['csdxxxxx']=$padrexxx;
    $this->opciones['rutaxxxx']=route($this->opciones['permisox'].'.nuevo',$padrexxx->id);
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
    $dataxxxx['csd_id'] = $padrexxx->id;
    $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
    return $this->grabar($dataxxxx, '', 'Conclusiones registradas con exito', $padrexxx);
}


public function show(CsdSisNnaj $padrexxx, CsdConclusiones $modeloxx)
{
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
    $this->opciones['csdxxxxx'] = $padrexxx;
    $this->opciones['botoform'][] =
        [
            'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
            'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
        ];
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
    return $this->grabar($request->all(), $modeloxx, 'Conclusiones actualizadas con exito', $padrexxx);
}


    function getResponsable(Request $request,CsdSisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $camposxx=['user_doc1_id'=>'#user_doc2_id','user_doc2_id'=>'#user_doc1_id'];
            $usuarios = User::userCombo(['cabecera' =>true, 'ajaxxxxx' => true, 'notinxxx' =>[$request->usernotx] ]);
            return response()->json(['dataxxxx'=>$usuarios,'comboxxx'=>$camposxx[$request->comboxxx]]);
        }
    }



}
