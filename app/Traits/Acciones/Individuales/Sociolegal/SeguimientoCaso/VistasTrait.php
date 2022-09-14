<?php

namespace App\Traits\Acciones\Individuales\Sociolegal\SeguimientoCaso;

use App\Models\Acciones\Individuales\SocialLegal\SeguimientoCaso;
use App\Models\Acciones\Individuales\SocialLegal\TemaCaso;
use App\Models\Acciones\Individuales\SocialLegal\TipoCaso;
use App\Models\CentroZonal\CentroZonal;
use App\Models\CentroZonal\CentroZosec;

use App\Models\sistema\SisEntidadSalud;

use App\Models\Tema;
use App\Models\User;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
        $opciones['usuarioc'] = '';
        $opciones['usuarioe'] = '';
        $opciones['readchcx'] = 'readonly';
        $opciones['centrozo'] = CentroZonal::combo(true, false);
        $opciones['tipocaso'] = TipoCaso::combo(true, false);
        $opciones['temacaso'] = TemaCaso::combo(true, false);
        $opciones['centrose'] = CentroZosec::combo(true, false);
        $opciones['seguimie'] = SeguimientoCaso::combo(true, false);
        
        $opciones['condicio'] = Tema::combo(23, true, false);
        $opciones['dependen'] = $this->getUpisNnajUsuarioCT(['nnajidxx' => $opciones['padrexxx']->nnaj->id, 'dependid' => $dependid]);
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['minimoxx'] = Carbon::today()->subDays(3)->isoFormat('YYYY-MM-DD');
        $opciones['sujetoxx'] = Tema::comboAsc(450,true, false);
        $opciones['estadcas'] = Tema::comboAsc(452,true, false);
        $opciones['condicio'] = Tema::comboAsc(345, true, false);
        $opciones['usuarioz'] = User::getUsuario(false, false);

   
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $usuarioz=null;
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
            $opciones['dependen'] = $this->getUpisNnajUsuarioCT(['nnajidxx' => $dataxxxx['modeloxx']->casojur->nnaj->id, 'dependid' => $dependid]);
            $opciones['padrexxx']=[$dataxxxx['modeloxx']];
            $opciones['padrexxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $opciones['usuarioc'] = $dataxxxx['modeloxx']->creador->name;
            $opciones['usuarioe'] = $dataxxxx['modeloxx']->modifico->name;
            $usuarioz=$dataxxxx['modeloxx']->user_id;
        }
        $opciones['usuarioz'] = User::getUsuario(false, false, $usuarioz);



       

        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        $opciones=$this->getTablas($vercrear);


        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }



}


