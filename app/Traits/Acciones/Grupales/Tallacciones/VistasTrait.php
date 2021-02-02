<?php

namespace App\Traits\Acciones\Grupales\Tallacciones;

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
        $opciones['fosareas'] = User::getAreasUser(['cabecera' => true, 'esajaxxx' => false]);
        $opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $opciones['rutarchi'] = $opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $opciones['formular'] = $opciones['rutacarp'] . $opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $opciones['ruarchjs'] = [
            ['jsxxxxxx' => $opciones['rutacarp'] . $opciones['carpetax'] . '.Js.js']
        ];
        return $opciones;
    }
    public function view($opciones, $dataxxxx)
    {

        $opciones['areaxxxx'] = User::getAreasUser(['cabecera' => true, 'esajaxxx' => false]);
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['entidadx'] = SisEntidad::combo(true, false);
        $opciones['dependen'] = User::getUpiUsuario(true, false);
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
            $opciones['agtemaxx'] = Area::combo_temas(['cabecera' => true, 'ajaxxxxx' => false, 'areaxxxx' => $dataxxxx['modeloxx']->area_id]);
            $opciones['tallerxx'] = AgTema::combo_talleres(['cabecera' => true, 'ajaxxxxx' => false, 'agtemaid' => $dataxxxx['modeloxx']->ag_tema_id]);
            $agtaller = AgTaller::combo_subtemas(['cabecera' => true, 'ajaxxxxx' => false, 'agtaller' => $dataxxxx['modeloxx']->ag_taller_id]);
            if (count($agtaller) == 1) {
                $opciones['subtemax'] = [1=>'N/A'];
            }
            if ($dataxxxx['modeloxx']->sis_depdestino_id == 1) {
                $opciones['lugarxxx'] = Tema::combo(336, true, false);
            }
            $opciones['tablinde']=false;
            $opciones=$this->getTablas($opciones);
        }



        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
