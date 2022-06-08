<?php

namespace App\Traits\Direccionamiento;

use App\Models\sistema\SisDepen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AjaxTrait
{
       /**
     * combo para el responsable de la upi
     *
     * @param Request $request
     * @return string $respuest
     */
    public function getResponsableUpiAT(Request $request)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => false,
            'ajaxxxxx' => true,
            'whereinx' => [$request->padrexxx]
        ];
        $respuest = response()->json($this->getResponsableUpiCT($dataxxxx));
        return $respuest;
    }
    /**
     * combo para los servicios de la upi
     *
     * @param Request $request
     * @return string $respuest
     */
    public function getServiciosUpiAT(Request $request)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => true,
            'ajaxxxxx' => true,
            'entidadx' => $request->padrexxx
        ];
        $respuest = response()->json($this->getServiciosEntidadComboCT($dataxxxx));
        return $respuest;
    }

    public function getUpiArea(Request $request)
    {
     
        if ($request->ajax()) {
            $upisxxx = $this->getSisDepenUsuarioCT([
                'cabecera' => true,
                'ajaxxxxx' => true,
                'campoxxx' => 'sis_depens.id',
                'orderxxx' => 'ASC',
                'selected' => $request->selected,

            ]);
            if ($request->padrexxx == 9) {

                $upisxxx = $this->getSisDepenComboAreaCT([
                    'cabecera' => true,
                    'ajaxxxxx' => true,
                    'campoxxx' => 'id',
                    'orderxxx' => 'ASC',
                    'inxxxxxx' => [775],
                    'selected' => $request->selected,

                ]);
            }else{
                if ($request->padrexxx == 2|| $request->padrexxx == 3) {
                    $upisxxx = $this->getSisDepenComboAreaCT([
                        'cabecera' => true,
                        'ajaxxxxx' => true,
                        'campoxxx' => 'id',
                        'orderxxx' => 'ASC',
                        'inxxxxxx' => [2689],
                        'selected' => $request->selected,
    
                    ]);
                }else{
                    $upisxxx = $this->getSisDepenUsuarioCT([
                        'cabecera' => true,
                        'ajaxxxxx' => true,
                        'campoxxx' => 'sis_depens.id',
                        'orderxxx' => 'ASC',
                        'selected' => $request->selected,
        
                    ]);
                }
            }

            return response()->json($upisxxx);
        }
    }

    public function getSisDepenComboAreaCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = SisDepen::whereIn('i_prm_tdependen_id',$dataxxxx['inxxxxxx'])
            ->where('sis_esta_id', 1)
            ->orderby($dataxxxx['campoxxx'],$dataxxxx['orderxxx'])
            ->get(['sis_depens.nombre as optionxx', 'sis_depens.id as valuexxx']);
        $respuest = ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
        return $respuest;
    }


    public function getSisDepenUsuarioCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = SisDepen::where('sis_depen_user.sis_esta_id',1)
            ->join('sis_depen_user', 'sis_depens.id', '=', 'sis_depen_user.sis_depen_id')
            ->where('sis_depen_user.user_id', Auth::user()->id)
            ->orderby('sis_depens.id',$dataxxxx['orderxxx'])
            ->get(['sis_depens.nombre as optionxx', 'sis_depens.id as valuexxx']);


        $respuest = ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
        return $respuest;
    }

    public function getAreas(Request $request)
    {
        if ($request->ajax()) {

            $dataxxxx = [
                'funccont' => ['userr_doc',  []],
             ];

            $dataxxxx['funccont'][1] = User::userComboArea(['cabecera' => true, 'ajaxxxxx' => true, 'areaxxxx' => $request->padrexxx, 'notinxxx' => 0, ]);
         
            return response()->json($dataxxxx);
        }
    }


  
}
