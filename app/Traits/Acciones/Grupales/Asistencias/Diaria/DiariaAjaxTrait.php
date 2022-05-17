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

    public function getDeparMunicipio($respuest, $dependen, $ajaxxxxx)
    {
        $departam = $dependen->sisDepartam;
        $municipi = $dependen->sisMunicipio;
        if ($ajaxxxxx) {
            $respuest['combosxx'][0]['comboxxx'] = [['valuexxx' => $departam->id, 'optionxx' => $departam->s_departamento]];
            $respuest['combosxx'][1]['comboxxx'] = [['valuexxx' => $municipi->id, 'optionxx' => $municipi->s_municipio]];
        } else {
            $respuest['combosxx'][0]['comboxxx'] = [$departam->id => $departam->s_departamento];
            $respuest['combosxx'][1]['comboxxx'] = [$municipi->id => $municipi->s_municipio];
        }

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

 

    public function setDependen($dataxxxx)
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
        $dependen = SisDepen::find($dataxxxx['dependen']);
      
        switch ($dataxxxx['lugarxxx']) {
            case '2762': // actividades dentor de la upi 
                $respuest = $this->getDeparMunicipio($respuest, $dependen, $dataxxxx['ajaxxxxx']);
                $localupz = $dependen->sisUpzbarri->sis_localupz;
                $localida = $localupz->sis_localidad;
                $upzxxxxx = $localupz->sis_upz;
                $upzbarri = $dependen->sisUpzbarri;
                $barrioxx = $upzbarri->sis_barrio;
                if ($dataxxxx['ajaxxxxx']) {
                    $respuest['combosxx'][2]['comboxxx'] = [['valuexxx' => $localida->id, 'optionxx' => $localida->s_localidad, 'selected' => 'selected']];
                    $respuest['combosxx'][3]['comboxxx'] = [['valuexxx' => $localupz->id, 'optionxx' => $upzxxxxx->s_upz, 'selected' => 'selected']];
                    $respuest['combosxx'][4]['comboxxx'] = [['valuexxx' => $upzbarri->id, 'optionxx' => $barrioxx->s_barrio, 'selected' => 'selected']];
                } else {
                    $respuest['combosxx'][2]['comboxxx'] = [$localida->id => $localida->s_localidad];
                    $respuest['combosxx'][3]['comboxxx'] = [$localupz->id => $upzxxxxx->s_upz];
                    $respuest['combosxx'][4]['comboxxx'] = [$upzbarri->id => $barrioxx->s_barrio];
                }

                break;

            case '2763': // actividades dentro de la ciudad fuera de la upi
                $respuest = $this->getDeparMunicipio($respuest, $dependen, $dataxxxx['ajaxxxxx']);
                $localupz = $dependen->sisUpzbarri->sis_localupz;
                $localida = $localupz->sis_localidad;
                $respuest['combosxx'][2]['comboxxx'] = $this->getLocalidadesCT([
                    'ajaxxxxx' => $dataxxxx['ajaxxxxx'],
                    'selected' => $dataxxxx['selected']
                ])['comboxxx'];
                if ($dataxxxx['ajaxxxxx']) {
                    $respuest['combosxx'][3]['comboxxx'] = [['valuexxx' => '', 'optionxx' => 'Seleccione', 'selected' => 'selected']];
                    $respuest['combosxx'][4]['comboxxx'] = [['valuexxx' => '', 'optionxx' => 'Seleccione', 'selected' => 'selected']];
                } else {
                    $respuest['combosxx'][3]['comboxxx'] = ['' => 'Seleccione'];
                    $respuest['combosxx'][4]['comboxxx'] = ['' => 'Seleccione'];
                }
                break;
            case '2764': // fuera de la ciudad

                $respuest['combosxx'][0]['comboxxx'] = $this->getSisDepartamCT([
                    'ajaxxxxx' => $dataxxxx['ajaxxxxx'],
                    'selected' => $dataxxxx['selected'],
                    'padrexxx' => 2
                ])['comboxxx'];
                if ($dataxxxx['ajaxxxxx']) {
                    $respuest['combosxx'][1]['comboxxx'] = [['valuexxx' => '', 'optionxx' => 'Seleccione', 'selected' => 'selected']];
                    $respuest['combosxx'][2]['comboxxx'] = [['valuexxx' => '22', 'optionxx' => 'N/A', 'selected' => 'selected']];
                    $respuest['combosxx'][3]['comboxxx'] =  [['valuexxx' => '122', 'optionxx' => 'N/A', 'selected' => 'selected']];
                    $respuest['combosxx'][4]['comboxxx'] =  [['valuexxx' => '1927', 'optionxx' => 'N/A', 'selected' => 'selected']];
                } else {
                    $respuest['combosxx'][1]['comboxxx'] = ['' => 'Seleccione'];
                    $respuest['combosxx'][2]['comboxxx'] = ['22' => 'N/A'];
                    $respuest['combosxx'][3]['comboxxx'] = ['122' => 'N/A'];
                    $respuest['combosxx'][4]['comboxxx'] = ['1927' => 'N/A'];
                }
                break;
        }
        return $respuest;
    }

    public function getDependen(Request $request)
    {
        $respuest = $this->setDependen([
            'dependen' => $request->dependen,
            'lugarxxx' => $request->lugarxxx,
            'selected' => $request->selected,
            'ajaxxxxx' => true
        ]);
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


    public function getActividad(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'tipoacti' => $request->tipoacti,
        ];
        $dataxxxx['cabecera'] = $request->cabecera;
        $respuest = response()->json($this->getActividadAsignar($dataxxxx));
        return $respuest;
    }

    public function setPaginaGrupos($dataxxxx)
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

        switch ($dataxxxx['progacti']) {
            case '2765': // muestra combo de grupos e inactiva páginas
                $respuest['combosxx'][0]['comboxxx'] = $this->getTemacomboCT([
                    'temaxxxx' => 430,
                    'cabecera' => false,
                    'notinxxx' => [146, 147, 294],
                    'ajaxxxxx' => $dataxxxx['ajaxxxxx']
                ])['comboxxx'];
                $respuest['readonly'] = false;
                break;
            case '2689': // activa páginas y mustrar no aplica en el combo de grupos 2766
                $respuest['combosxx'][0]['comboxxx'] = $this->getTemacomboCT([
                    'temaxxxx' => 430,
                    'notinxxx' => [235],
                    'ajaxxxxx' => $dataxxxx['ajaxxxxx']
                ])['comboxxx'];

                break;
        }
        return $respuest;
    }

    public function getPaginaGrupos(Request $request)
    {
        $respuest = $this->setPaginaGrupos(['progacti' => $request->progacti, 'ajaxxxxx' => true]);
        return response()->json($respuest);
    }

    public function getFechaPuede(Request $request)
    {
        $puedecar = $this->getPuedeCargar([
            'estoyenx' => 2,
            'fechregi' => date('Y-m-d'),
            'upixxxxx' => $request->dependex,
            'formular' => 2,
        ]);

        $respuest = response()->json($puedecar);
        return $respuest;
    }
}
