<?php

namespace App\Traits\Acciones\Individuales\Salud\Odontologia\Remision;



use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Salud\Odontologia\OdonDiag;
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


    public function ListaDiagnosticos(Request $request, SisNnaj $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  OdonDiag::select([
                'odon_diags.id',
                'tipo.nombre as tipo',
                'diag.nombre as diag',
                'odon_diags.codigo',
                'sis_estas.s_estado',
                'odon_diags.sis_esta_id',
            ])
                ->join('sis_estas', 'odon_diags.sis_esta_id', '=', 'sis_estas.id')
                ->join('diagnosticos as diag', 'odon_diags.diag_id', '=', 'diag.id')
                ->join('parametros as tipo', 'odon_diags.tipodiag', '=', 'tipo.id')

                ->where('odon_diags.sis_esta_id', 1)
                ->where('odon_diags.odonto_id', $padrexxx->id);


            return $this->getDtMedicina($dataxxxx, $request);
        }
    }


    public function getDiagnosticoTp($dataxxxx)
    {

        // $Noaplica=[1032,1040,1042,1047,1048,1058,1062,1071,1076];
        // $result = !empty(array_intersect($dataxxxx['diagnost'], $Noaplica));
        // if($result){
        //     $dataxxxx['inxxxxxx']=6;
        // }


        $dataxxxx['dataxxxx'] = Diagnostico::select(['id as valuexxx', 'nombre as optionxx'])
            ->whereIn('id', $dataxxxx['inxxxxxx'])
            ->where('sis_esta_id', '1')
            ->orderBy('id', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return    $respuest;
    }

    function getAgregar(Request $request, VOdontologia $padrexxx)
    {
        if ($request->ajax()) {
            $respuest = [];
            $dataxxxx = $request->all();
            $dataxxxx['sis_esta_id'] = 1;
            OdonDiag::transaccion($dataxxxx, '');
            return response()->json($respuest);
        }
    }

    public function getQuitar(Request $request, VOdontologia $padrexxx)
    {
        if ($request->ajax()) {
            $respuest = [];
            $dataxxxx = $request->all();
            OdonDiag::delete($dataxxxx,'');
            return response()->json($respuest);
        }
    }

    public function getDiagnostico(Request $request)
    {

        switch (true) {
            case ($request->upixxxxx == 1160):
                $dataxxxx = [
                    'cabecera' => true,
                    'ajaxxxxx' => true,
                    'padrexxx' => true,
                    'inxxxxxx' => [1077,1078],
                    'selected' => $request->selected,
                    'orderxxx' => 'ASC',
                    'diagnost' => $request->upixxxxx,
                ];
                break;
            case ($request->upixxxxx == 1161):
                $dataxxxx = [
                    'cabecera' => true,
                    'ajaxxxxx' => true,
                    'padrexxx' => true,
                    'inxxxxxx' => [1079,1080,391,1081,1082],
                    'selected' => $request->selected,
                    'orderxxx' => 'ASC',
                    'diagnost' => $request->upixxxxx,
                ];
                break;
            case ($request->upixxxxx == 1159):
                $dataxxxx = [
                    'cabecera' => true,
                    'ajaxxxxx' => true,
                    'padrexxx' => true,
                    'inxxxxxx' => [1083,1084,1085,1086,1087,395,396],
                    'selected' => $request->selected,
                    'orderxxx' => 'ASC',
                    'diagnost' => $request->upixxxxx,
                ];
                break;
            case ($request->upixxxxx == 1160):
                $dataxxxx = [
                    'cabecera' => true,
                    'ajaxxxxx' => true,
                    'padrexxx' => true,
                    'inxxxxxx' => [1, 2, 3, 4, 5],
                    'selected' => $request->selected,
                    'orderxxx' => 'ASC',
                    'diagnost' => $request->upixxxxx,
                ];
                break;

            case ($request->upixxxxx == 1160):
                $dataxxxx = [
                    'cabecera' => true,
                    'ajaxxxxx' => true,
                    'padrexxx' => true,
                    'inxxxxxx' => [1, 2, 3, 4, 5],
                    'selected' => $request->selected,
                    'orderxxx' => 'ASC',
                    'diagnost' => $request->upixxxxx,
                ];
                break;
        }

        $dataxxxx['cabecera'] = $request->cabecera;

        $respuest = response()->json($this->getDiagnosticoTp($dataxxxx));
        return $respuest;
    }




    public function getCodigo(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [
                'codigo' => Diagnostico::where('id', $request->dataxxxx)->first()->codigo,
                'campoxxx' => '#codigo',
                'selected' => 'selected'
            ];
            return response()->json($respuest);
        }
    }
}
