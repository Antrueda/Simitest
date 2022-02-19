<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Diaria;

use App\Models\sistema\SisDepen;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DiariaAjaxTrait
{
    public function getDeparMunicipio($respuest, $dependen)
    {
        $departam = $dependen->sisDepartam;
        $respuest['combosxx'][0]['comboxxx'] = [['valuexxx' => $departam->id, 'optionxx' => $departam->s_departamento]];
        $municipi = $dependen->sisMunicipio;
        $respuest['combosxx'][1]['comboxxx'] = [['valuexxx' => $municipi->id, 'optionxx' => $municipi->s_municipio]];
        return $respuest;
    }
    public function getDependen(Request $request)
    {
        $respuest = [
            'emptyxxx' => '#sis_departam_id,#sis_municipio_id,#sis_localidad_id,#sis_upz_id,#sis_barrio_id',
            'combosxx' => [
                ['comboxxx' => [], 'selectid' => 'sis_departam_id'],
                ['comboxxx' => [], 'selectid' => 'sis_municipio_id'],
                ['comboxxx' => [], 'selectid' => 'sis_localidad_id'],
                ['comboxxx' => [], 'selectid' => 'sis_upz_id'],
                ['comboxxx' => [], 'selectid' => 'sis_barrio_id']
            ]
        ];
        $dependen = SisDepen::find($request->dependen);
        switch ($request->lugarxxx) {
            case '2762': // actividades dentor de la upi 
                $respuest=$this->getDeparMunicipio($respuest, $dependen);

                $localupz = $dependen->sisUpzbarri->sis_localupz;
                $localida = $localupz->sis_localidad;
                $respuest['combosxx'][2]['comboxxx'] = [['valuexxx' => $localida->id, 'optionxx' => $localida->s_localidad]];

                $upzxxxxx = $localupz->sis_upz;
                $respuest['combosxx'][3]['comboxxx'] = [['valuexxx' => $upzxxxxx->id, 'optionxx' => $upzxxxxx->s_upz]];

                $barrioxx = $dependen->sisUpzbarri->sis_barrio;
                $respuest['combosxx'][4]['comboxxx'] = [['valuexxx' => $barrioxx->id, 'optionxx' => $barrioxx->s_barrio]];
                break;

            case '2763': // actividades dentro de la ciudad fuera de la upi
                $respuest=$this->getDeparMunicipio($respuest, $dependen);

                $localupz = $dependen->sisUpzbarri->sis_localupz;
                $localida = $localupz->sis_localidad;
                $respuest['combosxx'][2]['comboxxx'] = $this->getLocalidadesCT([
                    'cabecera' => true,
                    'ajaxxxxx' => true,
                    
                ])['comboxxx'];

                $upzxxxxx = $localupz->sis_upz;
                $respuest['combosxx'][3]['comboxxx'] = [['valuexxx' => '', 'optionxx' => 'Seleccione']];

                $barrioxx = $dependen->sisUpzbarri->sis_barrio;
                $respuest['combosxx'][4]['comboxxx'] = [['valuexxx' => '', 'optionxx' => 'Seleccione']];

                break;
            case '2764': // fuera de la ciudad
                # code...
                break;
        }
        return response()->json($respuest);
    }
}
