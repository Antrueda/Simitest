<?php

namespace App\Traits\Acciones\Grupales\Sena\Inscripcion;


use App\Models\Acciones\Grupales\AgTema;
use App\Models\Acciones\Grupales\Educacion\GradoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Grupales\InscripcionConvenios\ConveNnaj;
use App\Models\Acciones\Grupales\InscripcionConvenios\InscriConve;


use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDocu;

use App\Models\Simianti\Ge\GeNnajDocumento;

use App\Models\Simianti\Ped\PedMatricula;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisServicio;

use App\Traits\Combos\CombosTrait;
use App\Traits\DatatableTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
{
    use DatatableTrait;

    /**
     * encontrar listar paises
     */

    public function getDttb($queryxxx, $requestx)
    {
        return datatables()
            ->eloquent($queryxxx)
            ->addColumn('btns', 'Acciones/Grupales/Agtema/botones/botonesapi', 2)
            ->addColumn('s_estado', $requestx->estadoxx)
            ->rawColumns(['btns', 's_estado'])
            ->toJson();
    }

    public function getAgTema(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = AgTema::select(['ag_temas.id', 'ag_temas.s_tema',  'ag_temas.sis_esta_id', 'areas.nombre', 'sis_estas.s_estado'])
                ->join('areas', 'ag_temas.area_id', '=', 'areas.id')
                ->join('sis_estas', 'ag_temas.sis_esta_id', '=', 'sis_estas.id')
                // ->where('ag_temas.sis_esta_id', 1)
                ->where(function ($queryxxx) {
                    $usuariox = Auth::user();
                    if (!$usuariox->hasRole([Role::find(1)->name])) {
                        $queryxxx->where('ag_temas.sis_esta_id', 1);
                    }
                });
            return $this->getDttb($dataxxxx, $request);
        }
    }
   

  

    public function getNnajsele(Request $request)
    {
        if ($request->ajax()) {

            $dataxxxx = [
                'tipodocu' => ['prm_doc_id', ''],

                'edadxxxx' => '',
                'paisxxxx' => ['sis_pai_id', ''],
                'departam' => ['sis_departam_id', [], ''],
                'municipi' => ['sis_municipio_id', [], ''],

            ];
            $document = FiDatosBasico::where('sis_nnaj_id', $request->padrexxx)->first()->nnaj_docu;
            if (isset($document->id)) {
                $expedici = $document->sis_municipio;
                $dataxxxx['tipodocu'][1] = $document->prm_tipodocu_id;
                $dataxxxx['paisxxxx'][1] = $expedici->sis_departam->sis_pai_id;
                $dataxxxx['departam'][1] = SisDepartam::combo($dataxxxx['paisxxxx'][1], true);
                $dataxxxx['departam'][2] = $expedici->sis_departam_id;
                $dataxxxx['municipi'][1] = SisMunicipio::combo($dataxxxx['departam'][2], true);
                $dataxxxx['municipi'][2] = $expedici->id;
            }

            return response()->json($dataxxxx);
        }
    }

   
    public function getServicio(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                SisServicio::getServicioDepe([
                    'dependen' => $request->dependen,
                    'cabecera' => true,
                    'ajaxxxxx' => true,

                ])
            );
        }
    }


    public function getUpiTServicio(Request $request)
    {
        //2637

        if ($request->ajax()) {
            ////getSisDepenCT
            $upisxxx = $this->getSisDepenCT([
                'cabecera' => true,
                'ajaxxxxx' => true,
                'campoxxx' => 'id',
                'orderxxx' => 'ASC',
                'selected' => $request->selected,

            ]);
            if ($request->remision == 2637) {

                $upisxxx = $this->getSisDepenComboINCT([
                    'cabecera' => true,
                    'ajaxxxxx' => true,
                    'campoxxx' => 'id',
                    'orderxxx' => 'ASC',
                    'inxxxxxx' => [$request->padrexxx],
                    'selected' => $request->selected,

                ]);
            }else{
                $upisxxx = $this->getSisDepenCT([
                    'cabecera' => true,
                    'ajaxxxxx' => true,
                    'campoxxx' => 'id',
                    'orderxxx' => 'ASC',
                    'selected' => $request->selected,
    
                ]);
            }

            return response()->json($upisxxx);
        }
    }
    ////





    public function getGabela(Request $request)
    {
        if ($request->ajax()) {
            $gabela = SisDepen::find($request->padrexxx)->TrasladoAjax;
            if ($gabela != null) {
                $respuest['gabelaxx'] = '#tiempoxx';
                $respuest['tiempoxx'] = $gabela;
            } else {
                $respuest['gabelaxx'] = '#tiempoxx';
                $respuest['tiempoxx'] = 3;
            }

            return response()->json($respuest);
        }
    }




   


    //MATRICULA
    //PedMatricula
    //PedEstadoM
    //Asistencia
    //IfDetalleAsistenciaDiaria
    //IfAsistenciaDiaria
    //IfPlanillaAsistencia
    //IfPlanillaNnaj







    public function getInscripcion(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $request->contado = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.contado';
            $dataxxxx =  InscriConve::select([
                'i_matriculas.id',
                'i_matriculas.fecha',
                'grado.s_grado as grado',
                'grupo_matriculas.s_grupo',
                'upi.nombre as upi',
                'servicio.s_servicio as servicio',
                'users.name',
                'i_matriculas.sis_esta_id',
                'i_matriculas.created_at',
            ])
                ->join('sis_depens as upi', 'i_matriculas.prm_upi_id', '=', 'upi.id')
                ->join('sis_servicios as servicio', 'i_matriculas.prm_serv_id', '=', 'servicio.id')
                ->join('users', 'i_matriculas.user_doc1', '=', 'users.id')
                ->join('eda_grados as grado', 'i_matriculas.prm_grado', '=', 'grado.id')
                ->join('grupo_matriculas', 'i_matriculas.prm_grupo', '=', 'grupo_matriculas.id')
                ->join('sis_estas', 'i_matriculas.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDtMatri($dataxxxx, $request);
        }
    }





    public function getNnaj(Request $request, IMatricula $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = ['imatriculannaj'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.agregarnnaj';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            /// i_estado_ms => prm_estado_matri = 2773 => aprobado 2774=>continua proceso  2775=>retirado
            //  ->leftJoin('i_estado_ms', 'i_matricula_nnajs.id', '=', 'i_estado_ms.id') 
            $responsa = ConveNnaj::select(['sis_nnaj_id'])
                ->where('imatricula_id', $padrexxx->id)
                ->where('sis_esta_id', 1)
                ->get();
            $depende =    InscriConve::select(['prm_upi_id'])
                ->where('id', $padrexxx->id)
                ->get();
     
            $dataxxxx =  SisNnaj::select([
                'sis_nnajs.id',
                'fi_datos_basicos.sis_nnaj_id',
                'fi_datos_basicos.s_primer_nombre',
                'nnaj_docus.s_documento',
                'tipodocu.nombre as tipodocu',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'sis_nnajs.sis_esta_id',
                'sis_depens.nombre',
                'sis_servicios.s_servicio',                
                'nnaj_nacimis.d_nacimiento',
                'nnaj_sexos.s_nombre_identitario',
                'sis_nnajs.created_at',
                'sis_estas.s_estado',
//NnajDese
            ])
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
                ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('nnaj_upis', 'sis_nnajs.id', '=', 'nnaj_upis.sis_nnaj_id')
                ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
                ->join('nnaj_deses', 'nnaj_upis.id', '=', 'nnaj_deses.nnaj_upi_id')
                ->join('sis_servicios', 'nnaj_deses.sis_servicio_id', '=', 'sis_servicios.id')
                ->join('sis_estas', 'sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
                ->whereNotIn('sis_nnajs.id',  $responsa)
                ->whereIn('nnaj_upis.sis_depen_id', $depende)
                ->where('nnaj_upis.sis_esta_id', 1)
                
                ->where('nnaj_deses.sis_esta_id', 1);

            return $this->getDt($dataxxxx, $request);
        }
    }



    public function getNnajMatricula(Request $request, IMatricula $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = ['imatriculannaj'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.elimasis';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = ConveNnaj::select([
                'i_matricula_nnajs.id',
                'i_matricula_nnajs.sis_nnaj_id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.id as fidatosbasicos',
                'tipodocu.nombre as tipodocu',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'nnaj_sexos.s_nombre_identitario',
                'i_matricula_nnajs.observaciones',
                'i_matricula_nnajs.sis_esta_id',
                'nnaj_nacimis.d_nacimiento',
                'nnaj_docus.s_documento',
                'sis_estas.s_estado',
                //'sis_nnajs.id',
                'documento.nombre as documento',
                'certifica.nombre as certifica',
                'matricula.nombre as matricula',
                'i_matricula_nnajs.numeromatricula',
                      
            ])
                ->join('sis_nnajs', 'i_matricula_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('i_matriculas', 'i_matricula_nnajs.imatricula_id', '=', 'i_matriculas.id')
                ->join('sis_estas', 'i_matriculas.sis_esta_id', '=', 'sis_estas.id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
                ->join('parametros as documento', 'i_matricula_nnajs.prm_copdoc', '=', 'documento.id')
                ->join('parametros as certifica', 'i_matricula_nnajs.prm_certif', '=', 'certifica.id')
                ->join('parametros as matricula', 'i_matricula_nnajs.prm_matric', '=', 'matricula.id')
                ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                //->where('i_matricula_nnajs.sis_esta_id', 1)
                ->where('i_matricula_nnajs.imatricula_id', $padrexxx->id);
            return $this->getDt($dataxxxx, $request);
        }
    }




    public function getMatriculaUnico(Request $request)
    {
        $queryxxx = GeNnajDocumento::where('numero_documento', $request->nnajxxxx)->first();
        $matricula = null;
        if ($queryxxx != null) {
            $matricula = PedMatricula::select('ped_matricula.numero_matricula')
                ->where('ped_matricula.nnaj_id', $queryxxx->id_nnaj)
                ->orderBy('ped_matricula.fecha_insercion', 'DESC')
                ->first();
        }
        $matriculn = PedMatricula::max('ped_matricula.numero_matricula');
        $matricnew = IMatriculaNnaj::max('numeromatricula');
        $nnajxxxx = NnajDocu::where('s_documento', $request->nnajxxxx)->first()->fi_datos_basico;
        $matrnnaj = IMatriculaNnaj::select('numeromatricula')->where('sis_nnaj_id', $nnajxxxx->sis_nnaj_id)->first();


        if ($matrnnaj == null && $matricula == null) {
            if ($matriculn >= $matricnew) {
                $matriculx = $matriculn + 1;
            } else {
                $matriculx = $matricnew + 1;
            }
        } else {
            // if($matricula==null){
            //    $matriculx = $matrnnaj->numeromatricula;
            // }else{
            if($matricula!=null){    
                if ($matricula->numero_matricula >= $matrnnaj) {
                    $matriculx = $matricula->numero_matricula;
                } else {
                    $matriculx = $matrnnaj->numeromatricula;
                }
            }else{
                    $matriculx = $matrnnaj->numeromatricula;
                }
        }





        // if ($matricula == null) {
        //     if($matriculn>= $matricnew){
        //         $matriculx = $matriculn+1;
        //     }else{
        //         $matriculx = $matricnew+1;
        //     }
        // }else{
        //     if($matrnnaj==null){
        //         $matriculx = $matricula->numero_matricula;
        //     }else{
        //         if($matricula->numero_matricula>=$matrnnaj->numeromatricula){
        //             $matriculx = $matricula->numero_matricula;
        //         }else{
        //             $matriculx = $matrnnaj->numeromatricula;
        //         }
        //     }

        // }




        $respuest = [
            'matricula' => $matriculx,
            'campoxxx' => '#numeromatricula',
            'selected' => 'selected'
        ];
        return $respuest;
    }


    public function getGrado(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'dependen' => $request->upixxxxx,
            'servicio' => $request->padrexxx,
        ];
        $dataxxxx['cabecera'] = $request->cabecera;

        $respuest = response()->json($this->getGradoAsignar($dataxxxx));
        return $respuest;
    }


    public function getGrupo(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'dependen' => $request->upixxxxx,
            'servicio' => $request->padrexxx,
        ];
        $dataxxxx['cabecera'] = $request->cabecera;

        $respuest = response()->json($this->getGrupoAsignar($dataxxxx));
        return $respuest;
    }

    public function getGradoAsignar($dataxxxx)
    {

        $dataxxxx['dataxxxx'] = GradoAsignar::select(['eda_grados.id as valuexxx', 'eda_grados.s_grado as optionxx'])
            ->join('eda_grados', 'grado_asignars.grado_matricula', '=', 'eda_grados.id')
            ->join('sis_depens', 'grado_asignars.sis_depen_id', '=', 'sis_depens.id')
            ->join('sis_servicios', 'grado_asignars.sis_servicio_id', '=', 'sis_servicios.id')
            ->where('grado_asignars.sis_depen_id', $dataxxxx['dependen'])
            ->where('grado_asignars.sis_servicio_id', $dataxxxx['servicio'])
            ->where('grado_asignars.sis_esta_id', 1)
            ->orderBy('grado_asignars.id', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return    $respuest;
    }

    public function getGrupoAsignar($dataxxxx)
    {

        $dataxxxx['dataxxxx'] = GrupoAsignar::select(['grupo_matriculas.id as valuexxx', 'grupo_matriculas.s_grupo as optionxx'])
            ->join('grupo_matriculas', 'grupo_asignars.grupo_matricula_id', '=', 'grupo_matriculas.id')
            ->join('sis_depens', 'grupo_asignars.sis_depen_id', '=', 'sis_depens.id')
            ->join('sis_servicios', 'grupo_asignars.sis_servicio_id', '=', 'sis_servicios.id')
            ->where('grupo_asignars.sis_depen_id', $dataxxxx['dependen'])
            ->where('grupo_asignars.sis_servicio_id', $dataxxxx['servicio'])
            ->where('grupo_asignars.sis_esta_id', 1)
            ->orderBy('grupo_asignars.id', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return    $respuest;
    }

    public function getServiciosUpiMa(Request $request)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => true,
            'ajaxxxxx' => true,
            'dependen' => $request->padrexxx
        ];
        $respuest = response()->json($this->getServiciosUpiComboMaCT($dataxxxx));
        return $respuest;
    }

    public function getResponsableUpiMatricula(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [
                'comboxxx' => SisDepen::find($request->padrexxx)->ResponsableAjax,
                'campoxxx' => '#responsable',
                'selected' => 'selected'
            ];
            return response()->json($respuest);
        }
    }

    public function getSisDepenUsuarioCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = SisDepen::where('sis_depen_user.sis_esta_id', 1)
            ->join('sis_depen_user', 'sis_depens.id', '=', 'sis_depen_user.sis_depen_id')
            ->where('sis_depen_user.user_id', Auth::user()->id)
            ->orderby('sis_depens.id', $dataxxxx['orderxxx'])
            ->get(['sis_depens.nombre as optionxx', 'sis_depens.id as valuexxx']);


        $respuest = ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
        return $respuest;
    }
}



