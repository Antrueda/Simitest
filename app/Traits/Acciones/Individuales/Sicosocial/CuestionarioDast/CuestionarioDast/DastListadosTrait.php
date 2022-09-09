<?php

namespace App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDast;

use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\Dast;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastPregunta;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastPuntaje;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastSeguimiento;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DastListadosTrait
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
    public function getListaxxx(Request $request, SisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  Dast::select([
                'dasts.id',
                'dasts.fecha',
                'dasts.sis_esta_id',
                'sis_depens.nombre',
                'users.name',
                'sis_estas.s_estado'
            ])
                ->join('sis_depens', 'dasts.sis_depen_id', '=', 'sis_depens.id')
                ->join('users', 'dasts.user_fun_id', '=', 'users.id')
                ->join('sis_estas', 'dasts.sis_esta_id', '=', 'sis_estas.id')
                ->where('dasts.sis_nnaj_id', $padrexxx->id);
            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getListaSeguimientos(Request $request, Dast $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  DastSeguimiento::select([
                'dast_seguimientos.id',
                'dast_seguimientos.fecha',
                'tipo.nombre as tipo',
                'dast_seguimientos.sis_esta_id',
                'sis_depens.nombre',
                'users.name',
                'sis_estas.s_estado'
            ])
                ->join('sis_depens', 'dast_seguimientos.sis_depen_id', '=', 'sis_depens.id')
                ->join('users', 'dast_seguimientos.user_fun_id', '=', 'users.id')
                ->join('sis_estas', 'dast_seguimientos.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as tipo', 'dast_seguimientos.prm_tipo_seguimiento', '=', 'tipo.id')
                ->where('dast_seguimientos.dast_id', $padrexxx->id);
            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getPreguntasDast()
    {
        $data = DastPregunta::select('dast_preguntas.id', 'dast_preguntas.pregunta')
            ->where('dast_preguntas.sis_esta_id', 1)
            ->get();

        return $data;
    }

    public function getPuntajesDast()
    {
        $data = DastPuntaje::select('dast_puntajes.id', 'dast_puntajes.minimo', 'dast_puntajes.superior', 'dast_puntajes.grado_problema', 'dast_puntajes.accion_id', 'dast_acciones.nombre')
            ->join('dast_acciones', 'dast_puntajes.accion_id', '=', 'dast_acciones.id')
            ->where('dast_puntajes.sis_esta_id', 1)
            ->get()->toArray();

        return $data;
    }
}
