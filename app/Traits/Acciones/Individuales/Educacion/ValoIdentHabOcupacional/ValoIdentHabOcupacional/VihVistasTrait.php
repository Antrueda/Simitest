<?php

namespace App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\ValoIdentHabOcupacional;
use App\Models\Tema;
use App\Models\User;
use App\Models\Sistema\SisEsta;
use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\Vih;
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
        $dependid =0;
        //accion
        $this->opciones['accionxx'] = $dataxxxx['accionxx'][0];
        //data registro
        $this->opciones['fechcrea'] ='';
        $this->opciones['fechedit'] = '';
        $this->opciones['usercrea'] = '';
        $this->opciones['useredit'] = '';

        $this->opciones['matricula_academica'] = $this->getMatriculaAcademicaNnaj($dataxxxx['padrexxx']->id);
        $this->opciones['matricula_talleres'] = $this->getMatriculaTalleresNnaj($dataxxxx['padrexxx']->id);
        $this->opciones['dinsustancias'] = Tema::combo(436, true, false);
        $this->opciones['dinamica'] = Tema::comboAsc(249,true, false);
        $this->opciones['areas_for'] = Tema::combo(444, false, false);
        $this->opciones['si_no'] = $this->getTemacomboCT(['temaxxxx'=>23,'cabecera'=>true,'notinxxx'=>[2503],'ajaxxxxx'=>false])['comboxxx'];
        $this->opciones['tema_intra'] = Tema::combo(445, false, false);
        $this->opciones['areasubs'] = VihArea::with('subareas:id,nombre,vih_area_id')->select('id','nombre')->where('sis_esta_id',1)->get();

        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania2[0][2]=$dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $data= Vih::select('id')->with('resultssubareasPrivot:id','descriptareasPrivot:id')->where('id',$dataxxxx['modeloxx']->id)->first()->toArray();
            $respuestas=[];
            foreach ($data['resultssubareas_privot'] as $item) {
                $respuestas[$item['pivot']['vih_subarea_id']]=$item['pivot']['prm_respuesta'];
            }
            $respuestas2=[];
            foreach ($data['descriptareas_privot'] as $item) {
                $respuestas2[$item['pivot']['vih_area_id']]=$item['pivot']['descripcion'];
            }
            $this->opciones['actual_compdesempenio'] =$respuestas;
            $this->opciones['actual_obsarea'] =$respuestas2;
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $dependid =$dataxxxx['modeloxx']->sis_depen_id;
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
            $this->pestania[0][4]=true;
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
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
        return view($this->opciones['rutacarp'] . $this->opciones['carpetax']. '.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
