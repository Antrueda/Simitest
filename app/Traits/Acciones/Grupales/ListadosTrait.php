<?php

namespace App\Traits\Acciones\Grupales;

use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\AgCarguedoc;
use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Acciones\Grupales\AgRelacion;
use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Grupales\Traslado\Traslado;
use App\Models\Acciones\Grupales\Traslado\TrasladoNnaj;
use App\Models\Acciones\Individuales\AiSalidaMayores;
use App\Models\Acciones\Individuales\Pivotes\SalidaJovene;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisNnaj;
use app\Models\Sistema\SisServicio;
use App\Models\Tema;
use App\Traits\DatatableTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
{
    use DatatableTrait;

    /**
     * encontrar listar paises
     */

    public function listaActividades(Request $request)
    {
        
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AgActividad::select([
                'ag_actividads.id',
                'ag_actividads.d_registro',
                'sis_depens.nombre as sis_deporigen_id',
                'sis_estas.s_estado',
                'ag_actividads.sis_esta_id',
                'areas.nombre as area',
                'ag_temas.s_tema as tema',
                'ag_tallers.s_taller as taller',
            ])
                ->join('sis_depens', 'ag_actividads.sis_deporigen_id', '=', 'sis_depens.id')
                ->join('areas', 'ag_actividads.area_id', '=', 'areas.id')
                ->join('sis_estas', 'ag_actividads.sis_esta_id', '=', 'sis_estas.id')
                ->join('ag_temas', 'ag_actividads.ag_tema_id', '=', 'ag_temas.id')
                ->join('ag_tallers', 'ag_actividads.ag_taller_id', '=', 'ag_tallers.id')
                ->where('ag_actividads.sis_esta_id',1)
                ->where('incompleto',0);

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function listaResponsables(Request $request, AgActividad $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = ['agrespon', 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapires';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =   AgResponsable::select([
                'ag_responsables.id',
                'parametros.nombre as i_prm_responsable_id',
                'ag_responsables.sis_esta_id',
                'users.s_primer_nombre as nombre1',
                'users.s_segundo_nombre as nombre2',
                'users.s_primer_apellido as apellido1',
                'users.s_segundo_apellido as apellido2',
                'users.s_documento as documento1', 'sis_estas.s_estado',
                'ag_responsables.ag_actividad_id'
            ])
                ->join('ag_actividads', 'ag_responsables.ag_actividad_id', '=', 'ag_actividads.id')
                ->join('parametros', 'ag_responsables.i_prm_responsable_id', '=', 'parametros.id')
                ->join('users', 'ag_responsables.user_id', '=', 'users.id')
                ->join('sis_estas', 'ag_responsables.sis_esta_id', '=', 'sis_estas.id')
                ->where('ag_responsables.ag_actividad_id', $padrexxx->id);

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function ListarRecursos(Request $request, AgActividad $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = ['agrelacion', 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =   AgRelacion::select([
                'ag_relacions.id',
                'ag_relacions.i_cantidad as cantidad',
                'ag_recursos.s_recurso as recursox',
                'trecurso.nombre as trecurso',
                'umedidax.nombre as umedidax',
                'ag_relacions.sis_esta_id',
                'sis_estas.s_estado',
            ])
                ->join('ag_actividads', 'ag_relacions.ag_actividad_id', '=', 'ag_actividads.id')
                ->join('ag_recursos', 'ag_relacions.ag_recurso_id', '=', 'ag_recursos.id')
                ->join('sis_estas', 'ag_relacions.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as trecurso', 'ag_recursos.i_prm_trecurso_id', '=', 'trecurso.id')
                ->join('parametros as umedidax', 'ag_recursos.i_prm_umedida_id', '=', 'umedidax.id')
                ->where('ag_relacions.ag_actividad_id', $padrexxx->id);

            return $this->getDt($dataxxxx, $request);
        }
    }
    public function getNnajs(Request $request, AgActividad $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = ['agasiste'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.agregarnnaj';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $responsa = AgAsistente::select(['fi_dato_basico_id'])
                ->where('ag_actividad_id', $padrexxx->id)
                ->get();
            $depende =    AgActividad::select(['sis_deporigen_id'])
                ->where('id', $padrexxx->id)
                ->get();
            $dataxxxx = FiDatosBasico::select([
                'fi_datos_basicos.id',
                'nnaj_docus.s_documento',
                'fi_datos_basicos.sis_esta_id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'sis_estas.s_estado',
                'sis_depens.nombre'
            ])
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
                ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->join('nnaj_upis', 'fi_datos_basicos.sis_nnaj_id', '=', 'nnaj_upis.sis_nnaj_id')
                ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
                ->where('sis_nnajs.prm_escomfam_id',  227)
             //   ->where('nnaj_upis.prm_principa_id',  227)
                ->whereNotIn('fi_datos_basicos.id',  $responsa)
                ->whereIn('nnaj_upis.sis_depen_id', $depende);

            return $this->getDt($dataxxxx, $request);
        }
    }



    public function getAsistente(Request $request, AgActividad $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = ['agasiste'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.elimasis';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $depende =    AgActividad::select(['sis_deporigen_id'])
            ->where('id', $padrexxx->id)
            ->get();
            $dataxxxx = AgAsistente::select([
                'ag_asistentes.id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'ag_asistentes.sis_esta_id',
                'nnaj_docus.s_documento',
                'sis_depens.nombre',
                'sis_estas.s_estado',
            ])
                ->join('ag_actividads', 'ag_asistentes.ag_actividad_id', '=', 'ag_actividads.id')
                ->join('sis_estas', 'ag_actividads.sis_esta_id', '=', 'sis_estas.id')
                ->join('fi_datos_basicos', 'ag_asistentes.fi_dato_basico_id', '=', 'fi_datos_basicos.id')
                ->join('nnaj_docus', 'ag_asistentes.fi_dato_basico_id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('nnaj_upis', 'fi_datos_basicos.sis_nnaj_id', '=', 'nnaj_upis.sis_nnaj_id')
                ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
                ->where('ag_asistentes.sis_esta_id', 1)
                //->where('nnaj_upis.prm_principa_id',  227)
                ->whereIn('nnaj_upis.sis_depen_id', $depende)
                ->where('ag_asistentes.ag_actividad_id', $padrexxx->id);
            return $this->getDtGok($dataxxxx, $request);
        }
    }

    function getAgregarNnaj(Request $request, AgActividad $padrexxx)
    {
        if ($request->ajax()) {
            $respuest = [];
            $dataxxxx = $request->all();
            $dataxxxx['ag_actividad_id'] = $padrexxx->id;
            $dataxxxx['sis_esta_id'] = 1;
            AgAsistente::transaccion($dataxxxx, '');
            return response()->json($respuest);
        }
    }

    public function getQuitarNnaj(Request $request, AgActividad $padrexxx)
    {
        if ($request->ajax()) {
            $respuest = [];
            $dataxxxx = $request->all();
            $dataxxxx['ag_actividad_id'] = $padrexxx->id;
            $dataxxxx['sis_esta_id'] = 0;
            AgAsistente::transaccion($dataxxxx, '');
            return response()->json($respuest);
        }
    }

    public function getEliminarNnajs(Request $request, AgActividad $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = ['agasiste'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.quitarnnaj';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $responsa = AgAsistente::select(['fi_dato_basico_id'])
                ->where('ag_actividad_id', $padrexxx->id)
                ->get();
            $dataxxxx = FiDatosBasico::select([
                'fi_datos_basicos.id',
                'nnaj_docus.s_documento',
                'fi_datos_basicos.sis_esta_id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'sis_estas.s_estado',
            ])
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
                ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->where('sis_nnajs.prm_escomfam_id',  227)
                ->whereNotIn('fi_datos_basicos.id',  $responsa);
            return $this->getDt($dataxxxx, $request);
        }
    }
    public function getSalidasMayoresGrupales(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $request->contado = $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.Botones.contado';
            $request->razonesg = $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.Botones.razonesg';
            $dataxxxx =  AiSalidaMayores::select([
            'ai_salida_mayores.id',
            'ai_salida_mayores.fecha',
            'upi.nombre as upi',
            'users.name',
            'ai_salida_mayores.sis_esta_id',
            'ai_salida_mayores.created_at',
        ])
            ->join('sis_depens as upi', 'ai_salida_mayores.prm_upi_id', '=', 'upi.id')

            ///motivos
            ->join('users', 'ai_salida_mayores.user_doc1_id', '=', 'users.id')

            ->join('sis_estas', 'ai_salida_mayores.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDtSalidaz($dataxxxx, $request);

        }
}

public function getJovenes(Request $request, AiSalidaMayores $padrexxx)
{
    if ($request->ajax()) {
        $request->routexxx = ['salidajovenes'];
        $hoyxxxx = Carbon::today()->isoFormat('YYYY-MM-DD');
        $mayores = explode('-',$hoyxxxx);
        $mayorex = $mayores[0] - 14;
        $mayorex = $mayorex .'-'.$mayores[1] .'-'.$mayores[2];
        $request->botonesx = $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.Botones.agregarnnaj';
        $request->estadoxx = 'layouts.components.botones.estadosx';
        $responsa = SalidaJovene::select(['sis_nnaj_id'])
            ->where('ai_salmay_id', $padrexxx->id)
            ->get();
        $depende =    AiSalidaMayores::select(['prm_upi_id'])
            ->where('id', $padrexxx->id)
            ->get();
            $dataxxxx =  SisNnaj::select([
                'sis_nnajs.id',
                'fi_datos_basicos.s_primer_nombre',
                'nnaj_docus.s_documento',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'sis_nnajs.sis_esta_id',
                'sis_depens.nombre',
                'nnaj_nacimis.d_nacimiento',
                'nnaj_sexos.s_nombre_identitario',
                'sis_nnajs.created_at',
                'sis_estas.s_estado',
                ])
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('nnaj_upis', 'sis_nnajs.id', '=', 'nnaj_upis.sis_nnaj_id')
                ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
                ->join('sis_estas', 'sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
                ->where('nnaj_nacimis.d_nacimiento',  '<=',$mayorex)
                ->whereNotIn('sis_nnajs.id',  $responsa)
                ->whereIn('nnaj_upis.sis_depen_id', $depende);

        return $this->getDt($dataxxxx, $request);
    }
}



public function getJovenPermiso(Request $request, AiSalidaMayores $padrexxx)
{
    if ($request->ajax()) {
        $request->routexxx = ['salidajovenes'];
        $hoyxxxx = Carbon::today()->isoFormat('YYYY-MM-DD');
        $mayores = explode('-',$hoyxxxx);
        $mayorex = $mayores[0] - 14;
        $mayorex = $mayorex .'-'.$mayores[1] .'-'.$mayores[2];
        $request->botonesx = $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.Botones.elimasis';
        $request->razonesx = $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.Botones.razonesx';
        $request->responsx = $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.Botones.responsx';
        $request->edadxxxx = $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.Botones.edadxxxx';
        $request->telefono = $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.Botones.telefono';
        $request->estadoxx = 'layouts.components.botones.estadosx';
        $depende =    AiSalidaMayores::select(['prm_upi_id'])
        ->where('id', $padrexxx->id)
        ->get();
        $dataxxxx = SalidaJovene::select([
            'salida_jovenes.id',
            'salida_jovenes.sis_nnaj_id',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.id as fidatosbasicos',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'nnaj_sexos.s_nombre_identitario',
            'salida_jovenes.telefono',
            'salida_jovenes.hora_salida',
            'autoriza.nombre as autoriza',
            'salida_jovenes.responsable_id',
            'salida_jovenes.fecharetorno',
            'salida_jovenes.horaretorno',
            'salida_jovenes.observacion',
            'salida_jovenes.sis_esta_id',
            'nnaj_docus.s_documento',
            'sis_depens.nombre',
            'sis_estas.s_estado',
        ])
            ->join('sis_nnajs', 'salida_jovenes.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->join('parametros as autoriza', 'salida_jovenes.autoriza_id', '=', 'autoriza.id')
            ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->join('ai_salida_mayores', 'salida_jovenes.ai_salmay_id', '=', 'ai_salida_mayores.id')
            ->join('sis_estas', 'ai_salida_mayores.sis_esta_id', '=', 'sis_estas.id')
            ->join('nnaj_docus', 'salida_jovenes.sis_nnaj_id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('nnaj_sexos', 'salida_jovenes.sis_nnaj_id', '=', 'nnaj_sexos.fi_datos_basico_id')

            ->join('nnaj_upis', 'fi_datos_basicos.sis_nnaj_id', '=', 'nnaj_upis.sis_nnaj_id')
            ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
            ->where('salida_jovenes.sis_esta_id', 1)
            ->whereIn('nnaj_upis.sis_depen_id', $depende)

            ->where('salida_jovenes.ai_salmay_id', $padrexxx->id);
        return $this->getDtSalidas($dataxxxx, $request);
    }
}
function getAgregarjoven(Request $request, AiSalidaMayores $padrexxx)
{
    if ($request->ajax()) {
        $respuest = [];
        $dataxxxx = $request->all();
        $dataxxxx['ai_salmay_id'] = $padrexxx->id;
        $dataxxxx['sis_esta_id'] = 1;
        SalidaJovene::transaccion($dataxxxx, '');
        return response()->json($respuest);
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

    public function getRepresenta(Request $request)
    {
        //$request->nnajxxxx=6;
//        if ($request->ajax()) {
            $dataxxxx=FiCompfami::getResponsableSalida($request->nnajxxxx, false, true);
            return response()->json($dataxxxx);
  //     }
    }
    public function listaDocumentos(Request $request, AgActividad $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = ['agcargdoc', 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesdoc';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AgCarguedoc::select([
                'ag_carguedocs.id',
                'parametros.nombre',
                'ag_carguedocs.s_ruta',
                'ag_carguedocs.created_at',
                'ag_carguedocs.sis_esta_id',
                'sis_estas.s_estado',

            ])
                ->join('parametros', 'ag_carguedocs.i_prm_documento_id', '=', 'parametros.id')
                ->join('sis_estas', 'ag_carguedocs.sis_esta_id', '=', 'sis_estas.id')
                ->where('ag_carguedocs.ag_actividad_id',$padrexxx->id);

            return $this->getDt($dataxxxx, $request);
        }
    }
    public function getResponsable(Request $request)
    {
        if ($request->ajax()) {
            $respuest = ['comboxxx' =>SisDepen::find($request->padrexxx)->ResponsableAjax,
                    'campoxxx' => '#responsable',
                    'selected' => 'selected'];
            return response()->json($respuest);
        }
    }

  
  
    public function getMatricula(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $request->contado = $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.Botones.contado';
            $dataxxxx =  IMatricula::select([
            'i_matriculas.id',
            'i_matriculas.fecha',
            'upi.nombre as upi',
            'users.name',
            'i_matriculas.sis_esta_id',
            'i_matriculas.created_at',
        ])
            ->join('sis_depens as upi', 'i_matriculas.prm_upi_id', '=', 'upi.id')
            ->join('users', 'i_matriculas.user_doc1', '=', 'users.id')
            ->join('sis_estas', 'i_matriculas.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDtMatri($dataxxxx, $request);
        }
}

public function getNnaj(Request $request, IMatricula $padrexxx)
{
    if ($request->ajax()) {
        $request->routexxx = ['imatriculannaj'];
        // $hoyxxxx = Carbon::today()->isoFormat('YYYY-MM-DD');
        // $mayores = explode('-',$hoyxxxx);
        // $mayorex = $mayores[0] - 14;
        // $mayorex = $mayorex .'-'.$mayores[1] .'-'.$mayores[2];
        $request->botonesx = $this->opciones['rutacarp'] .
        $this->opciones['carpetax'] . '.Botones.agregarnnaj';
        $request->estadoxx = 'layouts.components.botones.estadosx';
        $responsa = IMatriculaNnaj::select(['sis_nnaj_id'])
            ->where('imatricula_id', $padrexxx->id)
            ->get();
        $depende =    IMatricula::select(['prm_upi_id'])
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
                'nnaj_nacimis.d_nacimiento',
                'nnaj_sexos.s_nombre_identitario',
                'sis_nnajs.created_at',
                'sis_estas.s_estado',
                ])
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
                ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('nnaj_upis', 'sis_nnajs.id', '=', 'nnaj_upis.sis_nnaj_id')
                ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
                ->join('sis_estas', 'sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
                ->whereNotIn('sis_nnajs.id',  $responsa)
                ->whereIn('nnaj_upis.sis_depen_id', $depende);

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
        $dataxxxx = IMatriculaNnaj::select([
            'i_matricula_nnajs.id',
            'i_matricula_nnajs.sis_nnaj_id',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.id as fidatosbasicos',
            'tipodocu.nombre as tipodocu',
            'grupo.nombre as grupo',
            'grado.nombre as grado',
            'estrategia.nombre as estrategia',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'nnaj_sexos.s_nombre_identitario',
            'i_matricula_nnajs.observaciones',
            'i_matricula_nnajs.sis_esta_id',
            'nnaj_nacimis.d_nacimiento',
            'nnaj_docus.s_documento',
            'sis_depens.nombre',
            'sis_estas.s_estado',
        ])
            ->join('sis_nnajs', 'i_matricula_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->join('parametros as estrategia', 'i_matricula_nnajs.prm_estra', '=', 'estrategia.id')
            ->join('parametros as grupo', 'i_matricula_nnajs.prm_grupo', '=', 'grupo.id')
            ->join('parametros as grado', 'i_matricula_nnajs.prm_grado', '=', 'grado.id')
            ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->join('i_matriculas', 'i_matricula_nnajs.imatricula_id', '=', 'i_matriculas.id')
            ->join('sis_estas', 'i_matriculas.sis_esta_id', '=', 'sis_estas.id')
            ->join('nnaj_docus', 'i_matricula_nnajs.sis_nnaj_id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
            ->join('nnaj_nacimis', 'i_matricula_nnajs.sis_nnaj_id', '=', 'nnaj_nacimis.fi_datos_basico_id')
            ->join('nnaj_sexos', 'i_matricula_nnajs.sis_nnaj_id', '=', 'nnaj_sexos.fi_datos_basico_id')
            ->join('nnaj_upis', 'fi_datos_basicos.sis_nnaj_id', '=', 'nnaj_upis.sis_nnaj_id')
            ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
            ->where('i_matricula_nnajs.sis_esta_id', 1)
            ->where('i_matricula_nnajs.imatricula_id', $padrexxx->id);
        return $this->getDt($dataxxxx, $request);
    }
}

function getAgregarNnajs(Request $request, IMatricula $padrexxx)
{
    if ($request->ajax()) {
        $respuest = [];
        $dataxxxx = $request->all();
        $dataxxxx['imatricula_id'] = $padrexxx->id;
        $dataxxxx['sis_esta_id'] = 1;
        SalidaJovene::transaccion($dataxxxx, '');
        return response()->json($respuest);
    }
}

//Traslados
public function listaTraslados(Request $request)
{
    
    if ($request->ajax()) {
        $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
        $request->botonesx = $this->opciones['rutacarp'] .
            $this->opciones['carpetax'] . '.Botones.botonesapi';
        $request->estadoxx = 'layouts.components.botones.estadosx';
        $dataxxxx =  Traslado::select([
        'traslados.id',
        'traslados.fecha',
        'upi.nombre as upi',
        'tupi.nombre as tupi',
        'cargue.name as cargue',
        'responr.name as responr',
        'traslados.sis_esta_id',
        'traslados.created_at',
    ])
        ->join('sis_depens as upi', 'traslados.prm_upi_id', '=', 'upi.id')
        ->join('sis_depens as tupi', 'traslados.prm_trasupi_id', '=', 'tupi.id')
        ///motivos
        ->join('users as cargue', 'traslados.user_doc', '=', 'cargue.id')
        ->join('users as responr', 'traslados.responr_id', '=', 'responr.id')
        ->join('sis_estas', 'traslados.sis_esta_id', '=', 'sis_estas.id');
        return $this->getDtGeneral($dataxxxx, $request);

    }
}

public function getNnajtras(Request $request, Traslado $padrexxx)
{
    if ($request->ajax()) {
        $request->routexxx = ['traslannaj'];
        // $hoyxxxx = Carbon::today()->isoFormat('YYYY-MM-DD');
        // $mayores = explode('-',$hoyxxxx);
        // $mayorex = $mayores[0] - 14;
        // $mayorex = $mayorex .'-'.$mayores[1] .'-'.$mayores[2];
        $request->botonesx = $this->opciones['rutacarp'] .
        $this->opciones['carpetax'] . '.Botones.agregarnnaj';
        $request->estadoxx = 'layouts.components.botones.estadosx';
        $responsa = TrasladoNnaj::select(['sis_nnaj_id'])
            ->where('traslado_id', $padrexxx->id)
            ->get();
        $depende =    Traslado::select(['prm_upi_id'])
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
                'nnaj_nacimis.d_nacimiento',
                'nnaj_sexos.s_nombre_identitario',
                'sis_nnajs.created_at',
                'sis_estas.s_estado',
                
                ])
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
                ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('nnaj_upis', 'sis_nnajs.id', '=', 'nnaj_upis.sis_nnaj_id')
                ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
                ->join('sis_estas', 'sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
                ->whereNotIn('sis_nnajs.id',  $responsa)
                ->whereIn('nnaj_upis.sis_depen_id', $depende)
                ->where('nnaj_upis.sis_esta_id', 1);

        return $this->getDt($dataxxxx, $request);
    }
}

public function getTrasladoNnaj(Request $request, Traslado $padrexxx)
{
    if ($request->ajax()) {
        $request->routexxx = ['traslannaj'];
        // $hoyxxxx = Carbon::today()->isoFormat('YYYY-MM-DD');
        // $mayores = explode('-',$hoyxxxx);
        // $mayorex = $mayores[0] - 14;
        // $mayorex = $mayorex .'-'.$mayores[1] .'-'.$mayores[2];
        $request->botonesx = $this->opciones['rutacarp'] .
        $this->opciones['carpetax'] . '.Botones.agregarnnaj';
        $request->estadoxx = 'layouts.components.botones.estadosx';
        $responsa = TrasladoNnaj::select(['sis_nnaj_id'])
            ->where('traslado_id', $padrexxx->id)
            ->get();
        $depende =    Traslado::select(['prm_upi_id'])
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
                'nnaj_nacimis.d_nacimiento',
                'nnaj_sexos.s_nombre_identitario',
                'sis_nnajs.created_at',
                'sis_estas.s_estado',
                ])
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
                ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('nnaj_upis', 'sis_nnajs.id', '=', 'nnaj_upis.sis_nnaj_id')
                ->join('sis_depens', 'nnaj_upis.sis_depen_id', '=', 'sis_depens.id')
                ->join('sis_estas', 'sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
                ->whereNotIn('sis_nnajs.id',  $responsa)
                ->whereIn('nnaj_upis.sis_depen_id', $depende);

        return $this->getDt($dataxxxx, $request);
    }
}



public function getNnajTraslado(Request $request, Traslado $padrexxx)
{
    if ($request->ajax()) {
        $request->routexxx = ['traslannaj'];
        $request->botonesx = $this->opciones['rutacarp'] .
        $this->opciones['carpetax'] . '.Botones.elimasis';
        $request->edadxxxx = $this->opciones['rutacarp'] .
        $this->opciones['carpetax'] . '.Botones.edadxxxx';
        $request->estadoxx = 'layouts.components.botones.estadosx';
        $dataxxxx = TrasladoNnaj::select([
            'traslado_nnajs.id',
            'traslado_nnajs.sis_nnaj_id',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.id as fidatosbasicos',
            'tipodocu.nombre as tipodocu',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'nnaj_sexos.s_nombre_identitario',
            'traslado_nnajs.observaciones',
            'traslado_nnajs.sis_esta_id',
            'nnaj_nacimis.d_nacimiento',
            'nnaj_docus.s_documento',
            'sis_estas.s_estado',
        ])
            ->join('sis_nnajs', 'traslado_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->join('traslados', 'traslado_nnajs.traslado_id', '=', 'traslados.id')
            ->join('sis_estas', 'traslados.sis_esta_id', '=', 'sis_estas.id')
            ->join('nnaj_docus', 'traslado_nnajs.sis_nnaj_id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
            ->join('nnaj_nacimis', 'traslado_nnajs.sis_nnaj_id', '=', 'nnaj_nacimis.fi_datos_basico_id')
            ->join('nnaj_sexos', 'traslado_nnajs.sis_nnaj_id', '=', 'nnaj_sexos.fi_datos_basico_id')
            ->where('traslado_nnajs.sis_esta_id', 1)
            ->where('traslado_nnajs.traslado_id', $padrexxx->id);
        return $this->getDtras($dataxxxx, $request);
    }
}

function getAgregarTrasNnajs(Request $request, Traslado $padrexxx)
{
    if ($request->ajax()) {
        $respuest = [];
        $dataxxxx = $request->all();
        $dataxxxx['traslado_id'] = $padrexxx->id;
        $dataxxxx['sis_esta_id'] = 1;
        TrasladoNnaj::transaccion($dataxxxx, '');
        return response()->json($respuest);
    }
}

public function getServicio(Request $request)
{
    if ($request->ajax()) {
        return response()->json(
            SisServicio::getServicioDepe([
                'dependen' => $request->dependen,
                'cabecera' => false,
                'ajaxxxxx' => true,
                
            ])
        );
    }
}


public function getUpiTServicio(Request $request)
{
    if ($request->ajax()) {
        return response()->json(
            SisDepen::comboTraslado([
                'dependen' => $request->dependen,
                'cabecera' => false,
                'ajaxxxxx' => true,
            ])
        );
    }
}






public function getResponsableUpiE(Request $request)
{
    if ($request->ajax()) {
        $respuest = ['comboxxx' =>SisDepen::find($request->padrexxx)->ResponsableAjax,
                'campoxxx' => '#responsable',
                'selected' => 'selected'];
        return response()->json($respuest);
    }
}


public function getResponsableUpiR(Request $request)
{
    if ($request->ajax()) {
        $respuest = ['comboxxx' =>SisDepen::find($request->padrexxx)->ResponsableAjax,
                'campoxxx' => '#responsabler',
                'selected' => 'selected'];
        return response()->json($respuest);
    }
}


function getGrupo(Request $request)
{
    if ($request->ajax()) {
        $respuest = [];
        switch ($request->optionxx) {
            case 2:
                $respuest = ['grupo' => Tema::combo(387, false, true),];
                break;
            case 3:
                $respuest = ['grupo' => Tema::combo(384, false, true),];
                break;
            case 4:
                $respuest = ['grupo' => Tema::combo(386, false, true),];
                break;
            case 5:
                $respuest = ['grupo' => Tema::combo(385, false, true),];
                break;
            case 6:
                $respuest = ['grupo' => Tema::combo(383, false, true),];
                break;        
  
        }
        return response()->json($respuest);
    }
}

}
