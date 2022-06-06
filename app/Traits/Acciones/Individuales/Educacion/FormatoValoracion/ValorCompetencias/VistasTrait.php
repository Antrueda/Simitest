<?php

namespace App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\ValorCompetencias;

use App\Models\Acciones\Grupales\Educacion\GrupoMatricula;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Denomina;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\ModuloUnidad;
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



    public function view($opciones, $dataxxxx)
    {
     
    
        $opciones['unidadxx'] = Denomina::combo(true,false,$opciones['padrexxx']->modulo_id);
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        if ($dataxxxx['modeloxx'] != '') {
            //ddd($dataxxxx['modeloxx']->cursos->curso->s_cursos);
            $opciones['unidadxx'] = ModuloUnidad::combo(['cabecera' => false, 'ajaxxxxx' => false,'seguimie'=>$dataxxxx['modeloxx']->modulo_id]);;
            //ddd($dataxxxx['modeloxx']);
            $dataxxxx['modeloxx']->conoci = $dataxxxx['modeloxx']->conocimiento ;
            $dataxxxx['modeloxx']->desemp = $dataxxxx['modeloxx']->desempeno ;
            $dataxxxx['modeloxx']->product = $dataxxxx['modeloxx']->producto ;
            $dataxxxx['modeloxx']->conocimiento = $dataxxxx['modeloxx']->conoci /2;
            $dataxxxx['modeloxx']->desempeno = $dataxxxx['modeloxx']->desemp /6;
            $dataxxxx['modeloxx']->producto = $dataxxxx['modeloxx']->product /2;

            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            
            


         }



       

        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        //$opciones=$this->getTablas($vercrear);


        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }



}

