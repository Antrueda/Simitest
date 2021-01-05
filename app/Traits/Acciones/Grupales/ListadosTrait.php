<?php

namespace App\Traits\Acciones\Grupales;

use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Acciones\Grupales\AgRelacion;
use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisDepeUsua;
use App\Traits\DatatableTrait;
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
                ->join('ag_tallers', 'ag_actividads.ag_taller_id', '=', 'ag_tallers.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function listaResponsables(Request $request, AgActividad $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = ['agrespon', 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
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
            ])
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
                ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->join('nnaj_upis', 'fi_datos_basicos.sis_nnaj_id', '=', 'nnaj_upis.sis_nnaj_id')
                ->where('sis_nnajs.prm_escomfam_id',  227)
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
            $dataxxxx = AgAsistente::select([
                'ag_asistentes.id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'ag_asistentes.sis_esta_id',
                'nnaj_docus.s_documento',

            ])
                ->join('ag_actividads', 'ag_asistentes.ag_actividad_id', '=', 'ag_actividads.id')
                ->join('fi_datos_basicos', 'ag_asistentes.fi_dato_basico_id', '=', 'fi_datos_basicos.id')
                ->join('nnaj_docus', 'ag_asistentes.fi_dato_basico_id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->where('ag_asistentes.sis_esta_id', 1)
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

    
}
