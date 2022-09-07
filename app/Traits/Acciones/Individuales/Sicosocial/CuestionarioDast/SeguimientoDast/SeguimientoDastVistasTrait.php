<?php

namespace App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\SeguimientoDast;

use App\Models\User;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait SeguimientoDastVistasTrait
{
    public function getVista($dataxxxx)
    {
        //data registro
        $this->opciones['fechcrea'] = '';
        $this->opciones['fechedit'] = '';
        $this->opciones['usercrea'] = '';
        $this->opciones['useredit'] = '';

        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view($dataxxxx)
    {

        $dependid = 0;
        //accion
        $this->opciones['accionxx'] = $dataxxxx['accionxx'][0];

        $this->opciones['list_diligenciamiento'] = $this->getTemacomboCT([
            'temaxxxx' => 455,
            'cabecera' => true,
            'notinxxx' => [2503],
            'ajaxxxxx' => false,
        ])['comboxxx'];

        $this->opciones['list_tipos_seguimientos'] = $this->getTemacomboCT([
            'temaxxxx' => 454,
            'cabecera' => true,
            'notinxxx' => [2503],
            'ajaxxxxx' => false,
        ])['comboxxx'];

        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->pestania[0][2] = $dataxxxx['padrexxx']->nnaj->id;
        $this->pestania2[0][2] = $dataxxxx['padrexxx']->nnaj->id;
        $this->pestania2[1][2] =  $dataxxxx['padrexxx']->id;

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A SEGUIMIENTOS', 'btn btn-sm btn-primary']);
        $this->getBotones(['leerxxxx', ['cuesdast.verxxxxx', [$dataxxxx['padrexxx']->id]], 2, 'VOLVER AL CUESTIONARIO DAST', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $dependid = $dataxxxx['modeloxx']->sis_depen_id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO CUESTIONARIO DAST', 'btn btn-sm btn-primary']);
            $this->opciones['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
        }

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['funccont']  = User::getUsuario(false, false, $dataxxxx['modeloxx']->user_fun_id);
        } else {
            $this->opciones['funccont']  = User::getUsuario(false, false);
        }
        $this->opciones['sis_depens'] = $this->getUpisNnajUsuarioCT(['nnajidxx' => $dataxxxx['padrexxx']->nnaj->id, 'dependid' => $dependid]);

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'CuestionarioDast.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
