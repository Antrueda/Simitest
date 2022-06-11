<?php

namespace App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\CuestionarioGustos;

use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Models\Ejemplo\AeEncuentro;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCategoria;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCuestionario;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CigCuestionarioListadosTrait
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

    public function getListaxxx(Request $request,SisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  CgihCuestionario::select([
                'cgih_cuestionarios.id',
                'sis_depens.nombre as dependencia',
                'cgih_cuestionarios.fecha',
                'cgih_cuestionarios.sis_esta_id',
                'users.name',
                'sis_estas.s_estado'
            ])
                ->join('sis_depens', 'cgih_cuestionarios.sis_depen_id', '=', 'sis_depens.id')
                ->join('users', 'cgih_cuestionarios.user_fun_id', '=', 'users.id')
                ->join('sis_estas', 'cgih_cuestionarios.sis_esta_id', '=', 'sis_estas.id')
                ->where('cgih_cuestionarios.sis_nnaj_id',$padrexxx->id);
            return $this->getDt($dataxxxx, $request);
        }
    }

   


    public function getListaHabilidades()
    {
        $data = CgihCategoria::with('habilidades:id,categorias_id,nombre,prm_letras_id','habilidades.letra:id,nombre')
        ->select('cgih_categorias.id','cgih_categorias.nombre')
        ->where('cgih_categorias.sis_esta_id',1)
//       -> orderBy('categorias_id.id', 'asc')

        ->get();

        return $data;
    }
}
