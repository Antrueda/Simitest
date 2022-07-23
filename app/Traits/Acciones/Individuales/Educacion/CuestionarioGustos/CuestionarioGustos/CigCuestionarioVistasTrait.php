<?php
namespace App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\CuestionarioGustos;


use App\Models\Sistema\SisEsta;
use App\Models\User;

use Carbon\Carbon;
use App\Models\Tema;
use App\Models\Parametro;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCuestionario;
use App\Models\sistema\SisNnaj;
use CombosTrait;

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
        $dependid =0;
        //cursos de corta de larga duracion si ya tiene el curso que me permita  cursos  de formacion tecnica & cursos 
       // $this->opciones['sis_depens'] = $this->getUpisNnajUsuarioCT($dataxxxx['padrexxx']->id);
       
        $this->opciones['matricula_academica'] = $this->getMatriculaAcademicaNnaj($dataxxxx['padrexxx']->id);
        $this->opciones['matricula_talleres'] = $this->getMatriculaTalleresNnaj($dataxxxx['padrexxx']->id);
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania[0][2]=$dataxxxx['padrexxx'];
        $this->pestania2[0][2]=$dataxxxx['padrexxx'];
        $this->pestania2[1][4]=true;
        $this->pestania2[1][2]=$dataxxxx['padrexxx'];
        $this->pestania3[0][4]=true;
        $this->pestania3[0][2]=$dataxxxx['padrexxx'];
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A CUESTIONARIO DE GUSTOS INTERESES', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);
       $this->opciones['habilidades'] = $this->getListaHabilidades();
       $this->opciones['limites'] = $this->getListaLimites();
       // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $dependid =$dataxxxx['modeloxx']->sis_depen_id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['modeloxx']->habilidades = $dataxxxx['modeloxx']->getHabilidades();
            $this->opciones['modeloxx']->limites = $dataxxxx['modeloxx']->getLimites();

            $this->pestania[0][4]=true;
            $this->pestania[0][2]=$this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO CUESTIONARIO DE GUSTOS INTERESES', 'btn btn-sm btn-primary']);
            $this->opciones['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
        } 

         if ($dataxxxx['modeloxx'] != '') {
             $this->opciones['funccont']  = User::getUsuario(false, false,$dataxxxx['modeloxx']->user_fun_id);
         }else{
             $this->opciones['funccont']  = User::getUsuario(false, false);
         }
         $this->opciones['sis_depens'] = $this->getUpisNnajUsuarioCT(['nnajidxx' => $dataxxxx['padrexxx']->id, 'dependid' => $dependid]);

        
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'CuestionarioGustos.pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function viewVer( $dataxxxx)
    {
        $this->opciones['matricula_academica'] = $this->getMatriculaAcademicaNnaj($dataxxxx['padrexxx']->id);
        $this->opciones['matricula_talleres'] = $this->getMatriculaTalleresNnaj($dataxxxx['padrexxx']->id);

        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania[0][2]=$dataxxxx['padrexxx'];
        $this->pestania2[0][2]=$dataxxxx['padrexxx'];
        $this->pestania2[1][4]=true;
        $this->pestania2[1][2]=$dataxxxx['padrexxx'];
        $this->pestania3[0][4]=true;
        $this->pestania3[0][2]=$dataxxxx['padrexxx'];
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A CUESTIONARIO DE GUSTOS INTERESES', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);

        // indica si se esta actualizando o viendo
        $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
        $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
        $this->pestania[0][4]=true;
        $this->pestania[0][2]=$this->opciones['parametr'];
        $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A CUESTIONARIO DE GUSTOS INTERESES', 'btn btn-sm btn-primary']);
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['funccont']  = User::getUsuario(false, false,$dataxxxx['modeloxx']->user_fun_id);
        }else{
            $this->opciones['funccont']  = User::getUsuario(false, false);
        }
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'CuestionarioGustos.pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function viewSimple( $dataxxxx)
    {
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania2[0][2]=$dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A CUESTIONARIO GUSTOS INTERESES', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);

        // indica si se esta actualizando o viendo
        $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
        $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
        $this->pestania[0][4]=true;
        $this->pestania[0][2]=$this->opciones['parametr'];
        $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO CUESTIONARIO GUSTOS INTERESES', 'btn btn-sm btn-primary']);
   
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'CuestionarioGustos.pestanias', ['todoxxxx' => $this->opciones]);
    }
}






