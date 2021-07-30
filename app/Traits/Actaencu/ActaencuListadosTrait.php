<?php

namespace App\Traits\Actaencu;

use App\Models\Actaencu\AeAsisNnaj;
use App\Models\Actaencu\AeAsistencia;
use App\Models\Actaencu\AeContacto;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Actaencu\AeRecurso;
use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ActaencuListadosTrait
{
    public  function getDt($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    /**
                     * validaciones para los permisos
                     */

                    return  view($requestx->botonesx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }
            )
            ->addColumn(
                's_estado',
                function ($queryxxx) use ($requestx) {
                    return  view($requestx->estadoxx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }

            )
            ->rawColumns(['botonexx', 's_estado'])
            ->toJson();
    }

    public  function getAsistenciaDt($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    /**
                     * validaciones para los permisos
                     */

                    return  view($requestx->botonesx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }
            )
            ->addColumn(
                's_estado',
                function ($queryxxx) use ($requestx) {
                    return  view($requestx->estadoxx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }

            )
            ->setRowClass(function ($queryxxx) use ($requestx) {
                $nnajxxxx = AeAsisNnaj::where('ae_asistencia_id', $requestx->padrexxx)->where('sis_nnaj_id', $queryxxx->id)->first();
                return !is_null($nnajxxxx) ? 'alert-success' : '';
            })
            ->rawColumns(['botonexx', 's_estado'])


            ->toJson();
    }

    /**
     * encontrar la lisa de actas de encuentro
     */


    public function getListaxxx(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AeEncuentro::select([
                'ae_encuentros.id',
                'sis_depens.nombre as dependencia',
                'sis_servicios.s_servicio',
                'sis_localidads.s_localidad',
                'sis_upzs.s_upz',
                'sis_barrios.s_barrio',
                'accion.nombre as accion',
                'actividad.nombre as actividad', 'ae_encuentros.sis_esta_id', 'sis_estas.s_estado'
            ])
                ->join('sis_depens', 'ae_encuentros.sis_depen_id', '=', 'sis_depens.id')
                ->join('sis_servicios', 'ae_encuentros.sis_servicio_id', '=', 'sis_servicios.id')
                ->join('sis_localidads', 'ae_encuentros.sis_localidad_id', '=', 'sis_localidads.id')
                ->join('sis_upzs', 'ae_encuentros.sis_upz_id', '=', 'sis_upzs.id')
                ->join('sis_barrios', 'ae_encuentros.sis_barrio_id', '=', 'sis_barrios.id')
                ->join('parametros as accion', 'ae_encuentros.prm_accion_id', '=', 'accion.id')
                ->join('parametros as actividad', 'ae_encuentros.prm_actividad_id', '=', 'actividad.id')
                ->join('sis_estas', 'ae_encuentros.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getListaContactos($padrexxx, Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AeContacto::select([
                'ae_contactos.id',
                'ae_contactos.nombres_apellidos',
                'sis_entidads.nombre',
                'ae_contactos.cargo',
                'ae_contactos.phone',
                'ae_contactos.email',
                'ae_contactos.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'ae_contactos.sis_esta_id', '=', 'sis_estas.id')
                ->join('sis_entidads', 'ae_contactos.sis_entidad_id', '=', 'sis_entidads.id')
                ->where('ae_contactos.ae_encuentro_id', $padrexxx);
            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getListaNnajsAsignaar(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesnnajapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  FiDatosBasico::select([
                'fi_datos_basicos.sis_nnaj_id as id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'nnaj_docus.s_documento',
                'fi_datos_basicos.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id');
            return $this->getAsistenciaDt($dataxxxx, $request);
        }
    }

    public function getListaAsistencias($padrexxx, Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx = AeAsistencia::select([
                'ae_asistencias.id as id',
                'funcionario.name as funcname',
                'responsable.name as respname',
                'ae_asistencias.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'ae_asistencias.sis_esta_id', '=', 'sis_estas.id')
                ->join('users as funcionario', 'ae_asistencias.user_funcontr_id', '=', 'funcionario.id')
                ->join('users as responsable', 'ae_asistencias.respoupi_id', '=', 'responsable.id')
                ->where('ae_asistencias.ae_encuentro_id', $padrexxx);
            return $this->getDt($dataxxxx, $request);
        }
    }
}
