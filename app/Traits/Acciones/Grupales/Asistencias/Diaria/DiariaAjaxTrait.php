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


    public function getServiciosUpiAT(Request $request)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => true,
            'ajaxxxxx' => true,
            'dependen' => $request->padrexxx
        ];
        $respuest = response()->json($this->getServiciosUpiComboCT($dataxxxx));
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
                $respuest = $this->getDeparMunicipio($respuest, $dependen);
                $localupz = $dependen->sisUpzbarri->sis_localupz;
                $localida = $localupz->sis_localidad;
                $respuest['combosxx'][2]['comboxxx'] = [['valuexxx' => $localida->id, 'optionxx' => $localida->s_localidad]];
                $upzxxxxx = $localupz->sis_upz;
                $respuest['combosxx'][3]['comboxxx'] = [['valuexxx' => $localupz->id, 'optionxx' => $upzxxxxx->s_upz]];
                $upzbarri = $dependen->sisUpzbarri;
                $barrioxx = $upzbarri->sis_barrio;
                $respuest['combosxx'][4]['comboxxx'] = [['valuexxx' => $upzbarri->id, 'optionxx' => $barrioxx->s_barrio]];
                break;

            case '2763': // actividades dentro de la ciudad fuera de la upi
                $respuest = $this->getDeparMunicipio($respuest, $dependen);
                $localupz = $dependen->sisUpzbarri->sis_localupz;
                $localida = $localupz->sis_localidad;
                $respuest['combosxx'][2]['comboxxx'] = $this->getLocalidadesCT([
                    'ajaxxxxx' => true,
                    'selected' => $request->selected
                ])['comboxxx'];
                $respuest['combosxx'][3]['comboxxx'] = [['valuexxx' => '', 'optionxx' => 'Seleccione', 'selected' => 'selected']];
                $respuest['combosxx'][4]['comboxxx'] = [['valuexxx' => '', 'optionxx' => 'Seleccione', 'selected' => 'selected']];
                break;
            case '2764': // fuera de la ciudad

                $respuest['combosxx'][0]['comboxxx'] = $this->getSisDepartamCT([
                    'ajaxxxxx' => true,
                    'selected' => $request->selected,
                    'padrexxx' => 2
                ])['comboxxx'];

                $respuest['combosxx'][1]['comboxxx'] = [['valuexxx' => '', 'optionxx' => 'Seleccione', 'selected' => 'selected']];

                $respuest['combosxx'][2]['comboxxx'] = [['valuexxx' => '22', 'optionxx' => 'N/A', 'selected' => 'selected']];

                $respuest['combosxx'][3]['comboxxx'] =  [['valuexxx' => '122', 'optionxx' => 'N/A', 'selected' => 'selected']];

                $respuest['combosxx'][4]['comboxxx'] =  [['valuexxx' => '1927', 'optionxx' => 'N/A', 'selected' => 'selected']];
                break;
        }
        return response()->json($respuest);
    }

    public function getUpz(Request $request)
    {
        $respuest = [
            'emptyxxx' => '#sis_upz_id',
            'combosxx' => [
                [
                    'comboxxx' => $this->getSisLocalupzCT(['ajaxxxxx' => true, 'padrexxx' => $request->padrexxx])['comboxxx'],
                    'selectid' => 'sis_upz_id'
                ],
            ]
        ];
        return response()->json($respuest);
    }

    public function getBarrio(Request $request)
    {
        $respuest = [
            'emptyxxx' => '#sis_barrio_id',
            'combosxx' => [
                [
                    'comboxxx' => $this->getSisUpzBarriCT(['ajaxxxxx' => true, 'padrexxx' => $request->padrexxx])['comboxxx'],
                    'selectid' => 'sis_barrio_id'
                ],
            ]
        ];
        return response()->json($respuest);
    }

    public function getMunicipio(Request $request)
    {
        $respuest = [
            'emptyxxx' => '#sis_municipio_id',
            'combosxx' => [
                [
                    'comboxxx' => $this->getSisMunicipioCT(['ajaxxxxx' => true, 'padrexxx' => $request->padrexxx])['comboxxx'],
                    'selectid' => 'sis_municipio_id'
                ],
            ]
        ];
        return response()->json($respuest);
    }

    public function getPaginaGrupos(Request $request)
    {
        $respuest = [
            'emptyxxx' => '#prm_grupo_id',
            'readonid' => '#numepagi',
            'readonly' => true,
            'valuexxx' => '',
            'combosxx' => [
                ['comboxxx' => [], 'selectid' => 'prm_grupo_id'],
            ]
        ];

        switch ($request->progacti) {
            case '2765': // muestra combo de grupos e inactiva páginas
                $respuest['combosxx'][0]['comboxxx'] = $this->getTemacomboCT([
                    'temaxxxx' => 430,
                    'notinxxx' => [146, 147, 294],
                    'ajaxxxxx' => true
                ])['comboxxx'];
                $respuest['readonly'] = false;
                break;
            case '2766': // activa páginas y mustrar no aplica en el combo de grupos
                $respuest['combosxx'][0]['comboxxx'] = $this->getTemacomboCT([
                    'temaxxxx' => 430,
                    'notinxxx' => [235],
                    'cabecera' => false,
                    'ajaxxxxx' => true
                ])['comboxxx'];
              
                break;
        }
        return response()->json($respuest);
    }

    public function getFechaPuede(Request $request)
    {
        $puedecar = $this->getPuedeCargar([
            'estoyenx' => 1,
            'fechregi' => date('Y-m-d'),
            'upixxxxx' => $request->dependex,
            'formular' => 2,
        ]);

        $respuest = response()->json($puedecar);
        return $respuest;
    }
}
