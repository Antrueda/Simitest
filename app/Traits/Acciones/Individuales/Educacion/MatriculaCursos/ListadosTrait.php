<?php

namespace App\Traits\Acciones\Grupales;

use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\AgCarguedoc;
use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Acciones\Grupales\AgRelacion;
use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\Acciones\Grupales\Educacion\GradoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Grupales\Traslado\Traslado;
use App\Models\Acciones\Grupales\Traslado\TrasladoNnaj;
use App\Models\Acciones\Individuales\AiSalidaMayores;
use App\Models\Acciones\Individuales\Pivotes\SalidaJovene;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\Parametro;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Simianti\Ge\GeUpiNnaj;
use App\Models\Simianti\Inf\IfAsistenciaDiaria;
use App\Models\Simianti\Inf\IfDetalleAsistenciaDiaria;
use App\Models\Simianti\Inf\IfPlanillaAsistencia;
use App\Models\Simianti\Ped\PedEstadoM;
use App\Models\Simianti\Ped\PedMatricula;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisServicio;
use App\Models\Tema;
use App\Models\User;
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
                ->where('ag_actividads.sis_esta_id', 1)
                ->where('incompleto', 0);

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
            $mayores = explode('-', $hoyxxxx);
            $mayorex = $mayores[0] - 14;
            $mayorex = $mayorex . '-' . $mayores[1] . '-' . $mayores[2];
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
                ->where('nnaj_nacimis.d_nacimiento',  '<=', $mayorex)
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
            $mayores = explode('-', $hoyxxxx);
            $mayorex = $mayores[0] - 14;
            $mayorex = $mayorex . '-' . $mayores[1] . '-' . $mayores[2];
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
        $dataxxxx = FiCompfami::getResponsableSalida($request->nnajxxxx, false, true);
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
                ->where('ag_carguedocs.ag_actividad_id', $padrexxx->id);

            return $this->getDt($dataxxxx, $request);
        }
    }
    public function getResponsable(Request $request)
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
            }

            return response()->json($upisxxx);
        }
    }
    ////



    public function getResponsableUpiE(Request $request)
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


    public function getResponsableUpiR(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [
                'comboxxx' => SisDepen::find($request->padrexxx)->ResponsableAjax,
                'campoxxx' => '#responsabler',
                'selected' => 'selected'
            ];
            return response()->json($respuest);
        }
    }

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




    public function getTraslado(Request $request)
    {
        $parametros = [];
        switch ($request->padrexxx) {
            case 2637: //TRASLADO POR SERVICIO
                $dataxxxx = [
                    'temaxxxx' => 393,
                    'campoxxx' => 'nombre',
                    'orederby' => 'ASC',
                    'cabecera' => true,
                    'ajaxxxxx' => true,
                    'selected' => $request->selected,
                ];
                break;
            case 2638: //TRASLADO DE UPI / DEPENDENCIA (GENERAL)
                $dataxxxx = [
                    'temaxxxx' => 393,
                    'campoxxx' => 'nombre',
                    'orederby' => 'ASC',
                    'cabecera' => false,
                    'ajaxxxxx' => true,
                    'notinxxx' => [2642],
                    'selected' => $request->selected,
                ];
                break;
            case 2639: //TRASLADO COMPARTIDO
                $dataxxxx = [
                    'temaxxxx' => 393,
                    'campoxxx' => 'nombre',
                    'orederby' => 'ASC',
                    'cabecera' => false,
                    'ajaxxxxx' => true,
                    'notinxxx' => [2641],
                    'selected' => $request->selected,
                ];
                break;
            case 2640: //REASIGNACIÓN DE TALLERES
                $dataxxxx = [
                    'temaxxxx' => 393,
                    'campoxxx' => 'nombre',
                    'orederby' => 'ASC',
                    'cabecera' => true,
                    'ajaxxxxx' => true,
                    'selected' => $request->selected,
                ];
                break;
        }
        if ($request->padrexxx == 2637 || $request->padrexxx == 2640) {
            $parametros = $this->getTemacomboCT($dataxxxx)['comboxxx'];
        } else {
            $parametros = $this->getTemacomboCT($dataxxxx)['comboxxx'];
        }
        return $parametros;
    }


    //MATRICULA
    //PedMatricula
    //PedEstadoM
    //Asistencia
    //IfDetalleAsistenciaDiaria
    //IfAsistenciaDiaria
    //IfPlanillaAsistencia
    //IfPlanillaNnaj





    public function getEgreso(Request $request)
    {
        if ($request->ajax()) {

            $dataxxxx = [
                'cuidador' => ['cuid_doc',  []],
                'enfermer' => ['auxe_doc',  []],
                'docentex' => ['doce_doc',  []],
                'piscoxxx' => ['psico_doc', []],
                'auxiliar' => ['auxil_doc', []],

            ];

            $dataxxxx['cuidador'][1] = User::userComboRolUpi(['cabecera' => true, 'ajaxxxxx' => true, 'dependen' => $request->padrexxx, 'notinxxx' => 0, 'rolxxxxx' => [16, 23]]);
            $dataxxxx['enfermer'][1] = User::userComboRolUpi(['cabecera' => true, 'ajaxxxxx' => true, 'dependen' => $request->padrexxx, 'notinxxx' => 0, 'rolxxxxx' => [6]]);
            $dataxxxx['docentex'][1] = User::userComboRolUpi(['cabecera' => true, 'ajaxxxxx' => true, 'dependen' => $request->padrexxx, 'notinxxx' => 0, 'rolxxxxx' => [14]]);
            $dataxxxx['piscoxxx'][1] = User::userComboRolUpi(['cabecera' => true, 'ajaxxxxx' => true, 'dependen' => $request->padrexxx, 'notinxxx' => 0, 'rolxxxxx' => [4, 3, 7]]);
            $dataxxxx['auxiliar'][1] = User::userComboRolUpi(['cabecera' => true, 'ajaxxxxx' => true, 'dependen' => $request->padrexxx, 'notinxxx' => 0, 'rolxxxxx' => [25]]);

            return response()->json($dataxxxx);
        }
    }





    public function getAsistencia(Request $request)
    {
        $camposxx = $this->getGeNnajCamposCNSFT();
        $queryxxx = GeNnajDocumento::select($camposxx)
            ->join('ge_nnaj', 'ge_nnaj_documento.id_nnaj', '=', 'ge_nnaj.id_nnaj')
            ->join('ge_upi_nnaj', 'ge_nnaj.id_nnaj', '=', 'ge_upi_nnaj.id_nnaj')
            // ->join('ge_direcciones', 'ge_nnaj.id_nnaj', '=', 'ge_direcciones.id_nnaj')
            ->where('ge_nnaj_documento.numero_documento', $request->nnajxxxx)
            ->where('ge_upi_nnaj.estado', 'A')
            ->orderBy('ge_nnaj_documento.fecha_insercion', 'DESC')
            ->orderBy('ge_upi_nnaj.fecha_insercion', 'ASC')
            ->first();

        $estadoxz = PedEstadoM::select('ped_estado_m.estado')
            ->join('ped_matricula', 'ped_estado_m.matricula_id', '=', 'ped_matricula.id_matricula')
            ->where('ped_matricula.nnaj_id', $queryxxx->id_nnaj)
            ->orderBy('ped_matricula.fecha_insercion', 'DESC')
            ->first();

        $fechadxx = IfPlanillaAsistencia::select('if_planilla_asistencia.fecha_asistencia')
            ->join('if_planilla_nnajs', 'if_planilla_asistencia.id_planilla_asistencia', '=', 'if_planilla_nnajs.id_planilla_asistencia')
            ->where('if_planilla_nnajs.id_nnaj', $queryxxx->id_nnaj)
            ->orderBy('if_planilla_asistencia.fecha_insercion', 'DESC')
            ->first();

        $fechamxx = IfDetalleAsistenciaDiaria::select('fechad1', 'fechad2', 'fechad3', 'fechad4', 'fechad5', 'fechad6', 'fechad7')
            ->where('if_detalle_asistencia_diaria.id_nnaj', $queryxxx->id_nnaj)
            ->orderBy('if_detalle_asistencia_diaria.fecha_insercion', 'DESC')
            ->first();

        $fechamxx = max($fechamxx->toArray());

        if ($fechadxx != null && $fechamxx != null) {

            if ($fechadxx->fecha_asistencia >= $fechamxx) {
                $fechaxxx = $fechadxx->fecha_asistencia;
            } else {
                $fechaxxx = $fechamxx;
            }
        } else {
            $fechaxxx = '1900-00-00';
        }
        if ($estadoxz == null) {
            $estadoxx = '';
        } else {
            $estadoxx = $estadoxz->estado;
        }

        $respuest = [
            'fechaxxx' =>  explode(' ', $fechaxxx)[0],
            'estadoxx' =>  $estadoxx,
            'campoxxx' => '#fechaasistencia',
            'selected' => 'selected'
        ];
        return $respuest;
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
                'grado.s_grado as grado',
                'grupo.nombre as grupo',
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
                ->join('parametros as grupo', 'i_matriculas.prm_grupo', '=', 'grupo.id')
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
            $responsa = IMatriculaNnaj::select(['sis_nnaj_id'])
                ->where('sis_esta_id', 1)
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
                ->whereIn('nnaj_upis.sis_depen_id', $depende)
                ->where('nnaj_upis.sis_esta_id', 1);

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
                
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'nnaj_sexos.s_nombre_identitario',
                'i_matricula_nnajs.observaciones',
                'i_matricula_nnajs.sis_esta_id',
                'nnaj_nacimis.d_nacimiento',
                'nnaj_docus.s_documento',
                'sis_estas.s_estado',
                'documento.nombre as documento',
                'certifica.nombre as certifica',
                'matricula.nombre as matricula',
                'i_matricula_nnajs.numeromatricula',
                
            ])
                ->join('sis_nnajs', 'i_matricula_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('i_matriculas', 'i_matricula_nnajs.imatricula_id', '=', 'i_matriculas.id')
                ->join('sis_estas', 'i_matriculas.sis_esta_id', '=', 'sis_estas.id')
                ->join('nnaj_docus', 'i_matricula_nnajs.sis_nnaj_id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
                ->join('parametros as documento', 'i_matricula_nnajs.prm_copdoc', '=', 'documento.id')
                ->join('parametros as certifica', 'i_matricula_nnajs.prm_certif', '=', 'certifica.id')
                ->join('parametros as matricula', 'i_matricula_nnajs.prm_matric', '=', 'matricula.id')
                ->join('nnaj_nacimis', 'i_matricula_nnajs.sis_nnaj_id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('nnaj_sexos', 'i_matricula_nnajs.sis_nnaj_id', '=', 'nnaj_sexos.fi_datos_basico_id')
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


    public function getMatriculaUnico(Request $request)
    {
        $queryxxx = GeNnajDocumento::where('numero_documento', $request->nnajxxxx)->first();
        $matricula=null;
        if($queryxxx!=null){
        $matricula = PedMatricula::select('ped_matricula.numero_matricula')
            ->where('ped_matricula.nnaj_id', $queryxxx->id_nnaj)
            ->orderBy('ped_matricula.fecha_insercion', 'DESC')
            ->first();
        }
        $matriculn = PedMatricula::max('ped_matricula.numero_matricula');
        $matricnew = IMatriculaNnaj::max('numeromatricula');
        $nnajxxxx = NnajDocu::where('s_documento', $request->nnajxxxx)->first()->fi_datos_basico;    
        $matrnnaj = IMatriculaNnaj::select('numeromatricula')->where('sis_nnaj_id',$nnajxxxx->sis_nnaj_id)->first();
        
            
                if($matrnnaj==null&&$matricula == null){
                    if($matriculn>= $matricnew){
                        $matriculx = $matriculn+1;
                    }else{
                        $matriculx = $matricnew+1;
                    }
                }else{
                    // if($matricula==null){
                    //    $matriculx = $matrnnaj->numeromatricula;
                    // }else{
                    if($matricula->numero_matricula>=$matrnnaj){
                        $matriculx = $matricula->numero_matricula;
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
        $dataxxxx['cabecera']=$request->cabecera;

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
        $dataxxxx['cabecera']=$request->cabecera;

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
        
        $dataxxxx['dataxxxx'] = GrupoAsignar::select(['parametros.id as valuexxx', 'parametros.nombre as optionxx'])
            ->join('parametros', 'grupo_asignars.grupo_matricula_id', '=', 'parametros.id')
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

/*

