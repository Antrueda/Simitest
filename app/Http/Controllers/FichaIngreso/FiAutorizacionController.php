<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiAutorizacionCrearRequest;
use App\Http\Requests\FichaIngreso\FiAutorizacionUpdateRequest;
use App\Models\fichaIngreso\FiAutorizacion;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Parametro;
use App\Models\Tema;
use App\Traits\Fi\FiTrait;
use App\Traits\Interfaz\InterfazFiTrait;
use App\Traits\Puede\PuedeTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FiAutorizacionController extends Controller
{

    use FiTrait;
    use InterfazFiTrait;
    use PuedeTrait;
    public function __construct()
    {

        $this->opciones['permisox'] = 'fiautorizacion';
        $this->opciones['routxxxx'] = 'fiautorizacion';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Autorizacion';
        $this->opciones['slotxxxx'] = 'fiautorizacion';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['tituloxx'] = "AUTORIZACIÓN DE VINCULACIÓN, USO Y PUBLICACIÓN DE FOTOS";
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        $this->opciones['readonly'] = '';

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['docrepre'] = Tema::comboAsc(64, true, false);
        $this->opciones['modalupi'] = Tema::comboAsc(65, false, false);
        $this->opciones['docmened'] = Tema::comboAsc(150, true, false);
        $this->opciones['condicio'] = Tema::comboAsc(23, true, false);
        $this->opciones['tipodili'] = Tema::comboAsc(302, true, false);
    }

    private function view($dataxxxx)
    {

        $this->opciones['parentes'] = Tema::combo(66, true, false);
        $edad = $dataxxxx['padrexxx']->nnaj_nacimi->Edad;

        $compofami = FiCompfami::getComboResponsable($dataxxxx['padrexxx'], true, false, $edad);
        if ($compofami[0]) {
            return redirect()
                ->route('ficomposicion', [$dataxxxx['padrexxx']->id])
                ->with('info', 'No hay un componente familiar mayor de edad, por favor créelo');
        }
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';

        $this->opciones['edadxxxx'] = $edad;

        //Esconder campos según la edad


        $this->opciones['autoriza'] = $compofami[1];
        $this->opciones['sdocumen'] = '';
        $this->opciones['expedici'] = '';
        $this->opciones['encalida'] = '';
        $this->opciones['expedici'] = '';


        if ($edad >= 18) { // mayor de edad
            $expedici=$dataxxxx['padrexxx']->nnaj_docu->sis_municipio;
            $this->opciones['encalida'] = Parametro::where('id', 805)->first()->nombre;
            $this->opciones['expedici'] =  $expedici->sis_departam->sis_pai->s_pais . ' ' . $expedici->sis_departam->s_departamento . ' ' . $expedici->s_municipio;
            $this->opciones['sdocumen'] = $dataxxxx['padrexxx']->nnaj_docu->s_documento;
        } else { // menor de edad
            //$this->opciones['condicio'] = [1 => 'NO APLICA'];
        }

        $this->opciones['estadoxx'] = 'ACTIVO';

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $dataxxxx['modeloxx']->d_autorizacion=explode(' ',$dataxxxx['modeloxx']->d_autorizacion)[0];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['estadoxx'] = $dataxxxx['modeloxx']->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
        }
        $this->opciones['modaling'] = FiAutorizacion::getModalidad($dataxxxx['modeloxx']);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FiDatosBasico $padrexxx)
    {
        $compofam = FiCompfami::where('id', 1)->first();
        $vestuari = FiAutorizacion::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('fiautorizacion.editar', [$padrexxx->id, $vestuari->id]);
        }
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => ['crear', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    private function grabar($dataxxxx, $objetoxx, $infoxxxx, $padrexxx)
    {
        return redirect()
            ->route('fiautorizacion.editar', [$padrexxx->id, FiAutorizacion::transaccion($dataxxxx,  $objetoxx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiAutorizacionCrearRequest $request, FiDatosBasico $padrexxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Autorización creada con éxito', $padrexxx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiAutorizacion  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx, FiAutorizacion $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiAutorizacion  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx, FiAutorizacion $modeloxx)
    {
        $respuest=$this->getPuedeTPuede(['casoxxxx'=>1,
        'nnajxxxx'=>$modeloxx->sis_nnaj_id,
        'permisox'=>$this->opciones['permisox'] . '-editar',
        ]);
        if ($respuest) {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
         }
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'], 'padrexxx' => $padrexxx]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiAutorizacion  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiAutorizacionUpdateRequest $request, FiDatosBasico $padrexxx, FiAutorizacion $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Autorización actualizada con éxito',$padrexxx);
    }


    public function autoriza(Request $request, $padrexxx)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $respuest = ['sdocumen' => ' ', 'expedici' => ' '];
            if ($dataxxxx['padrexxx'] != '') {
                $compofam = FiCompfami::where('id', $dataxxxx['padrexxx'])->first();
                $document=$compofam->sis_nnaj->fi_datos_basico->nnaj_docu;
                $respuest = ['sdocumen' => $document->s_documento, 'expedici' => $document->sis_municipio->s_municipio . ' (' . $document->sis_municipio->sis_departam->s_departamento . ')'];
            }
            return response()->json($respuest);
        }
    }
}
