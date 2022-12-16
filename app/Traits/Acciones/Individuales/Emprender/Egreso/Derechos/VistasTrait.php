<?php

namespace App\Traits\Acciones\Individuales\Emprender\Egreso\Derechos;


use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remiespecial;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remision;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisDepartam;
use App\Models\sistema\SisEntidadSalud;
use App\Models\sistema\SisLocalidad;
use App\Models\Sistema\SisMunicipio;
use App\Models\sistema\SisPai;
use App\Models\sistema\SisUpz;
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
        $opciones['residenc'] = $opciones['padrexxx']->FiResidencia;

        $dependid = 0;
        $localida = 0;

        $opciones['fechcrea'] = '';
        $opciones['fechedit'] = '';
        $opciones['estafili'] = Tema::comboAsc(21, true, false);
        $opciones['entid_id'] = ['' => 'Seleccione'];
        $opciones['condicio'] = Tema::combo(23, true, false);
        $opciones['actuestu'] = Tema::combo(23, true, false);
        $opciones['motvincu'] = Tema::comboAsc(63, false, false);
        $opciones['natuenti'] = Tema::comboAsc(130, true, false);
        $opciones['jornestu'] = Tema::comboAsc(151, true, false);
        $opciones['ulnivest'] = Tema::comboAsc(153, true, false);
        $opciones['ulgradap'] = Tema::comboAsc(154, true, false);
        $opciones['violvinc'] = Tema::combo(369, true, false);
        $opciones['violries'] = Tema::combo(370, true, false);
        $opciones['condnoap'] = Tema::combo(373, true, false);
        $opciones['actupard'] = Tema::combo(368, true, false);
        $opciones['actusrpa'] = Tema::combo(371, true, false);
        $opciones['condicio'] = Tema::combo(372, true, false);//N/A
        $opciones['estaspoa'] = Tema::combo(374, true, false);//N/A
        $opciones['actuspoa'] = Tema::combo(376, true, false);//N/A
        $opciones['condspoa'] = Tema::combo(375, true, false);//N/A
        $opciones['motipard'] = Tema::combo(45, true, false);
        $opciones['motisrpa'] = Tema::combo(46, true, false);
        $opciones['sancsrpa'] = Tema::combo(47, true, false);
        $opciones['motispoa'] = Tema::combo(357, true, false);
        $opciones['sancspoa'] = Tema::combo(49, true, false);
        $opciones['causviol'] = Tema::combo(120, true, false);
        $opciones['sexoxxxx'] = Tema::combo(11, true, false);
        // $opciones['tablname'] = 'jrfamili';
        $opciones['vincviol'] = Tema::combo(120, false, false);
        $opciones['riesviol'] = Tema::combo(120, false, false);
        $opciones['titipard'] = Tema::combo(152, true, false);
        $opciones['titisrpa'] = Tema::combo(152, true, false);
        $opciones['titispoa'] = Tema::combo(152, true, false);
        


        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['minimoxx'] = Carbon::today()->subDays(3)->isoFormat('YYYY-MM-DD');
        $opciones['consulta'] = Tema::comboNotIn(480,true, false,[1689,2974,2804,1332]);
      //  ddd($opciones['usuariox']->NnajDocu->prm_tipodocu_id);
        $opciones['modalxxx'] = Tema::comboNotIn(480,true, false,[2973,1385]);
        
        $usuarioz=null;
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        if ($dataxxxx['modeloxx'] != '') {
            
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
            $this->opciones['entid_id'] = SisEntidadSalud::combo($dataxxxx['modeloxx']->i_prm_tentidad_id, true, false);
      
        
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


