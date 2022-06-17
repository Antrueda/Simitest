<?php

namespace app\Traits\Acciones\Individuales\Educacion\VEntrevista;



use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\UniComp;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\ValoraComp;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Educacion\VEntrevista;
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


    
    public function listaVentrevista(Request $request, SisNnaj $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  VEntrevista::select([
                'v_entrevistas.id',
                'v_entrevistas.fecha',
                'v_entrevistas.conceptoocu',
                'sis_depens.nombre',
                'sis_estas.s_estado',
                'cargue.name as cargue',
                'v_entrevistas.sis_esta_id',
                ])
                ->join('sis_estas', 'v_entrevistas.sis_esta_id', '=', 'sis_estas.id')
                ->join('users as cargue', 'v_entrevistas.user_id', '=', 'cargue.id')
                ->join('sis_depens', 'v_entrevistas.upi_id', '=', 'sis_depens.id')
                ->where('v_entrevistas.sis_esta_id', 1)
                ->where('v_entrevistas.sis_nnaj_id',$padrexxx->id);
                

            return $this->getDtGeneral($dataxxxx, $request);
        }
    }


 

  

     


}

/*

