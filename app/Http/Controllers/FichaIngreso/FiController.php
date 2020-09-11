<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiDatosBasicoCrearRequest;
use App\Http\Requests\FichaIngreso\FiDatosBasicoUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisDepeUsua;
use App\Models\Sistema\SisEsta;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\Sistema\SisUpz;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Fi\FiTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FiController extends Controller
{
    use FiTrait;
    private $bitacora;
    private $opciones;

    public function __construct()
    {
        $this->opciones['permisox'] = 'fidatbas';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'FICHA DE INGRESO';
        $this->opciones['routxxxx'] = 'fidatbas';
        $this->opciones['slotxxxx'] = 'fidatbas';
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['parametr'] = [];
        $this->opciones['carpetax'] = 'Dabasico';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';



        $this->bitacora = new FiDatosBasico();
        $this->opciones['tipodocu'] = Tema::combo(3, true, false);
        $this->opciones['grupsang'] = Tema::combo(17, true, false);
        $this->opciones['factorrh'] = Tema::combo(18, true, false);
        $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
        $this->opciones['tipoblac'] = Tema::combo(119, true, false);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['situmili'] = Tema::combo(23, true, false);
        $this->opciones['tiplibre'] = Tema::combo(33, true, false);
        $this->opciones['estacivi'] = Tema::combo(19, true, false);
        $this->opciones['grupetni'] = Tema::combo(20, true, false);
        $this->opciones['vestimen'] = Tema::combo(290, true, false);
        $this->opciones['generoxx'] = Tema::combo(12, true, false);
        $this->opciones['orientac'] = Tema::combo(13, true, false);
        $this->opciones['pais_idx'] = SisPai::combo(true, false);
        $this->opciones['localida'] = SisLocalidad::combo();
        
        $this->opciones['tituloxx'] = "INFORMACI{$this->opciones['vocalesx'][3]}N";
        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A NNAJS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }

    public function index()
    {


        // $respuest = Http::get('http://localhost:8085/areas')->json();
        // // echo '<pre>';
        // // print_r($respuest);

        // ddd($respuest);

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVO NNAJ',
                'titulist' => 'LISTA DE NNAJS',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', []),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fi_datos_basicos.id'],
                    ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [],
            ]
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function getListado(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            //return $this->getNnajsFi($request); //            Original
            
            return $this->getNnajsFi2depen($request); //Por UPI
        
        }
      
    }
    private function grabar($dataxxxx, $objetoxx, $infoxxxx)
    {
        $dataxxxx['sis_docfuen_id'] = 2;
        $dataxxxx['sis_esta_id'] = 1;
        $usuariox = $this->bitacora->grabar($dataxxxx, $objetoxx);

        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$usuariox->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function view($dataxxxx)
    {
        

        $fechaxxx = explode('-', date('Y-m-d'));

        if ($fechaxxx[1] < 12) {
            $fechaxxx[1] = (int) $fechaxxx[1] + 1;
        }

        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.'.$dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];

        $fechaxxx[2] = cal_days_in_month(CAL_GREGORIAN, $fechaxxx[1], $fechaxxx[0]) + $fechaxxx[2];
        $this->opciones['generoxx'] = Tema::combo(12, true, false);
        $this->opciones['orientac'] = Tema::combo(13, true, false);
        $this->opciones['estacivi'] = Tema::combo(19, true, false);

        $this->opciones['estadoxx'] = 'ACTIVO';

        $this->opciones['departam'] = ['' => 'Seleccione'];
        $this->opciones['municipi'] = ['' => 'Seleccione'];
        $this->opciones['deparexp'] = ['' => 'Seleccione'];
        $this->opciones['municexp'] = ['' => 'Seleccione'];
        $this->opciones['mindatex'] = "-28y +0m +0d";
        $this->opciones['maxdatex'] = "-6y +0m +0d";

        $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
        $this->opciones['barrioxx'] = ['' => 'Seleccione'];
        $this->opciones['poblindi'] = ['' => 'Seleccione'];
        $this->opciones['neciayud'] = ['' => 'Seleccione'];
        $this->opciones['readfisi'] = '';

        $localida = 0;
        $upzxxxxx = $localida;
        $paisxxxx = $localida;
        $paisexpe = $localida;
        $departam = $localida;
        $depaexpe = $localida;
        // indica si se esta actualizando o viendo
        $this->opciones['aniosxxx'] = '';
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
            $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
            $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];

            $this->opciones['pestpara'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['perfilxx'] = 'conperfi';
            $this->opciones['usuariox'] =  $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
            $dataxxxx['modeloxx']->prm_etnia_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_etnia_id;
            $dataxxxx['modeloxx']->prm_poblacion_etnia_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_poblacion_etnia_id;
            $dataxxxx['modeloxx']->prm_gsanguino_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_gsanguino_id;
            $dataxxxx['modeloxx']->prm_factor_rh_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_factor_rh_id;
            $dataxxxx['modeloxx']->prm_estado_civil_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_estado_civil_id;

            /** orientacion sexual */
            $dataxxxx['modeloxx']->s_nombre_identitario = $dataxxxx['modeloxx']->nnaj_sexo->s_nombre_identitario;
            $dataxxxx['modeloxx']->prm_sexo_id = $dataxxxx['modeloxx']->nnaj_sexo->prm_sexo_id;
            $dataxxxx['modeloxx']->prm_identidad_genero_id = $dataxxxx['modeloxx']->nnaj_sexo->prm_identidad_genero_id;
            $dataxxxx['modeloxx']->prm_orientacion_sexual_id = $dataxxxx['modeloxx']->nnaj_sexo->prm_orientacion_sexual_id;

            // /** Nacimiento */

            $dataxxxx['modeloxx']->d_nacimiento = $dataxxxx['modeloxx']->nnaj_nacimi->d_nacimiento;
            $this->opciones['aniosxxx'] = $dataxxxx['modeloxx']->nnaj_nacimi->Edad;
            $dataxxxx['modeloxx']->sis_pai_id = $paisxxxx = $dataxxxx['modeloxx']->nnaj_nacimi->sis_municipio->sis_departamento->sis_pai_id;
            $dataxxxx['modeloxx']->sis_departamento_id = $departam = $dataxxxx['modeloxx']->nnaj_nacimi->sis_municipio->sis_departamento_id;
            $dataxxxx['modeloxx']->sis_municipio_id = $dataxxxx['modeloxx']->nnaj_nacimi->sis_municipio_id;

            /** documento de identidad */
            $dataxxxx['modeloxx']->s_documento = $dataxxxx['modeloxx']->nnaj_docu->s_documento;
            $dataxxxx['modeloxx']->prm_ayuda_id = $dataxxxx['modeloxx']->nnaj_docu->prm_ayuda_id;
            $dataxxxx['modeloxx']->prm_tipodocu_id = $dataxxxx['modeloxx']->nnaj_docu->prm_tipodocu_id;
            $dataxxxx['modeloxx']->prm_doc_fisico_id = $dataxxxx['modeloxx']->nnaj_docu->prm_doc_fisico_id;

            $dataxxxx['modeloxx']->sis_paiexp_id = $paisexpe = $dataxxxx['modeloxx']->nnaj_docu->sis_municipio->sis_departamento->sis_pai_id;
            $dataxxxx['modeloxx']->sis_departamentoexp_id = $depaexpe = $dataxxxx['modeloxx']->nnaj_docu->sis_municipio->sis_departamento_id;
            $dataxxxx['modeloxx']->sis_municipioexp_id = $dataxxxx['modeloxx']->nnaj_docu->sis_municipio_id;

            /** situacion militar */
            $dataxxxx['modeloxx']->prm_situacion_militar_id = $dataxxxx['modeloxx']->nnaj_sit_mil->prm_situacion_militar_id;
            $dataxxxx['modeloxx']->prm_clase_libreta_id = $dataxxxx['modeloxx']->nnaj_sit_mil->prm_clase_libreta_id;

            /**focalizacion */
            $dataxxxx['modeloxx']->s_nombre_focalizacion = $dataxxxx['modeloxx']->nnaj_focali->s_nombre_focalizacion;
            $dataxxxx['modeloxx']->s_lugar_focalizacion = $dataxxxx['modeloxx']->nnaj_focali->s_lugar_focalizacion;
            $dataxxxx['modeloxx']->sis_upzbarri_id = $dataxxxx['modeloxx']->nnaj_focali->sis_upzbarri_id;

            $localida =   $dataxxxx['modeloxx']->nnaj_focali->sis_upzbarri->sis_localupz;

            $upzxxxxx = $dataxxxx['modeloxx']->sis_upz_id = $localida->id;

            $localida = $dataxxxx['modeloxx']->sis_localidad_id = $localida->sis_localidad_id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }

            if ($this->opciones['grupetni'] != 157) {
                $this->opciones['poblindi'] =  [1 => 'NO APLICA'];
            }

            if ($this->opciones['aniosxxx'] < 15) {
                $this->opciones['generoxx'] =  [1 => 'NO APLICA'];
                $this->opciones['orientac'] =  [1 => 'NO APLICA'];
            }

            if ($this->opciones['aniosxxx'] < 18 || $dataxxxx['modeloxx']->prm_sexo_id == 21) {
                $this->opciones['tiplibre'] = [1 => 'NO APLICA'];
                $this->opciones['situmili'] = [1 => 'NO APLICA'];
            }

            if ($dataxxxx['modeloxx']->prm_documento_id == 145) {
                $this->opciones['readfisi'] = 'readonly';
                $this->opciones['neciayud'] = Tema::combo(286, true, false);
            } else {
                $this->opciones['neciayud'] = [1 => 'NO APLICA'];
            }

            if ($dataxxxx['modeloxx']->prm_situacion_militar_id == 228) {
                $this->opciones['tiplibre'] = [1 => 'NO APLICA'];
            }
            // $this->opciones['poblindi'] = Tema::combo(61, true, false);
        }
        $this->opciones['dependen'] = User::getUpiUsuario(true, false);
        $this->opciones['upzxxxxx']  = SisUpz::combo($localida, false);
        $this->opciones['barrioxx'] = SisBarrio::combo($upzxxxxx, false);

        $this->opciones['municipi'] = SisMunicipio::combo($departam, false);
        $this->opciones['departam'] = SisDepartamento::combo($paisxxxx, false);


        $this->opciones['municexp'] = SisMunicipio::combo($depaexpe, false);
        $this->opciones['deparexp'] = SisDepartamento::combo($paisexpe, false);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create()
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'CREAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];

            return $this->view(['modeloxx'=>'','accionxx'=>['crear','formulario']]);
    }
    public function store(FiDatosBasicoCrearRequest $request)
    {
        return $this->grabar($request->all(), '', 'Datos básicos creados con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function show(FiDatosBasico $objetoxx)
    {
        return $this->view(['modeloxx'=>$objetoxx,'accionxx'=>['ver','formulario'],'padrexxx'=>$objetoxx]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function edit(FiDatosBasico $objetoxx)
    {
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'MODIFICAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx'=>$objetoxx,'accionxx'=>['editar','formulario'],'padrexxx'=>$objetoxx]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiDatosBasico $objetoxx
     * @return \Illuminate\Http\Response
     */
    public function update(FiDatosBasicoUpdateRequest $request,  FiDatosBasico $objetoxx)
    {

        return $this->grabar($request->all(), $objetoxx, 'Datos básicos actualizados con exito');
    }

    public function inactivate(FiDatosBasico $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-borrar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'INACTIVAR', 'routingx' => [$this->opciones['routxxxx'] . '.borrar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view($objetoxx,  'modeloxx', 'Destroy');
    }


    public function destroy(Request $request, FiDatosBasico $objetoxx)
    {

        $objetoxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Sucursal inactivada correctamente');
    }

    public function municipioajax(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(SisMunicipio::combo($request->all()['departam'], true));
        }
    }
}
