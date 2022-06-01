<?php

namespace App\Traits\Acciones\Individuales\Salud\VsMedicinaGeneral;;



use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\UniComp;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\ValoraComp;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\VDiagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Vsmedicina;
use App\Models\Sistema\SisNnaj;

use App\Traits\DatatableTrait;

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

    public function getCursosTp($dataxxxx)
    {

        $dataxxxx['dataxxxx'] = MatriculaCurso::select('curso_id')->where('id', $dataxxxx['tipocurs'])
            ->where('sis_esta_id', 1)->first()->curso_id;
            $dataxxxx['dataxxxx']=count(CursoModulo::where('cursos_id', $dataxxxx['dataxxxx'])->where('sis_esta_id', 1)->get());     
        $respuest = $dataxxxx;
        return    $respuest;
    }


    public function getCurso(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'tipocurs' => $request->upixxxxx,
            
        ];
        $dataxxxx['cabecera'] = $request->cabecera;

        $respuest = response()->json($this->getCursosTp($dataxxxx));
        return $respuest;
    }
    
    public function listaMedicinaGeneral(Request $request, SisNnaj $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  Vsmedicina::select([
                'vsmedicinas.id',
                'vsmedicinas.fecha',
                'vsmedicinas.motivoval',
                'consulta.nombre as consulta',
                'sis_estas.s_estado',
                'cargue.name as cargue',
                'vsmedicinas.sis_esta_id',
                ])
                ->join('sis_estas', 'vsmedicinas.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros', 'vsmedicinas.consul_id', '=', 'parametros.id')
                ->join('users as cargue', 'vsmedicinas.user_id', '=', 'cargue.id')
                ->where('vsmedicinas.sis_esta_id', 1)
                ->where('vsmedicinas.sis_nnaj_id',$padrexxx->id);
                

            return $this->getDtGeneral($dataxxxx, $request);
        }
    }


    public function listaDiagnostico(Request $request,Vsmedicina $padrexxx)
    {
        
            if ($request->ajax()) {
                $request->routexxx = [$this->opciones['routxxxx'], 'formatov'];
                $request->botonesx = $this->opciones['rutacarp'] .
                    $this->opciones['carpetax'] . '.Botones.botonesapi';
                $request->estadoxx = 'layouts.components.botones.estadosx';
                $dataxxxx =  VDiagnostico::select([
                    'v_diagnosticos.id',
                    'v_diagnosticos.concepto',
                    'v_diagnosticos.codigo',
                    'diagnosticos.nombre as diagnostico',
                    'sis_estas.s_estado',
                    'v_diagnosticos.sis_esta_id',
                ])
                    ->join('vsmedicinas', 'v_diagnosticos.vmg_id', '=', 'vsmedicinas.id')
                    ->join('diagnosticos', 'v_diagnosticos.diag_id', '=', 'vsmedicinas.id')
                    ->join('sis_estas', 'vsmedicinas.sis_esta_id', '=', 'sis_estas.id')
                    ->where('v_diagnosticos.vmg_id',$padrexxx->id)
                    ->where('v_diagnosticos.sis_esta_id', 1);
                    

                return $this->getDtGeneral($dataxxxx, $request);
            }
            
    }

  

     


}

/*

