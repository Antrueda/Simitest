<?php

namespace App\Traits\Acciones\Grupales\Sena\SenaNnaj;

use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\NnajDese;
use App\Models\sistema\SisEsta;
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
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => true, 'esajaxxx' => false]);
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
        $this->opciones['etapaxxx'] = Tema::comboAsc(496, true, false);
        $this->opciones['modalida'] = Tema::comboAsc(497, true, false);
        $this->opciones['novedadx'] = Tema::comboAsc(498, true, false);
        $this->opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');

        
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
            $dataxxxx['modeloxx']->fechapro_inicio = explode(' ', $dataxxxx['modeloxx']->fechapro_inicio)[0];
            $dataxxxx['modeloxx']->fechapro_final = explode(' ', $dataxxxx['modeloxx']->fechapro_final)[0];
            $dataxxxx['modeloxx']->fechainactivo = explode(' ', $dataxxxx['modeloxx']->fechainactivo)[0];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['parametr'][] = $dataxxxx['modeloxx']->id;
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}


