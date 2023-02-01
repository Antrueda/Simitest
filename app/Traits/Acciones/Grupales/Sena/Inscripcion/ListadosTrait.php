<?php

namespace App\Traits\Acciones\Grupales\Sena\Inscripcion;


use App\Models\Acciones\Grupales\AgTema;
use App\Models\Acciones\Grupales\Educacion\GradoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Grupales\InscripcionConvenios\ConveNnaj;
use App\Models\Acciones\Grupales\InscripcionConvenios\InscriConve;
use App\Models\Acciones\Grupales\InscripcionConvenios\ProgramaAsocia;
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
                'inscri_conves.id',
                'inscri_conves.fecha',
                'inscri_conves.fecha_inicio',
                'inscri_conves.fecha_final',
                'inscri_conves.numficha',
                'programas.nombre as progra',
                'tipoprogramas.nombre as tipopro',
                'modalidads.nombre as modal',
                'sede_centros.nombre as sede',
                'convenios.nombre as conve',
                'upi.nombre as upi',
                'users.name',
                'inscri_conves.sis_esta_id',
                'inscri_conves.created_at',
            ])
                ->join('sis_depens as upi', 'inscri_conves.upi_id', '=', 'upi.id')
                ->join('users', 'inscri_conves.user_id', '=', 'users.id')
                ->join('programas', 'inscri_conves.progra_id', '=', 'programas.id')
                ->join('tipoprogramas', 'inscri_conves.tipop_id', '=', 'tipoprogramas.id')
                ->join('modalidads', 'inscri_conves.modal_id', '=', 'modalidads.id')
                ->join('sede_centros', 'inscri_conves.sede_id', '=', 'sede_centros.id')
                ->join('convenios', 'inscri_conves.conve_id', '=', 'convenios.id')
                ->join('sis_estas', 'inscri_conves.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDtMatri($dataxxxx, $request);
        }
    }





    public function getNnaj(Request $request, InscriConve $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = ['inscrnnaj'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.agregarnnaj';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            /// i_estado_ms => prm_estado_matri = 2773 => aprobado 2774=>continua proceso  2775=>retirado
            //  ->leftJoin('i_estado_ms', 'i_matricula_nnajs.id', '=', 'i_estado_ms.id') 
            $responsa = ConveNnaj::select(['sis_nnaj_id'])
                ->where('inconve_id', $padrexxx->id)
                ->where('sis_esta_id', 1)
                ->get();
            $depende =    InscriConve::select(['upi_id'])
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



    public function getNnajHistorial(Request $request, SisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = ['histocon'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = ConveNnaj::select([
                'conve_nnajs.id',
                'conve_nnajs.sis_nnaj_id',
                'convenios.nombre as convenio',
                'programas.nombre as programa',
                'modalidads.nombre as modalidad',
                'conve_nnajs.observaciones',
                'conve_nnajs.sis_esta_id',
                'sis_estas.s_estado',
                'etapa.nombre as etapa',
                      
            ])
                ->join('sis_nnajs', 'conve_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->join('inscri_conves', 'conve_nnajs.inconve_id', '=', 'inscri_conves.id')
                ->join('convenios', 'inscri_conves.conve_id', '=', 'convenios.id')
                ->join('programas', 'inscri_conves.conve_id', '=', 'programas.id')
                ->join('modalidads', 'inscri_conves.modal_id', '=', 'modalidads.id')
                ->join('sis_estas', 'conve_nnajs.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as etapa', 'conve_nnajs.etapa_id', '=', 'etapa.id')
                //->where('i_matricula_nnajs.sis_esta_id', 1)
                ->where('conve_nnajs.sis_nnaj_id', $padrexxx->id);
            return $this->getDt($dataxxxx, $request);
        }
    }


    public function getNnajInscri(Request $request, InscriConve $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = ['inscrnnaj'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.elimasis';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = ConveNnaj::select([
                'conve_nnajs.id',
                'conve_nnajs.sis_nnaj_id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.id as fidatosbasicos',
                'tipodocu.nombre as tipodocu',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'nnaj_sexos.s_nombre_identitario',
                'conve_nnajs.observaciones',
                'conve_nnajs.sis_esta_id',
                'nnaj_nacimis.d_nacimiento',
                'nnaj_docus.s_documento',
                'sis_estas.s_estado',
             //   'documento.nombre as documento',
                'certifica.nombre as certifica',
                      
            ])
                ->join('sis_nnajs', 'conve_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('inscri_conves', 'conve_nnajs.inconve_id', '=', 'inscri_conves.id')
                ->join('sis_estas', 'conve_nnajs.sis_esta_id', '=', 'sis_estas.id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
            //    ->join('parametros as documento', 'conve_nnajs.modalidad_id', '=', 'documento.id')
                ->join('parametros as certifica', 'conve_nnajs.etapa_id', '=', 'certifica.id')
                ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                //->where('i_matricula_nnajs.sis_esta_id', 1)
                ->where('conve_nnajs.inconve_id', $padrexxx->id);
            return $this->getDt($dataxxxx, $request);
        }
    }




   

    public function getSede(Request $request)
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

        $respuest = response()->json($this->getSedeAsignar($dataxxxx));
        return $respuest;
    }


    public function getProgram(Request $request)
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

        $respuest = response()->json($this->getProgramaAsignar($dataxxxx));
        return $respuest;
    }

    public function getTipopro(Request $request)
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

        $respuest = response()->json($this->getTipoProgramaAsignar($dataxxxx));
        return $respuest;
    }

    public function getModal(Request $request)
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

        $respuest = response()->json($this->getModalidadAsignar($dataxxxx));
        return $respuest;
    }

    public function getSedeAsignar($dataxxxx)
    {

        $dataxxxx['dataxxxx'] = ProgramaAsocia::select(['sede_centros.id as valuexxx', 'sede_centros.nombre as optionxx'])
            ->join('sede_centros', 'programa_asocias.sede_id', '=', 'sede_centros.id')
            ->where('programa_asocias.conve_id', $dataxxxx['servicio'])
            ->where('programa_asocias.sis_esta_id', 1)
            ->orderBy('programa_asocias.id', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return    $respuest;
    }

    public function getProgramaAsignar($dataxxxx)
    {

        $dataxxxx['dataxxxx'] = ProgramaAsocia::select(['programas.id as valuexxx', 'programas.nombre as optionxx'])
                ->join('programas', 'programa_asocias.progra_id', '=', 'programas.id')
                ->where('programa_asocias.conve_id', $dataxxxx['servicio'])
                ->where('programa_asocias.sis_esta_id', 1)
                ->orderBy('programa_asocias.id', 'asc')
                ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return    $respuest;
    }

    public function getTipoProgramaAsignar($dataxxxx)
    {

        $dataxxxx['dataxxxx'] = ProgramaAsocia::select(['tipoprogramas.id as valuexxx', 'tipoprogramas.nombre as optionxx'])
                ->join('tipoprogramas', 'programa_asocias.tipop_id', '=', 'tipoprogramas.id')
                ->where('programa_asocias.conve_id', $dataxxxx['servicio'])
                ->where('programa_asocias.sis_esta_id', 1)
                ->orderBy('programa_asocias.id', 'asc')
                ->get();    
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return    $respuest;
    }

    public function getModalidadAsignar($dataxxxx)
    {

        $dataxxxx['dataxxxx'] = ProgramaAsocia::select(['modalidads.id as valuexxx', 'modalidads.nombre as optionxx'])
                ->join('modalidads', 'programa_asocias.sede_id', '=', 'modalidads.id')
                ->where('programa_asocias.conve_id', $dataxxxx['servicio'])
                ->where('programa_asocias.sis_esta_id', 1)
                ->orderBy('programa_asocias.id', 'asc')
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



