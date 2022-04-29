<?php

namespace App\Traits\Acciones\Grupales\GestMatrAcademica;

use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Models\Ejemplo\AeEncuentro;
use App\Models\Simianti\Ped\PedMatricula;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
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
            // ->addColumn(
            //     's_estado',
            //     function ($queryxxx) use ($requestx) {
            //         return  view($requestx->estadoxx, [
            //             'queryxxx' => $queryxxx,
            //             'requestx' => $requestx,
            //         ]);
            //     }

            // )
            ->rawColumns(['botonexx'])
            ->toJson();
    }

    public  function getDt2($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->toJson();
    }
  

    public function getListMatriculasNnaj(SisNnaj $modeloxx, Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
    
            $dataxxxx = IMatriculaNnaj::select([
                'i_matricula_nnajs.id',
                'i_matricula_nnajs.numeromatricula',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'i_matriculas.fecha',
                'tipodocu.nombre as tipodocu',    
                'nnaj_docus.s_documento',      
                'grupo_matriculas.s_grupo', 
                'eda_grados.s_grado',
                'periodo.nombre as periodo',       
                'estrategia.nombre as estrategia', 
                'sis_depens.nombre as upi', 
                'sis_servicios.s_servicio',
                'i_estado_ms.id as idesta'
            ])
                ->join('sis_nnajs', 'i_matricula_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->leftJoin('i_estado_ms', 'i_matricula_nnajs.id', '=', 'i_estado_ms.id')
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('i_matriculas', 'i_matricula_nnajs.imatricula_id', '=', 'i_matriculas.id')
                ->join('grupo_matriculas', 'i_matriculas.prm_grupo', '=', 'grupo_matriculas.id')
                ->join('eda_grados', 'i_matriculas.prm_grado', '=', 'eda_grados.id')
                ->join('sis_depens', 'i_matriculas.prm_upi_id', '=', 'sis_depens.id')
                ->join('sis_servicios', 'i_matriculas.prm_serv_id', '=', 'sis_servicios.id')
                ->join('sis_estas', 'i_matriculas.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as periodo', 'i_matriculas.prm_periodo', '=', 'periodo.id')
                ->join('parametros as estrategia', 'i_matriculas.prm_estra', '=', 'estrategia.id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
                ->join('nnaj_nacimis', 'fi_datos_basicos.sis_nnaj_id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('nnaj_sexos', 'fi_datos_basicos.sis_nnaj_id', '=', 'nnaj_sexos.fi_datos_basico_id')
                // ->where('i_matricula_nnajs.sis_esta_id', 1)
                ->where('i_matricula_nnajs.sis_nnaj_id', $modeloxx->id);

            return $this->getDt($dataxxxx, $request);
        }
    }
    public function getHistMatriculasNnaj(SisNnaj $modeloxx, Request $request)
    {
        $documento=$modeloxx->fi_datos_basico->nnaj_docu->s_documento;
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
    
            $dataxxxx = PedMatricula::select([
                'ped_matricula.id_matricula',
                'ped_matricula.numero_matricula',
                'ge_nnaj.primer_apellido',
                'ge_nnaj.segundo_apellido',
                'ge_nnaj.primer_nombre',
                'ge_nnaj.segundo_nombre',
                'ped_matricula.fecha_inscripcion',
                'ge_nnaj.tipo_documento',    
                'ge_nnaj_documento.numero_documento',      
                'ge_grupo.nombre as grupo', 
                'ge_programa.nombre as grado', 
                'ped_periodo_m.ano',    
                'ped_periodo_m.periodo',       
                'ped_matricula.estrategia',     
                'ge_upi.nombre as upi', 
                'ped_estado_m.estado'
            ])
                ->join('ge_nnaj', 'ped_matricula.nnaj_id', '=', 'ge_nnaj.id_nnaj')
                ->join('ge_nnaj_documento', 'ge_nnaj.id_nnaj', '=', 'ge_nnaj_documento.id_nnaj')
                ->join('ge_programa', 'ped_matricula.grado', '=', 'ge_programa.id_programa')
                ->join('ge_grupo', 'ped_matricula.grupo', '=', 'ge_grupo.id')
                ->join('ped_periodos_matricula', 'ped_matricula.id_matricula', '=', 'ped_periodos_matricula.id_matricula')
                ->join('ped_periodo_m', 'ped_periodos_matricula.id_periodo', '=', 'ped_periodo_m.id_periodo')
                ->join('ge_upi', 'ped_matricula.upi_id', '=', 'ge_upi.id_upi')
                ->join('ped_estado_m', 'ped_matricula.id_matricula', '=', 'ped_estado_m.matricula_id')
                ->where('ge_nnaj_documento.numero_documento', $documento)
                ->orderBy('ped_matricula.fecha_inscripcion','desc');
            return $this->getDt2($dataxxxx, $request);
        }
    }

    public function getNnajMatricula($modeloxx)
    {
            $dataxxxx = IMatriculaNnaj::select([
                'i_matricula_nnajs.id',
                'i_matricula_nnajs.numeromatricula',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'i_matriculas.fecha', 
                'nnaj_docus.s_documento',      
                'grupo_matriculas.s_grupo', 
                'eda_grados.s_grado',
                'periodo.nombre as periodo',       
                'estrategia.nombre as estrategia', 
                'sis_depens.nombre as upi', 
                'sis_servicios.s_servicio',
                'i_estado_ms.id as idesta'
            ])
                ->join('sis_nnajs', 'i_matricula_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->leftJoin('i_estado_ms', 'i_matricula_nnajs.id', '=', 'i_estado_ms.id')
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('i_matriculas', 'i_matricula_nnajs.imatricula_id', '=', 'i_matriculas.id')
                ->join('grupo_matriculas', 'i_matriculas.prm_grupo', '=', 'grupo_matriculas.id')
                ->join('eda_grados', 'i_matriculas.prm_grado', '=', 'eda_grados.id')
                ->join('sis_depens', 'i_matriculas.prm_upi_id', '=', 'sis_depens.id')
                ->join('sis_servicios', 'i_matriculas.prm_serv_id', '=', 'sis_servicios.id')
                ->join('sis_estas', 'i_matriculas.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as periodo', 'i_matriculas.prm_periodo', '=', 'periodo.id')
                ->join('parametros as estrategia', 'i_matriculas.prm_estra', '=', 'estrategia.id')
                ->join('nnaj_docus', 'i_matricula_nnajs.sis_nnaj_id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->where('i_matricula_nnajs.id', $modeloxx)->firstOrFail();
                
            return $dataxxxx;
    }

}
