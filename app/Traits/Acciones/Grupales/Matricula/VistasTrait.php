<?php

namespace App\Traits\Acciones\Grupales\Matricula;

use App\Models\Parametro;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisEntidad;
use App\Models\Sistema\SisEsta;
use app\Models\sistema\SisServicio;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Combos\CombosTrait;
use Carbon\Carbon;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    use CombosTrait;
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    public function getVista($opciones, $dataxxxx)
    {
       $opciones['grupoxxx'] = $this->getTemacomboCT([
            'temaxxxx' => 407,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
       $opciones['gradoxxx'] = $this->getTemacomboCT([
            'temaxxxx' => 406,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        
       $opciones['periodox'] = $this->getTemacomboCT([
            'temaxxxx' => 408,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        
       $opciones['estrateg'] = $this->getTemacomboCT([
            'temaxxxx' => 409,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $opciones['dependen'] = User::getUpiUsuario(true, false);
        
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
        $upidxxxx = 0;
        $opciones['areaxxxx'] = User::getAreasUser(['cabecera' => true, 'esajaxxx' => false]);
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['entidadx'] = SisEntidad::combo(true, false);
        $opciones['condicio'] = Tema::combo(23, true, false);
        $opciones['condixxx'] = Tema::combo(272, false, false);
        $opciones['dependen'] = User::getUpiUsuario(true, false);
        $opciones['usuarioz'] = User::getUsuario(false, false);
        $opciones['usuariox'] = User::Combo(false, false,[1]);
        $opciones['responsa'] = ['' => 'Seleccione la UPI/Dependencia para cargar el responsable'];
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
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $opciones['usuariox'] = User::getRes(false, false,$dataxxxx['modeloxx']->user_doc2_id);

            if ($dataxxxx['modeloxx']->sis_depdestino_id == 1) {
                $opciones['lugarxxx'] = Tema::combo(336, true, false);
            }

        }
       $opciones['sis_servicios']  = $this->getServiciosUpiComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);
        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        $opciones=$this->getTablas($vercrear);






        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
