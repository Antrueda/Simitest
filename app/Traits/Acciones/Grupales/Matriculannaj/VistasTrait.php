<?php

namespace App\Traits\Acciones\Grupales\Matriculannaj;

use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\NnajDese;
use App\Models\Tema;
use Carbon\Carbon;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    use DataTablesTrait;
    public function getVista($dataxxxx)
    {
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }


    public function view($opciones,$dataxxxx)
    {

        $this->opciones['parametr'][] = $this->opciones['padrexxx']->id;
        $this->getVista($dataxxxx);
        $this->getTablas($dataxxxx);
        $this->opciones['compfami'] = FiCompfami::getResponsableSalida($dataxxxx['padrexxx']->id, false, false);
        $this->opciones['condicio'] = Tema::combo(23, true, false);
        $this->opciones['grupoxxx'] = Tema::combo(377, true, false);
        $this->opciones['condixxx'] = Tema::combo(377, true, false);
        if($dataxxxx['padrexxx']->prm_upi_id==19){
            $this->opciones['gradoxxx'] = Tema::comboAsc(379, true, false);
        }else{
            if($dataxxxx['padrexxx']->prm_upi_id==16){
                $this->opciones['gradoxxx'] = Tema::comboAsc(381, true, false);
            }
            else{
                if($dataxxxx['padrexxx']->prm_upi_id==26){
                    $this->opciones['gradoxxx'] = Tema::comboAsc(380, true, false);
                }else{
                    $this->opciones['gradoxxx'] = Tema::comboAsc(378, true, false);
                }
            }
        }

        
        $this->opciones['gradoxxx'] = Tema::comboAsc(378, true, false);
        $this->opciones['servicio'] = NnajDese::getServiciosNnaj(['cabecera' => true, 'ajaxxxxx' => false, 'padrexxx' => $dataxxxx['padrexxx']->prm_upi_id]);
        $this->opciones['estrateg'] = Tema::combo(382, true, false);
        
        $this->opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $this->opciones['proxxxxx'] = Carbon::today()->add(3, 'Month')->isoFormat('YYYY-MM-DD');

        
        // indica si se esta actualizando o viendo
        $dataxxxx['selected'] = 0;
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->s_primer_apellido=$dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico->s_primer_apellido;
            $dataxxxx['modeloxx']->s_segundo_apellido=$dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico->s_segundo_apellido;
            $dataxxxx['modeloxx']->s_primer_nombre=$dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico->s_primer_nombre;
            $dataxxxx['modeloxx']->s_segundo_nombre=$dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico->s_segundo_nombre;
            $dataxxxx['modeloxx']->s_documento=$dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico->nnaj_docu->s_documento;
            $dataxxxx['modeloxx']->d_nacimiento=$dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico->nnaj_nacimi->d_nacimiento;
            $dataxxxx['modeloxx']->s_nombre_identitario=$dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico->nnaj_sexo->s_nombre_identitario;
            $dataxxxx['modeloxx']->prm_serv_id=$dataxxxx['modeloxx']->prm_serv_id;
            $dataxxxx['modeloxx']->aniosxxx=$dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico->nnaj_nacimi->Edad;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['parametr'][] = $dataxxxx['modeloxx']->id;
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}


