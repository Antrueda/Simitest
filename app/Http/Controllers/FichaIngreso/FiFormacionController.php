<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiFormacionCrearRequest;
use App\Http\Requests\FichaIngreso\FiFormacionUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiFormacion;
use App\Models\Parametro;
use App\Models\Sistema\SisInstitucionEdu;
use App\Models\Tema;
use App\Traits\Fi\FiTrait;
use App\Traits\Interfaz\InterfazFiTrait;
use App\Traits\Puede\PuedeTrait;

class FiFormacionController extends Controller
{
    use FiTrait;
    use InterfazFiTrait;
    use PuedeTrait;
    public function __construct()
    {

        $this->opciones['permisox'] = 'fiformacion';
        $this->opciones['routxxxx'] = 'fi.formacion';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['carpetax'] = 'Formacion';
        $this->opciones['slotxxxx'] = 'formacion';
        $this->opciones['tituloxx'] = 'ESCUELA';
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['actuestu'] = Tema::combo(23, true, false);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['motvincu'] = Tema::comboAsc(63, false, false);
        $this->opciones['natuenti'] = Tema::comboAsc(130, true, false);
        $this->opciones['jornestu'] = Tema::comboAsc(151, true, false);
        $this->opciones['ulnivest'] = Tema::comboAsc(153, true, false);
        $this->opciones['ulgradap'] = Tema::comboAsc(154, true, false);
        $this->opciones['insti_id'] = SisInstitucionEdu::combo(true, false);
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['fidatbas', []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A NNAJ ', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }
    private function view($dataxxxx)
    {
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.'.$dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];

        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        $this->opciones['readdiax'] = '';
        $this->opciones['readmesx'] = '';
        $this->opciones['readanox'] = '';
        $this->opciones['insti_id'] = '';
        $this->opciones['readinst'] = '';
        // Si es CHC
        if ($dataxxxx['padrexxx']->prm_tipoblaci_id == 650) {
            $this->opciones['natuenti'] = Parametro::find(235)->Combo;
            $this->opciones['jornestu'] = Parametro::find(235)->Combo;
            $this->opciones['insti_id'] = [1 => 'N/A'];
            // $this->opciones['actuestu'] = [228 => 'NO']; // se quita
        }

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][1]=$dataxxxx['modeloxx']->id;
            if ($dataxxxx['modeloxx']->i_prm_estudia_id == 228) {
                $this->opciones['natuenti'] = Parametro::find(235)->Combo;
                $this->opciones['jornestu'] = Parametro::find(235)->Combo;
                $this->opciones['readinst'] = 'readonly';
            } elseif ($dataxxxx['modeloxx']->i_prm_estudia_id == 227) {
                $this->opciones['readdiax'] = 'readonly';
                $this->opciones['readmesx'] = 'readonly';
                $this->opciones['readanox'] = 'readonly';
            }
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
    public function create(FiDatosBasico $padrexxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $vestuari = FiFormacion::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)->first();
        if ($vestuari != null) {
            return redirect()
                ->route('fi.formacion.editar', [$padrexxx->id, $vestuari->id]);
        }
        return $this->view(['modeloxx' => '', 'accionxx'=>['crear','formulario'], 'padrexxx' => $padrexxx]);
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $modeloxx = FiFormacion::transaccion($dataxxxx, $objectx);
        return redirect()
            ->route('fi.formacion.editar', [$modeloxx->sis_nnaj->fi_datos_basico->id, $modeloxx->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(FiDatosBasico $padrexxx, FiFormacionCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_nnaj_id'] = $padrexxx->sis_nnaj_id;
        return $this->grabar($dataxxxx, '', 'Formación creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiFormacion  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $padrexxx, FiFormacion $modeloxx)
    {
        return $this->view(['modeloxx' =>$modeloxx, 'accionxx'=>['ver','formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiFormacion  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $padrexxx,  FiFormacion $modeloxx)
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
            return $this->view(['modeloxx' =>$modeloxx, 'accionxx'=>['editar','formulario'], 'padrexxx' => $padrexxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiFormacion  $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiFormacionUpdateRequest $request, $padrexxx, FiFormacion $modeloxx)
    {
        return $this->grabar($request->all(), $modeloxx, 'Formación actualizada con éxito');
    }
}
