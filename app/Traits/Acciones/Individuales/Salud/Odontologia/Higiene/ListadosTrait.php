<?php

namespace App\Traits\Acciones\Individuales\Salud\Odontologia\Higiene;



use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Salud\Odontologia\Superficie;
use App\Models\Acciones\Individuales\Salud\Odontologia\VHigiene;
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
            //$request->botonesx = $this->opciones['rutacarp'] .
            //$this->opciones['carpetax'] . '.Botones.quitarnnaj';
             $request->botonesx = $this->opciones['rutacarp'] .
                 $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  VHigiene::select([
                'v_higienes.id',
                'v_higienes.diente',
                'super.nombre as super',
                'diag.nombre as diag',
                'sis_estas.s_estado',
                'v_higienes.sis_esta_id',
                ])
                ->join('v_odontologias', 'v_higienes.odonto_id', '=', 'v_odontologias.id')
                ->join('sis_estas', 'v_higienes.sis_esta_id', '=', 'sis_estas.id')
                ->join('diagnosticos as diag', 'v_higienes.diag_id', '=', 'diag.id')
                ->join('superficies as super', 'v_higienes.super_id', '=', 'super.id')
                ->where('v_higienes.sis_esta_id', 1)
                ->where('v_higienes.odonto_id',$padrexxx->id);
                

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
        $higiene =[1067,397,398,1045,1036];
        $diente =VHigiene::select([
            'v_higienes.diag_id',
            ])
            ->where('v_higienes.sis_esta_id', 1)
            ->where('v_higienes.diente', $dataxxxx['tipocurs'])
            ->where('v_higienes.odonto_id',$dataxxxx['padrexxx'])->get();

        $dataxxxx['dataxxxx'] = Diagnostico::select(['diagnosticos.id as valuexxx', 'diagnosticos.nombre as optionxx'])
            ->whereNotIn('diagnosticos.id', $diente)
            ->whereIn('diagnosticos.id',$higiene)
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



