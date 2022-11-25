<?php

namespace App\Traits\Acciones\Individuales\Salud\Odontologia\Odontograma;



use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Salud\Odontologia\Superficie;
use App\Models\Acciones\Individuales\Salud\Odontologia\TipoSuper;
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
                'cargue.name as cargue',
                'v_odontologias.sis_esta_id',
                ])
                ->join('sis_estas', 'v_odontologias.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as consulta', 'v_odontologias.consulta_id', '=', 'consulta.id')
                ->join('parametros as valoracion', 'v_odontologias.valora_id', '=', 'valoracion.id')
                ->join('users as cargue', 'v_odontologias.user_id', '=', 'cargue.id')
                ->where('v_odontologias.sis_esta_id', 1)
                ->where('v_odontologias.sis_nnaj_id',$padrexxx->id);
                

            return $this->getDtMedicina($dataxxxx, $request);
        }
    }

    public function listaDientes(Request $request, VOdontologia $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            //$request->botonesx = $this->opciones['rutacarp'] .
            //$this->opciones['carpetax'] . '.Botones.quitarnnaj';
             $request->botonesx = $this->opciones['rutacarp'] .
                 $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  VOdontograma::select([
                'v_odontogramas.id',
                'v_odontogramas.diente',
                'super.nombre as super',
                'diag.nombre as diag',
                'sis_estas.s_estado',
                'v_odontogramas.sis_esta_id',
                ])
                ->join('v_odontologias', 'v_odontogramas.odonto_id', '=', 'v_odontologias.id')
                ->join('sis_estas', 'v_odontogramas.sis_esta_id', '=', 'sis_estas.id')
                ->join('diagnosticos as diag', 'v_odontogramas.diag_id', '=', 'diag.id')
                ->join('superficies as super', 'v_odontogramas.super_id', '=', 'super.id')
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
            VOdontograma::delete($dataxxxx,'');
            return response()->json($respuest);
        }
    }

    public function getSuperficieTp($dataxxxx)
    {

        $dataxxxx['dataxxxx'] = Superficie::select(['superficies.id as valuexxx', 'superficies.nombre as optionxx'])
            ->where('superficies.tiposu_id', $dataxxxx['tipocurs'])
            ->where('superficies.sis_esta_id', 1)
            ->orderBy('superficies.id', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return    $respuest;
    }


    public function getSuperficie(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'tipocurs' => $request->upixxxxx,
            
        ];
        $dataxxxx['cabecera'] = $request->cabecera;

        $respuest = response()->json($this->getSuperficieTp($dataxxxx));
        return $respuest;
    }


    public function getDiagnosticoTp($dataxxxx)
    {
        $diente =VOdontograma::select([
            'v_odontogramas.diag_id',
            ])
            ->where('v_odontogramas.sis_esta_id', 1)
            ->where('v_odontogramas.diente', $dataxxxx['tipocurs'])
            ->where('v_odontogramas.odonto_id',$dataxxxx['padrexxx'])->get();

        $dataxxxx['dataxxxx'] = Diagnostico::select(['diagnosticos.id as valuexxx', 'diagnosticos.nombre as optionxx'])
            ->whereNotIn('diagnosticos.id', $diente)
            ->where('diagnosticos.area_id', 2869)
            ->where('diagnosticos.sis_esta_id', 1)
            ->orderBy('diagnosticos.nombre', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return    $respuest;
    }


    public function getDiagnostico(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'padrexxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'tipocurs' => $request->upixxxxx,
            
        ];
        $dataxxxx['cabecera'] = $request->cabecera;

        $respuest = response()->json($this->getDiagnosticoTp($dataxxxx));
        return $respuest;
    }


    public function getTiposuperficieTp($dataxxxx)
    {
       
        // $Noaplica=[1032,1040,1042,1047,1048,1058,1062,1071,1076];
        // $result = !empty(array_intersect($dataxxxx['diagnost'], $Noaplica));
        // if($result){
        //     $dataxxxx['inxxxxxx']=6;
        // }

        
        $dataxxxx['dataxxxx'] = TipoSuper::select(['id as valuexxx', 'nombre as optionxx'])
        ->whereIn('id', $dataxxxx['inxxxxxx'])
        ->where('sis_esta_id', '1')
        ->orderBy('id', 'asc')
        ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return    $respuest;
    }


    public function getTipoSuperficie(Request $request)
    {

        $Noaplica=[1032,1040,1042,1047,1048,1058,1062,1071,1076];
        $todasxxx=[1039,1043,1045,1057,1059,1060,1061];
        $unaxxxxx=[1034,1046,1050,1056,1073,1074,1075];
        $listaxxx=[1031,1033,1035,1036,1037,1038,1041,1044,1049,1051,1052,1053,1054,1055,1063,1064,1065,1066,1067,1068,1069,1070,1072];
        $result = 
        $todas =  !empty(in_array($request->upixxxxx, $todasxxx));
        
        switch (true) {
            case !empty(in_array($request->upixxxxx, $Noaplica)):
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'padrexxx' => true,
            'inxxxxxx' => [6],
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'diagnost' => $request->upixxxxx,
        ];
     break;
     case !empty(in_array($request->upixxxxx, $todasxxx)):
                $dataxxxx = [
                    'cabecera' => true,
                    'ajaxxxxx' => true,
                    'padrexxx' => true,
                    'inxxxxxx' => [6],
                    'selected' => $request->selected,
                    'orderxxx' => 'ASC',
                    'diagnost' => $request->upixxxxx,
                ];
        break;
        case !empty(in_array($request->upixxxxx, $unaxxxxx)):
                $dataxxxx = [
                    'cabecera' => true,
                    'ajaxxxxx' => true,
                    'padrexxx' => true,
                    'inxxxxxx' => [1],
                    'selected' => $request->selected,
                    'orderxxx' => 'ASC',
                    'diagnost' => $request->upixxxxx,
                ];
        break;  
                case !empty(in_array($request->upixxxxx, $listaxxx)):
                    $dataxxxx = [
                        'cabecera' => true,
                        'ajaxxxxx' => true,
                        'padrexxx' => true,
                        'inxxxxxx' => [1,2,3,4,5],
                        'selected' => $request->selected,
                        'orderxxx' => 'ASC',
                        'diagnost' => $request->upixxxxx,
                    ];
                    break;     
                 }
 
        $dataxxxx['cabecera'] = $request->cabecera;

        $respuest = response()->json($this->getTiposuperficieTp($dataxxxx));
        return $respuest;
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



