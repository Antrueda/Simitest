<?php

namespace App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion;


use Illuminate\Http\Request;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCategoria;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihHabilidad;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihLimite;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiCuesListadosTrait
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


    public function getListaTiposActividad(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  CgihCategoria::select([
                'cgih_categorias.id',
                'cgih_categorias.nombre',
                'cgih_categorias.descripcion',
                'cgih_categorias.sis_esta_id',
                'sis_estas.s_estado'

               

            ])
            ->join('sis_estas', 'cgih_categorias.sis_esta_id', '=', 'sis_estas.id');
         

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getListaLimite(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  CgihLimite::select([
                'cgih_limites.id',
                'cgih_limites.limite',
                'cgih_limites.descripcion',
                'cgih_limites.sis_esta_id',
                'sis_estas.s_estado'
            ])
            ->join('sis_estas', 'cgih_limites.sis_esta_id', '=', 'sis_estas.id');
         

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getListaActividades(Request $request,$padrexx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  CgihHabilidad::select([
                'cgih_habilidads.id',
                'cgih_categorias.nombre AS categorias_id',
                'cursos.s_cursos AS cursos_id',
                'cgih_habilidads.prm_letras_id',
                'cgih_habilidads.nombre',
                'cgih_habilidads.descripcion',
                'cgih_habilidads.sis_esta_id',
                'sis_estas.s_estado',
            ])
                ->join('cgih_categorias', 'cgih_habilidads.categorias_id', '=', 'cgih_categorias.id')
                ->join('cursos', 'cgih_habilidads.cursos_id', '=', 'cursos.id')
                ->join('sis_estas', 'cgih_habilidads.sis_esta_id', '=', 'sis_estas.id')
                ->where('cgih_habilidads.categorias_id',$padrexx);
            return $this->getDt($dataxxxx, $request);
        }

    }


    
    
}
