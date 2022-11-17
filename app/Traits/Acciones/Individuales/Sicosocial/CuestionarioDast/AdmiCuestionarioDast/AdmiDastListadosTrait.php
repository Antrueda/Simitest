<?php

namespace App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast;

use Illuminate\Http\Request;

use App\Models\Usuario\Estusuario;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastAccione;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastPuntaje;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastPregunta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiDastListadosTrait
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
     * encontrar la lista de actividades Diarias
     */
    public function getListaResultados(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  DastPuntaje::select([
                'dast_puntajes.id',
                'dast_puntajes.minimo',
                'dast_puntajes.superior',
                'dast_puntajes.grado_problema',
                'dast_puntajes.sis_esta_id',
                'dast_acciones.nombre AS accion',
                'sis_estas.s_estado'
            ])
                ->join('dast_acciones', 'dast_puntajes.accion_id', '=', 'dast_acciones.id')
                ->join('sis_estas', 'dast_puntajes.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getListaAcciones(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  DastAccione::select([
                'dast_acciones.id',
                'dast_acciones.nombre',
                'dast_acciones.descripcion',
                'dast_acciones.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'dast_acciones.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getListaPreguntas(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  DastPregunta::select([
                'dast_preguntas.id',
                'dast_preguntas.pregunta',
                'dast_preguntas.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'dast_preguntas.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getMotivosAcciones(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2895
                ])
            );
        }
    }

    public function getMotivosPreguntas(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2894
                ])
            );
        }
    }

    public function getMotivosResultados(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2896
                ])
            );
        }
    }
}
