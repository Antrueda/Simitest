<?php

namespace App\Traits\Acciones\Individuales\Salud\Odontologia\Odontologia;



use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Salud\Odontologia\VOdontologia;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\VDiagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Vsmedicina;
use App\Models\Sistema\SisNnaj;

use App\Traits\DatatableTrait;

use Illuminate\Http\Request;


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


    public function listaOdontologia(Request $request, SisNnaj $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  VOdontologia::select([
                'v_odontologias.id',
                'v_odontologias.fecha',
                
                
                'consulta.nombre as consulta',
                'valoracion.nombre as valoracion',
                'sis_estas.s_estado',
                //'cargue.name as cargue',
                'v_odontologias.sis_esta_id',
                ])
                ->join('sis_estas', 'v_odontologias.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as consulta', 'v_odontologias.consulta_id', '=', 'consulta.id')
                ->join('parametros as valoracion', 'v_odontologias.valora_id', '=', 'valoracion.id')
             //   ->join('users as cargue', 'v_odontologias.user_id', '=', 'cargue.id')
                ->where('v_odontologias.sis_esta_id', 1)
                ->where('v_odontologias.sis_nnaj_id',$padrexxx->id);
                

            return $this->getDtMedicina($dataxxxx, $request);
        }
    }



    public function getCodigo(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [
                'codigo' => Diagnostico::where('id',$request->dataxxxx)->first()->codigo,
                'campoxxx' => '#codigo',
                'selected' => 'selected'
            ];
            return response()->json($respuest);
        }
    }

  

     


}



