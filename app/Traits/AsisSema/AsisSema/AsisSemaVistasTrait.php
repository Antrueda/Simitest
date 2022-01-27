<?php

namespace App\Traits\AsisSema\AsisSema;

use App\Models\AdmiActi\TiposActividad;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AsisSemaVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['sis_depens'] = $this->getDepenTerritorioAECT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ], false)['comboxxx'];
        $this->opciones['prm_acti'] = $this->getTemacomboCT([
            'temaxxxx'=>413,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['tpcursos'] = $this->getTemacomboCT([
            'temaxxxx'=>411,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['tipoacti'] = TiposActividad::combo();
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    
    public function view( $dataxxxx)
    {
        $upidxxxx = 0;
        $servicio = 0;
        $grupoxxx = 0;
        $gradoxxx = 0;
        $tipoacti = 0;
        $activida = 0;
        $usersele = 0;
        $cursosxx = 0;
        $prm_tipo_curso=0;

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], []], 2, 'VOLVER A ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);
        
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->getTablasNnajConAsistencia($dataxxxx['modeloxx']->id);
            $this->getTablasNnajMatriculados($dataxxxx['modeloxx']->id);
            $upidxxxx = $dataxxxx['modeloxx']->sis_depen_id;
            $servicio = $dataxxxx['modeloxx']->sis_servicio_id;
            $grupoxxx = $dataxxxx['modeloxx']->prm_grupo_id;
            $gradoxxx = $dataxxxx['modeloxx']->sis_servicio_id;
            $tipoacti = $dataxxxx['modeloxx']->tipoacti_id;
            $activida = $dataxxxx['modeloxx']->actividade_id;
            $usersele = $dataxxxx['modeloxx']->respoupi_id;
            $dataxxxx['modeloxx']['prm_tipo_curso']=$dataxxxx['modeloxx']->curso->tipo_curso_id;
            $cursosxx = $dataxxxx['modeloxx']->curso_id;
            $dataxxxx['modeloxx']['prm_curso']=$dataxxxx['modeloxx']->curso_id;
            $prm_tipo_curso = $dataxxxx['modeloxx']->prm_tipo_curso;
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[0][4]=true;
            $this->pestania[0][2]=$this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', []], 2, 'NUEVA ASISTENCIA SEMANAL', 'btn btn-sm btn-primary']);
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

        $this->opciones['responsa'] = $this->getResponsableUpiCT([
            'usersele' => $usersele,
            'cargosxx' => [50],
            'dependen' => $upidxxxx
        ]);

        $this->opciones['funccont'] = $this->getUsuarioCargosCT([
            'upidxxxx' => $upidxxxx,
            'cargosxx' => [21,50],
        ])['comboxxx'];

        $this->getPestanias($this->opciones);
        
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
