<?php

namespace App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCursos;


use App\Models\Parametro;
use App\Models\Sistema\SisDepen;

use App\Models\Sistema\SisEsta;
use app\Models\Sistema\SisServicio;
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
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['minimoxx'] = Carbon::today()->subDays(3)->isoFormat('YYYY-MM-DD');
        $opciones['traslado'] = Tema::comboAsc(392, true, false);
        $opciones['trasladx'] = Tema::combo(393, true, false);
        $opciones['condixxx'] = Tema::combo(373, true, false);
        $opciones['dependen'] = User::getUpiUsuario(true, false);
        $opciones['depender'] = SisDepen::combo(true, false);
        $dependen=0;
        $depender=0;


        $opciones['usuarioz'] = User::getUsuario(false, false);
        $opciones['response'] = ['' => 'Seleccione la UPI/Dependencia para cargar el responsable'];
        $opciones['responsr'] = ['' => 'Seleccione la UPI/Dependencia para cargar el responsable'];
        $opciones['document'] = Auth::user()->s_documento;
        $opciones['cargoxxx'] = Auth::user()->sis_cargo->s_cargo;
        $opciones['lugarxxx'] =  Parametro::find(235)->combo;
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
            $dependen = $dataxxxx['modeloxx']->prm_trasupi_id;
            $depender = $dataxxxx['modeloxx']->prm_upi_id;
            $opciones['tiempoxx'] = $dataxxxx['modeloxx']->upi->TrasladoAjax;
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $opciones['document'] =$dataxxxx['modeloxx']->usuariocarga->s_documento;
            $opciones['cargoxxx'] =$dataxxxx['modeloxx']->usuariocarga->sis_cargo->s_cargo;
            $opciones['usuarioz'] = User::getRes(false, false,$dataxxxx['modeloxx']->user_doc);
            $opciones['response']=  User::getRes(false, false,$dataxxxx['modeloxx']->respone_id);
            $opciones['responsr']=  User::getRes(false, false,$dataxxxx['modeloxx']->responr_id);


         }

         $opciones['servicio'] = SisServicio::getServicioDepe([
            'dependen' =>$dependen,
            'cabecera' => true,
            'ajaxxxxx' => false,
            ]);

        $opciones['cuidador'] = User::userComboRolUpi(['cabecera' => true, 'ajaxxxxx' => false,'dependen'=>$depender,'notinxxx' => 0, 'rolxxxxx' => [16, 23]]);
        $opciones['enfermer'] = User::userComboRolUpi(['cabecera' => true, 'ajaxxxxx' => false,'dependen'=>$depender, 'notinxxx' => 0, 'rolxxxxx' => [6]]);
        $opciones['docentex'] = User::userComboRolUpi(['cabecera' => true, 'ajaxxxxx' => false,'dependen'=>$depender, 'notinxxx' => 0, 'rolxxxxx' => [14]]);
        $opciones['piscoxxx'] = User::userComboRolUpi(['cabecera' => true, 'ajaxxxxx' => false,'dependen'=>$depender, 'notinxxx' => 0, 'rolxxxxx' => [4, 3, 7]]);
        $opciones['auxiliar'] = User::userComboRolUpi(['cabecera' => true, 'ajaxxxxx' => false,'dependen'=>$depender, 'notinxxx' => 0, 'rolxxxxx' => [25]]);

        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        $opciones=$this->getTablas($vercrear);


        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }



}
