<?php

namespace App\Traits\Acciones\Grupales\Salidamayores;

use App\Models\Acciones\Grupales\AgSubtema;
use App\Models\Acciones\Grupales\AgTaller;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\Indicadores\Area;
use App\Models\Parametro;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisEntidad;
use App\Models\Sistema\SisEsta;
use App\Models\Tema;
use App\Models\User;

use Carbon\Carbon;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    public function getVista($opciones, $dataxxxx)
    {
        $opciones['fosareas'] = Area::comb(true, false);
        $opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $opciones['rutarchi'] = $opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $opciones['formular'] = $opciones['rutacarp'] . $opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $opciones['ruarchjs'] = [
            ['jsxxxxxx' => $opciones['rutacarp'] . $opciones['carpetax'] . '.Js.js']
        ];
        return $opciones;
    }
    public function tabla($dataxxxx){

        $vercrear=false;
        if($dataxxxx['modeloxx']!=null){
            $vercrear=true;
        }
        $dataxxxx['tablasxx'][] =
            [
                'titunuev' => 'AGREGAR JOVENES',
                'titulist' => 'BENEFICIARIOS ASOCIADOS',
                'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.index',
                'titupreg' => '',
                'vercrear' => $vercrear,
                'urlxxxxx' => route($dataxxxx['routxxxx'] . '.salidajovenes', $dataxxxx['modeloxx']->id), // $this->opciones["urlxxxas"] = 'api/ag/asistentes';
                'permtabl' => [
                    $dataxxxx['permisox'] . '-leer',
                    $dataxxxx['permisox'] . '-crear',
                    $dataxxxx['permisox'] . '-editar',
                    $dataxxxx['permisox'] . '-borrar',
                    $dataxxxx['permisox'] . '-activar',
                ],
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablejovenes',
                'permisox' => $dataxxxx['permisox'],
                'routxxxx' => 'salidajovenes',
                'parametr' => [$dataxxxx['modeloxx']->id],
            ];        
     

    $dataxxxx['ruarchjs'][] =['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla'];
    return $dataxxxx;
    
    }

    public function view($opciones, $dataxxxx)
    {

        $opciones['areaxxxx'] = User::getAreasUser(['cabecera' => true, 'esajaxxx' => false]);
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['entidadx'] = SisEntidad::combo(true, false);
        $opciones['condicio'] = Tema::combo(23, true, false);
        $opciones['condixxx'] = Tema::combo(272, false, false);
        $opciones['dependen'] = User::getUpiUsuario(true, false);
        $opciones['usuarioz'] = User::getUsuario(false, false);
        $opciones['responsa'] = ['' => 'Seleccione'];
        $opciones['dependen'] = User::getDependenciasUser(['cabecera' => true, 'esajaxxx' => false]);
        $opciones['upidepen'] = SisDepen::combo(true, false);
        $opciones['agtemaxx'] = ['' => 'Seleccione'];
        $opciones['tallerxx'] = ['' => 'Seleccione'];
        $opciones['lugarxxx'] =  Parametro::find(235)->combo;
        $opciones['subtemax'] = [1=>'N/A'];
        $opciones['archivox']='';
        $opciones['dirigido'] = Tema::combo(285, true, false);
        $opciones = $this->getVista($opciones, $dataxxxx);
        
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        if ($dataxxxx['modeloxx'] != '') {
            foreach (explode('/', $dataxxxx['modeloxx']->s_doc_adjunto) as $value) {
                $opciones['archivox'] = $value;
            }
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;

            $opciones['areaxxxx'] = User::getAreasUser(['cabecera' => true, 'esajaxxx' => false, 'areasele' => $dataxxxx['modeloxx']->area_id]);
           
            if ($dataxxxx['modeloxx']->sis_depdestino_id == 1) {
                $opciones['lugarxxx'] = Tema::combo(336, true, false);
            }
         
        }

        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        $opciones=$this->getTablas($vercrear);


        



        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
