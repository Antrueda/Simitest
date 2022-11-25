<?php

namespace App\Traits\Acciones\Individuales\Salud\Odontologia\Higiene;

use App\Models\Acciones\Individuales\Salud\Odontologia\TipoSuper;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remiespecial;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remision;

use App\Models\sistema\SisEntidadSalud;

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
        
        $opciones['rutarchi'] = $opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $opciones['formular'] = $opciones['rutacarp'] . $opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
 
        $opciones['ruarchjs'] = [
            ['jsxxxxxx' => $opciones['rutacarp'] . $opciones['carpetax'] . '.Js.js']
        ];
        return $opciones;
    }
  

    public function view($opciones, $dataxxxx)
    {
        
        $dependid = 0;
        $opciones['fechcrea'] = '';
        $opciones['fechedit'] = '';
        $opciones['condicio'] = Tema::comboNotIn(23, true, false,[2503]);        
        $opciones['superfic'] = TipoSuper::combo( true, false);    
        $opciones['dientesx'] = [];
        for ($i = 11; $i <= 18; $i++) {
            $opciones['dientesx'][$i] = $i;
        }

        for ($i = 21; $i <= 28; $i++) {
            $opciones['dientesx'][$i] = $i;
        }

        for ($i = 31; $i <= 38; $i++) {
            $opciones['dientesx'][$i] = $i;
        }

        for ($i = 41; $i <= 48; $i++) {
            $opciones['dientesx'][$i] = $i;
        }

        for ($i = 51; $i <= 55; $i++) {
            $opciones['dientesx'][$i] = $i;
        }

        for ($i = 61; $i <= 65; $i++) {
            $opciones['dientesx'][$i] = $i;
        }

        for ($i = 71; $i <= 75; $i++) {
            $opciones['dientesx'][$i] = $i;
        }

        for ($i = 81; $i <= 85; $i++) {
            $opciones['dientesx'][$i] = $i;
        }


        $opciones['diagnost'] = [''=>'Seleccione'];   

        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        if ($dataxxxx['modeloxx'] != '') {
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
        }

        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        $opciones=$this->getTablas($vercrear);


        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }



}


