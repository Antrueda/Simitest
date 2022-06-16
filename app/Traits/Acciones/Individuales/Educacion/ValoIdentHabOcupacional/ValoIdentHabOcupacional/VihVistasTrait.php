<?php

namespace App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\ValoIdentHabOcupacional;
use App\Models\Tema;
use App\Models\User;
use App\Models\Sistema\SisEsta;
use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\VihArea;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VihVistasTrait
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
        //accion
        $this->opciones['accionxx'] = $dataxxxx['accionxx'][0];

        $this->opciones['matricula_academica'] = $this->getMatriculaAcademicaNnaj($dataxxxx['padrexxx']->id);
        $this->opciones['matricula_talleres'] = $this->getMatriculaTalleresNnaj($dataxxxx['padrexxx']->id);
        $this->opciones['dinsustancias'] = Tema::combo(436, true, false);
        $this->opciones['dinamica'] = Tema::comboAsc(249,true, false);
        $this->opciones['areasubs'] = VihArea::with('subareas:id,nombre,vih_area_id')->select('id','nombre')->where('sis_esta_id',1)->get();

        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania2[0][2]=$dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[0][4]=true;
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
            $this->opciones['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
        }

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['funccont']  = User::getUsuario(false, false,$dataxxxx['modeloxx']->user_fun_id);
        }else{
            $this->opciones['funccont']  = User::getUsuario(false, false);
        }
        
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . $this->opciones['carpetax']. '.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function viewVer( $dataxxxx)
    {
        $this->opciones['matricula_academica'] = $this->getMatriculaAcademicaNnaj($dataxxxx['padrexxx']->id);
        $this->opciones['matricula_talleres'] = $this->getMatriculaTalleresNnaj($dataxxxx['padrexxx']->id);
        
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania2[0][2]=$dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);

        // indica si se esta actualizando o viendo
        $this->opciones['grafica'] = $dataxxxx['modeloxx']->areasCountActividades();
        $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
        $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
        $this->pestania[0][4]=true;
        $this->pestania[0][2]=$this->opciones['parametr'];
        $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['funccont']  = User::getUsuario(false, false,$dataxxxx['modeloxx']->user_fun_id);
        }else{
            $this->opciones['funccont']  = User::getUsuario(false, false);
        }
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'PerfilVocacional.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function viewSimple( $dataxxxx)
    {
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania2[0][2]=$dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);

        // indica si se esta actualizando o viendo
        $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
        $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
        $this->pestania[0][4]=true;
        $this->pestania[0][2]=$this->opciones['parametr'];
        $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
   
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'PerfilVocacional.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
