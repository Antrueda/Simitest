<?php

namespace App\Traits\Acciones\Individuales\Sociolegal\AtencionCaso;

use App\Models\Acciones\Grupales\Educacion\GrupoMatricula;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remiespecial;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remision;
use App\Models\Acciones\Individuales\SocialLegal\TemaCaso;
use App\Models\Acciones\Individuales\SocialLegal\TipoCaso;
use App\Models\CentroZonal\CentroZonal;
use App\Models\CentroZonal\CentroZosec;
use App\Models\Indicadores\Administ\Area;
use App\Models\Parametro;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\sistema\SisBarrio;
use App\Models\Sistema\SisDepen;
use App\Models\sistema\SisEntidadSalud;
use App\Models\Sistema\SisEsta;
use App\Models\sistema\SisLocalidad;
use App\Models\sistema\SisMunicipio;
use App\Models\Sistema\SisServicio;
use App\Models\sistema\SisUpz;
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
        $opciones['residenc'] = $opciones['padrexxx']->FiResidencia;
        $opciones['upzxxxxr'] = SisUpz::combo($opciones['residenc']->sis_barrio->sis_localupz->sis_localidad_id, false);
        $opciones['barrioxr'] = SisBarrio::combo($opciones['residenc']->sis_barrio->sis_localupz_id, false);  
        if($opciones['usuariox']->prm_tipoblaci_id!=650){
            $opciones['juridica'] = $opciones['padrexxx']->fi_justrests->fi_proceso_srpas;
        }else{
            $opciones['juridica'] = [235 => 'N/A'];
        }     
        
        $dependid = 0;
        $opciones['fechcrea'] = '';
        $opciones['fechedit'] = '';
        $opciones['dependen'] = $this->getUpiUsuarioCT(['nnajidxx' => $opciones['padrexxx']->id, 'dependid' => $dependid]);
        $upinnajx=$opciones['padrexxx']->UpiPrincipal->sis_depen;
        $opciones['depenori'] = [$upinnajx->id=>$upinnajx->nombre];
        $opciones['readchcx'] = 'readonly';
        $opciones['municipi'] = SisMunicipio::comboIn([16,6], false);
        $opciones['upzxxxxx'] = ['' => 'Seleccione'];
        $opciones['barrioxx'] = $opciones['upzxxxxx'];
        $opciones['centrozo'] = CentroZonal::combo(true, false);
        $opciones['tipocaso'] = TipoCaso::combo(true, false);
        $opciones['temacaso'] = TemaCaso::combo(true, false);
        $opciones['centrose'] = CentroZosec::combo(true, false);
        $opciones['tiporesi'] = Tema::combo(145, true, false);
        $opciones['tipodocu'] = Tema::comboAsc(361,true, false);
        $opciones['parentes'] = Tema::comboAsc(358,true, false);
        $opciones['solicita'] = Tema::comboAsc(449,true, false);
        $opciones['juzgadox'] = Tema::comboAsc(451,true, false);
        $opciones['sujetoxx'] = Tema::comboAsc(450,true, false);
        $opciones['estadcas'] = Tema::comboAsc(452,true, false);

        $opciones['condicio'] = Tema::combo(23, true, false);
        $opciones['tipodire'] = Tema::comboAsc(36, true, false);
        $opciones['zonadire'] = Tema::comboAsc(37, true, false);
        $opciones['cuadrant'] = Tema::comboNA(38, true, false);
        $opciones['alfabeto'] = Tema::comboNA(39, true, false);
        $opciones['tpviapal'] = Tema::comboAsc(62, true, false);
        $opciones['dircondi'] = Tema::combo(23, true, false);
        $opciones['localida'] = SisLocalidad::combo();
        $opciones['estadoxx'] = Tema::comboAsc(441,true, false);
        $opciones['dinamica'] = Tema::comboAsc(249,true, false);
        $opciones['estadoxx'] = Tema::comboAsc(436, true, false);
        $opciones['dependen'] = $this->getUpisNnajUsuarioCT(['nnajidxx' => $opciones['padrexxx']->id, 'dependid' => $dependid]);
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['minimoxx'] = Carbon::today()->subDays(3)->isoFormat('YYYY-MM-DD');
        
        
        //ddd($opciones['consulta'] );


        $opciones['usuarioz'] = User::getUsuario(false, false);

   
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        $usuarioz=null;
        if ($dataxxxx['modeloxx'] != '') {
            //ddd($dataxxxx['modeloxx']->cursos->curso->s_cursos);
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
            if(!is_null($dataxxxx['modeloxx']->sis_upzbarri)){
                $dataxxxx['modeloxx']->localidad_id = $dataxxxx['modeloxx']->sis_upzbarri->sis_localupz->sis_localidad_id;
                $dataxxxx['modeloxx']->upz_id=$dataxxxx['modeloxx']->sis_upzbarri->sis_localupz_id;
            }
            $opciones['upzxxxxx'] = SisUpz::combo($dataxxxx['modeloxx']->localidad_id, false);
            $opciones['barrioxx'] = SisBarrio::combo($dataxxxx['modeloxx']->upz_id, false);          
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
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


