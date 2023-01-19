<?php

namespace App\Traits\Acciones\Grupales\Sena\Inscripcion;

use App\Models\Acciones\Grupales\InscripcionConvenios\Convenio;
use App\Models\Acciones\Grupales\InscripcionConvenios\Modalidad;
use App\Models\Acciones\Grupales\InscripcionConvenios\Programa;
use App\Models\Acciones\Grupales\InscripcionConvenios\SedeCentro;
use App\Models\Acciones\Grupales\InscripcionConvenios\Tipoprograma;
use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use App\Models\Sistema\SisEntidad;
use App\Models\Sistema\SisEsta;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Combos\CombosTrait;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    use CombosTrait;

    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    public function getVista($opciones, $dataxxxx)
    {
        $opciones['grupoxxx'] = ['' => 'Seleccione'];
        $opciones['gradoxxx'] = ['' => 'Seleccione'];
        $opciones['periodox'] =Tema::comboAsc(408, true, false);
        $opciones['estrateg'] = Tema::comboAsc(409, true, false);
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

//
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $dependid = 0;
        $opciones['convenio'] = Convenio::combo(true,false);
        $opciones['sedecent'] = SedeCentro::combo(true,false);
        $opciones['programa'] = Programa::combo(true,false);
        $opciones['tipoprog'] = Tipoprograma::combo(true,false);
        $opciones['modalida'] = Modalidad::combo(true,false);
        $opciones['dependen'] = $this->getUpiUsuarioCT(['modeloxx' => $dependid, 'modeloxx' => $dependid]);
        $opciones['usuariox'] = ['' => 'Seleccione la UPI/Dependencia para cargar el responsable'];

        $opciones = $this->getVista($opciones, $dataxxxx);
        $opciones['usuarioz'] = User::getUsuario(false, false);
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        $usuarioz=null;
        if ($dataxxxx['modeloxx'] != '') {
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $dependid = $dataxxxx['modeloxx']->upi_id;
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
            $dataxxxx['modeloxx']->fecha_inicio = explode(' ', $dataxxxx['modeloxx']->fecha_inicio)[0];
            $dataxxxx['modeloxx']->fecha_final = explode(' ', $dataxxxx['modeloxx']->fecha_final)[0];

            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $usuarioz=$dataxxxx['modeloxx']->user_id;


        }
  
        // $opciones['dependen'] = User::getUpiUsuario(true, false);
        $opciones['usuarioz'] = User::getUsuario(false, false, $usuarioz);
      


    


        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        $opciones=$this->getTablas($vercrear);






        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}

