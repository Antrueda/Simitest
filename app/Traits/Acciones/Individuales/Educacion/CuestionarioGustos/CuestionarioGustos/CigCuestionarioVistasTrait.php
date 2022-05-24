<?php
namespace App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\CuestionarioGustos;


use App\Models\Sistema\SisEsta;
use App\Models\User;

use Carbon\Carbon;
use App\Models\Tema;
use App\Models\Parametro;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCuestionario;



trait CigCuestionarioVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view( $dataxxxx)
    {

        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania2[0][2]=$dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A CUESTIONARIO DE GUSTOS INTERESES', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);

        //$this->opciones['actividades'] = $this->getActividadesPvf();

        // indica si se esta actualizando o viendo
        // if ($dataxxxx['modeloxx'] != '') {
        //     $this->opciones['grafica'] = $dataxxxx['modeloxx']->areasCountActividades();
        //     $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
        //     $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
        //     $this->opciones['modeloxx']->actividades = $dataxxxx['modeloxx']->getActividades();
        //     $this->pestania[0][4]=true;
        //     $this->pestania[0][2]=$this->opciones['parametr'];
        //     $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
        //     $this->opciones['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
        // }

         if ($dataxxxx['modeloxx'] != '') {
             $this->opciones['funccont']  = User::getUsuario(false, false,$dataxxxx['modeloxx']->user_fun_id);
         }else{
             $this->opciones['funccont']  = User::getUsuario(false, false);
         }
        
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'CuestionarioGustos.pestanias', ['todoxxxx' => $this->opciones]);
    }
}






