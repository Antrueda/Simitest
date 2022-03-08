<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Diaria;

use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Models\AdmiActi\Actividade;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdDiaria;
use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdSisNnaj;
use App\Models\AdmiActiAsd\AsdActividad;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DiariaListadosTrait
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

    /**
     * encontrar la lisa de actas de encuentro
     */


    public function getListaxxx(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AsdDiaria::select([
                'asd_diarias.id',
                'sis_depens.nombre as dependencia',
                'sis_servicios.s_servicio',
                'sis_localidads.s_localidad',
                'sis_upzs.s_upz',
                'sis_barrios.s_barrio',
                'lugactiv.nombre as lugactiv',
                'grupo.nombre as grupo',
                'actividad.nombre as actividad',
                'asd_diarias.sis_esta_id',
                'asd_diarias.consecut',
                'asd_diarias.numepagi',
                'sis_estas.s_estado'
            ])
                ->join('sis_depens', 'asd_diarias.sis_depen_id', '=', 'sis_depens.id')
                ->join('sis_servicios', 'asd_diarias.sis_servicio_id', '=', 'sis_servicios.id')
                ->join('sis_localidads', 'asd_diarias.sis_localidad_id', '=', 'sis_localidads.id')
                ->join('sis_upzs', 'asd_diarias.sis_upz_id', '=', 'sis_upzs.id')
                ->join('sis_barrios', 'asd_diarias.sis_barrio_id', '=', 'sis_barrios.id')
                ->join('parametros as lugactiv', 'asd_diarias.prm_lugactiv_id', '=', 'lugactiv.id')
                ->join('parametros as grupo', 'asd_diarias.prm_grupo_id', '=', 'grupo.id')
                ->join('parametros as actividad', 'asd_diarias.prm_actividad_id', '=', 'actividad.id')
                ->join('sis_estas', 'asd_diarias.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDt($dataxxxx, $request);
        }
    }


    public function getNnajsAgregados(Request $request,$padrexxx)
    {
        

        if ($request->ajax()) {
            $request->routexxx = ['nnajasdi', 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AsdSisNnaj::select([
                'asd_sis_nnajs.id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'asd_sis_nnajs.sis_esta_id',
                'nnaj_docus.s_documento',
                'asd_diarias.consecut',
                'sis_estas.s_estado'
            ])
                ->join('asd_diarias', 'asd_sis_nnajs.asd_diaria_id', '=', 'asd_diarias.id')
                ->join('sis_nnajs', 'asd_sis_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('sis_estas', 'asd_sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
                ->where('asd_sis_nnajs.asd_diaria_id',$padrexxx);
                
            return $this->getDt($dataxxxx, $request);
        }
    }


    public function getActividadAsignar($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = AsdActividad::select('actividades.id AS valuexxx', 'actividades.nombre AS optionxx')
            ->join('actividade_sis_depen', 'actividades.id', 'actividade_sis_depen.actividade_id')
            //->where('actividade_sis_depen.sis_depen_id', $dataxxxx['dependen'])
            ->where('actividades.tipos_actividad_id', $dataxxxx['tipoacti'])
            ->where('actividades.sis_esta_id', 1)
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return $respuest;
    }

    public function getNnajsAgregar(Request $request,$padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->padrexxx = $padrexxx;
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.agregarx';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  SisNnaj::select([
                'sis_nnajs.id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'sis_nnajs.sis_esta_id',
                'nnaj_docus.s_documento',
                'sis_estas.s_estado'
            ])
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->leftJoin('asd_sis_nnajs','sis_nnajs.id','=','asd_sis_nnajs.sis_nnaj_id')
                ->join('sis_estas', 'sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
                ->where('asd_sis_nnajs.sis_nnaj_id',null)
                ;
            return $this->getDt($dataxxxx, $request);
        }
    }
}
