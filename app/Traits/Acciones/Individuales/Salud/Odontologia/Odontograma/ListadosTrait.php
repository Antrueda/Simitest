<?php

namespace App\Traits\Acciones\Individuales\Salud\Odontologia\Odontograma;



use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Salud\Odontologia\VOdontograma;
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

    public function listaDientes(Request $request, VOdontologia $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  VOdontograma::select([
                'v_odontogramas.id',
                'v_odontologias.id',
                'v_odontogramas.diente',
                'diag.nombre as diag',
                'sis_estas.s_estado',
                
                'v_odontogramas.sis_esta_id',
                ])
                ->join('v_odontologias', 'v_odontogramas.odonto_id', '=', 'v_odontologias.id')
                ->join('sis_estas', 'v_odontogramas.sis_esta_id', '=', 'sis_estas.id')
                ->join('diagnosticos as diag', 'v_odontogramas.diag_id', '=', 'diag.id')
                ->where('v_odontogramas.sis_esta_id', 1)
                ->where('v_odontogramas.odonto_id',$padrexxx->id);
                

            return $this->getDtMedicina($dataxxxx, $request);
        }
    }
    function getAgregar(Request $request, VOdontologia $padrexxx)
    {
        if ($request->ajax()) {
            $respuest = [];
            $dataxxxx = $request->all();
          
            $dataxxxx['odonto_id'] = $padrexxx->id;
            $dataxxxx['sis_esta_id'] = 1;
            VOdontograma::transaccion($dataxxxx, '');
            return response()->json($respuest);
        }
    }

    public function getQuitar(Request $request, VOdontologia $padrexxx)
    {
        if ($request->ajax()) {
            $respuest = [];
            $dataxxxx = $request->all();
            $dataxxxx['ag_actividad_id'] = $padrexxx->id;
            $dataxxxx['sis_esta_id'] = 0;
            VOdontograma::transaccion($dataxxxx, '');
            return response()->json($respuest);
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



