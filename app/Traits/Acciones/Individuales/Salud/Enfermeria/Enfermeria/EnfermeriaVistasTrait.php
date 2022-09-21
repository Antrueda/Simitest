<?php
namespace App\Traits\Acciones\Individuales\Salud\Enfermeria\Enfermeria;


use App\Models\Sistema\SisEsta;
use App\Models\User;

use Carbon\Carbon;
use App\Models\Tema;
use App\Models\Parametro;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCuestionario;
use App\Models\AdmiActi\TiposActividad;
use App\Models\sistema\SisNnaj;
use CombosTrait;

trait EnfermeriaVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['sis_depens'] = User::getUpiUsuario(true, false);


        //MOTIVOS DE ATENCION 
             $this->opciones['prm_acti'] = $this->getTemacomboCT([
            'temaxxxx'=>456,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        

        $this->opciones['tpcursos'] = $this->getTemacomboCT([
            'temaxxxx'=>457,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['tipoacti'] = TiposActividad::combo();
        $this->opciones['convenios_progs'] = [];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        
         $this->opciones['motivoxx'] = $this->getTemacomboCT([
            'temaxxxx' => 456,
        ])['comboxxx'];

        $this->opciones['tipoaten'] = $this->getTemacomboCT([
            'temaxxxx' => 457,
        ])['comboxxx'];

        $this->opciones['prm_especial'] = $this->getTemacomboCT([
            'temaxxxx' => 458,
        ])['comboxxx'];

     


    }
    public function view( $dataxxxx)
    {
        $dependid =0;
        $upidxxxx = 0;
        $servicio = 0;
        $grupoxxx = 0;
        $gradoxxx = 0;
        $tipoacti = 0;
        $activida = 0;
        $usersele = 0;
        $cursosxx = 0;
        $prm_tipo_curso=0;
       
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania[0][2]=$dataxxxx['padrexxx'];
        $this->pestania2[0][2]=$dataxxxx['padrexxx'];
        $this->pestania2[1][4]=true;
        $this->pestania2[1][2]=$dataxxxx['padrexxx'];
        $this->pestania3[0][4]=true;
        $this->pestania3[0][2]=$dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER REGISTRO DIARIO DE ENFERMERIA', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);
       // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->sis_nnaj_id];
            $upidxxxx = $dataxxxx['modeloxx']->sis_depen_id;
            $servicio = $dataxxxx['modeloxx']->sis_servicio_id;
            $grupoxxx = $dataxxxx['modeloxx']->prm_grupo_id;
            $gradoxxx = $dataxxxx['modeloxx']->sis_servicio_id;
            $activida = $dataxxxx['modeloxx']->actividade_id;
            $cursosxx = $dataxxxx['modeloxx']->curso_id;

            $dependid =$dataxxxx['modeloxx']->sis_depen_id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;

            $this->opciones['modeloxx']->habilidades = $dataxxxx['modeloxx']->getHabilidades();
            $this->opciones['modeloxx']->limites = $dataxxxx['modeloxx']->getLimites();
           
            $this->pestania[0][4]=true;
            $this->pestania[0][2]=$this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO CREGISTRO DIARIO DE ENFERMERIA', 'btn btn-sm btn-primary']);
            $this->opciones['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
        } 


         if ($dataxxxx['modeloxx'] != '') {
             $this->opciones['funccont']  = User::getUsuario(false, false,$dataxxxx['modeloxx']->user_fun_id);
            }else{
             $this->opciones['funccont']  = User::getUsuario(false, false);
         }


         $this->opciones['sis_servicios']  = $this->getServiciosUpiComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);

        $this->opciones['gruposxx'] = $this->getGrupoAsignar([
            'dependen' => $upidxxxx,
            'servicio' => $servicio,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'orderxxx' => 'ASC',
            'selected' => $grupoxxx
        ]);

        $this->opciones['gradosxx'] = $this->getGradoAsignar([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'orderxxx' => 'ASC',
            'dependen' => $upidxxxx,
            'servicio' => $servicio,
            'selected' => $gradoxxx
        ]);
         
         $this->opciones['sis_depens'] = $this->getUpisNnajUsuarioCT(['nnajidxx' => $dataxxxx['padrexxx']->id, 'dependid' => $dependid]);

         if ($cursosxx == 0) {
            $this->opciones['cursosxx'] =['' => 'Seleccione'];
        }else{
            $this->opciones['cursosxx'] = $this->getCursoWithTipo([
                'cabecera' => true,
                'ajaxxxxx' => false,
                'orderxxx' => 'ASC',
                'tipoCurs' => $prm_tipo_curso,
                'selected' => $cursosxx,
            ]);
        }
        

         $this->opciones['activida'] = $this->getActividadAsignar([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'orderxxx' => 'ASC',
            'dependen' => $upidxxxx,
            'tipoacti' => $tipoacti,
            'selected' => $activida
        ]);;
        
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'Enfermeria.pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function viewVer( $dataxxxx)
    {
    $dependid =0;
    //cursos de corta de larga duracion si ya tiene el curso que me permita  cursos  de formacion tecnica & cursos 
 //   $this->opciones['sis_depens'] = $this->getUpisNnajUsuarioCT($dataxxxx['padrexxx']->id);
   
    $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
    $this->pestania[0][2]=$dataxxxx['padrexxx'];
    $this->pestania2[0][2]=$dataxxxx['padrexxx'];
    $this->pestania2[1][4]=true;
    $this->pestania2[1][2]=$dataxxxx['padrexxx'];
    $this->pestania3[0][4]=true;
    $this->pestania3[0][2]=$dataxxxx['padrexxx'];

    $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A REGISTRO DIARIO DE ENFERMERIA', 'btn btn-sm btn-primary']);
    $this->getVista( $dataxxxx);
   // indica si se esta actualizando o viendo
    if ($dataxxxx['modeloxx'] != '') {
        $this->opciones['parametr']=[$dataxxxx['modeloxx']->sis_nnaj_id];
        $dependid =$dataxxxx['modeloxx']->sis_depen_id;
        $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
        $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
        $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
        $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
        $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;

       
        $this->pestania[0][4]=true;
        $this->pestania[0][2]=$this->opciones['parametr'];
        $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO REGISTRO DIARIO DE ENFERMERIA', 'btn btn-sm btn-primary']);
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
    return view($this->opciones['rutacarp'] . 'Enfermeria.pestanias', ['todoxxxx' => $this->opciones]);
   
    }


    public function viewSimple( $dataxxxx)
    {
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania2[0][2]=$dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A REGISTRO DIARIO DE ENFERMERIA', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);

        // indica si se esta actualizando o viendo
        $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
        $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
        $this->pestania[0][2]=$dataxxxx['padrexxx'];
        $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO REGISTRO DIARIO DE ENFERMERIA', 'btn btn-sm btn-primary']);
   
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'Enfermeria.pestanias', ['todoxxxx' => $this->opciones]);
    }
}






