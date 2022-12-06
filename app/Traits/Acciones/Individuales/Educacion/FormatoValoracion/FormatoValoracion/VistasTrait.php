<?php

namespace App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\FormatoValoracion;

use App\Models\Acciones\Grupales\Educacion\GrupoMatricula;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Modulo;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Parametro;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Sistema\SisDepen;

use App\Models\Sistema\SisEsta;
use App\Models\Sistema\SisServicio;
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
    public function getNnajSimi($dataxxxx)
    {
        
        
        if ($dataxxxx->simianti_id < 1) {
            $simianti = GeNnajDocumento::where('numero_documento',$dataxxxx->fi_datos_basico->nnaj_docu->s_documento)->first();
            
            if($simianti!=null){
            $dataxxxx->update([
                'simianti_id' => $simianti->id_nnaj,
                'usuario_insercion' => Auth::user()->s_documento,
            ]);
            $dataxxxx->simianti_id = $simianti->id_nnaj;
         
            }
        }
        return $dataxxxx;
    }


    public function view($opciones, $dataxxxx)
    {
        
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['minimoxx'] = Carbon::today()->subDays(3)->isoFormat('YYYY-MM-DD');
        $opciones['tipocurs'] = Tema::comboAsc(411,true, false);
        $opciones['cursosxz'] = MatriculaCurso::combonnaj(true,false,$opciones['padrexxx']->id);
        $opciones['cursosxx'] = Curso::comboin(true,false,$opciones['cursosxz']);
        $opciones['moduloxx'] = Modulo::comboasignar(['cabecera' => true, 'ajaxxxxx' => false]);
        $opciones['apoyoxxx'] = User::userComboRol(['cabecera' => true, 'ajaxxxxx' => false,'notinxxx' => 0, 'rolxxxxx' => [14,81]]);
        $opciones['trasladx'] = Tema::combo(393, true, false);
        $opciones['condixxx'] = Tema::combo(373, true, false);
        $opciones['grupoxxx'] = GrupoMatricula::combo(true,false);
    
   


        $opciones['usuarioz'] = User::getUsuario(false, false);

        $opciones['document'] = Auth::user()->s_documento;
        $opciones['cargoxxx'] = Auth::user()->sis_cargo->s_cargo;
        $opciones['lugarxxx'] =  Parametro::find(235)->combo;
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        $usuarioz=null;
        if ($dataxxxx['modeloxx'] != '') {
        
          
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
          
            $opciones['moduloxx'] = Modulo::combo(['cabecera' => true, 'ajaxxxxx' => false, 'cursoxxx' => $dataxxxx['modeloxx']->cursos_id]);
 
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            
            


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

