<?php

namespace App\Traits\Acciones\Individuales\Educacion\VEntrevista\VEntrevista;

use App\Http\Controllers\Acciones\Grupales\Matricula\MatriculannajController;
use App\Models\Acciones\Grupales\Educacion\GrupoMatricula;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfPerfilVoca;
use App\Models\Indicadores\Administ\Area;
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
        $dependid = 0;
        $opciones['fechcrea'] = '';
        $opciones['fechedit'] = '';
        $opciones['perfilxz'] = PvfPerfilVoca::where('sis_esta_id', 1)->where('sis_nnaj_id', $opciones['padrexxx']->id)->orderBy('created_at', 'desc')->first();
        $opciones['matrtall'] = MatriculaCurso::where('sis_esta_id', 1)->where('sis_nnaj_id', $opciones['padrexxx']->id)->orderBy('created_at', 'desc')->first();
        $opciones['matricul'] = IMatriculaNnaj::where('sis_esta_id', 1)->where('sis_nnaj_id', $opciones['padrexxx']->id)->orderBy('created_at', 'desc')->first();
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['dinamica'] = Tema::comboAsc(249,true, false);
        $opciones['estadoxx'] = Tema::comboAsc(436, true, false);
        $opciones['mejoraxx'] = Tema::comboAsc(437, false, false);
        $opciones['intraxxx'] = Area::comboPrincipal(false,false,227);
        $opciones['dependen'] = $this->getUpisNnajUsuarioCT(['nnajidxx' => $opciones['padrexxx']->id, 'dependid' => $dependid]);
        $opciones['atencion'] = $this->getTemacomboCT([
            'temaxxxx' => 404,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
    
   
        $opciones['usuarioz'] = User::getUsuario(false, false);
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        if ($dataxxxx['modeloxx'] != '') {
            //ddd($dataxxxx['modeloxx']->cursos->curso->s_cursos);
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
            $dependid = $dataxxxx['modeloxx']->upi_id;
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            
            


         }



       

        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        //$opciones=$this->getTablas($vercrear);


        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }



}

