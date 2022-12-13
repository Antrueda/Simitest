<?php

namespace App\Traits\Acciones\Individuales\Emprender\Egreso;


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
        $opciones['actuestu'] = Tema::combo(23, true, false);
        $opciones['condicio'] = Tema::combo(23, true, false);
        $opciones['motvincu'] = Tema::comboAsc(63, false, false);
        $opciones['natuenti'] = Tema::comboAsc(130, true, false);
        $opciones['jornestu'] = Tema::comboAsc(151, true, false);
        $opciones['ulnivest'] = Tema::comboAsc(153, true, false);
        $opciones['ulgradap'] = Tema::comboAsc(154, true, false);
        $opciones['condicio'] = Tema::combo(23, true, false);
        if ($opciones['usuariox']->prm_tipoblaci_id == 650) {
            $opciones['readchcx'] = 'readonly';
            $opciones['residees'] = [235 => 'N/A'];
            $opciones['localida'] = [22 => 'N/A'];
            $opciones['upzxxxxx'] = [119 => 'N/A'];
            $opciones['barrioxx'] = [1653 => 'N/A'];
            
            $opciones['tiporesi'] = Tema::combo(145, true, false);
        } else {
            $opciones['tiporesi'] = Tema::combo(34, true, false);
        }
        $opciones['dependen'] = $this->getUpiUsuarioCT(['nnajidxx' => $opciones['padrexxx']->id, 'dependid' => $dependid]);
        $upinnajx=$opciones['padrexxx']->UpiPrincipal->sis_depen;
        $opciones['depenori'] = [$upinnajx->id=>$upinnajx->nombre];
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


