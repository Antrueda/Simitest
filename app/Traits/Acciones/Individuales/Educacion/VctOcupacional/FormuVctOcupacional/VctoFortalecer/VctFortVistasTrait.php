<?php

namespace App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctoFortalecer;

use App\Models\Tema;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VctFortVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view( $dataxxxx)
    {    
        //accion
        $this->opciones['accionxx'] = $dataxxxx['accionxx'][0];
        $this->opciones['areas_for'] = Tema::combo(444, false, false);
        //data registro
        $this->opciones['fechcrea'] ='';
        $this->opciones['fechedit'] = '';
        $this->opciones['usercrea'] = '';
        $this->opciones['useredit'] = '';

        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->pestania2[0][2]=$dataxxxx['padrexxx']->sis_nnaj_id;
        $this->pestania[0][2]=$dataxxxx['padrexxx']->sis_nnaj_id;

        $this->getVista( $dataxxxx);

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
        }
        $this->getPestanias($this->opciones);
        $activar_pestania=2;
        $this->getPestaniasWitValidation($dataxxxx['padrexxx'],$dataxxxx['accionxx'][0],$activar_pestania);

        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'FormuVctOcupacional.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
