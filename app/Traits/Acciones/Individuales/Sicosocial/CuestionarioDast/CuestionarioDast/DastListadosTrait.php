<?php

namespace App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDast;

use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfPerfilVoca;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastPregunta;

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
            $dataxxxx =  PvfPerfilVoca::select([
                'pvf_perfil_vocas.id',
                'pvf_perfil_vocas.fecha',
                'pvf_perfil_vocas.concepto',
                'pvf_perfil_vocas.sis_esta_id',
                'sis_depens.nombre',
                'users.name',
                'sis_estas.s_estado'
            ])
                ->join('sis_depens', 'pvf_perfil_vocas.sis_depen_id', '=', 'sis_depens.id')
                ->join('users', 'pvf_perfil_vocas.user_fun_id', '=', 'users.id')
                ->join('sis_estas', 'pvf_perfil_vocas.sis_esta_id', '=', 'sis_estas.id')
                ->where('pvf_perfil_vocas.sis_nnaj_id', $padrexxx->id);
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
}
