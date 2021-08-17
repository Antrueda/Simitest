<?php

namespace App\Traits\Actaencu\Recursos;

use App\Models\Actaencu\AeRecuadmi;
use App\Models\Actaencu\AeRecurso;
use App\Models\Tema;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait RecursoVistasTrait
{
    public $estadoid = 1;
    public function getVista($dataxxxx)
    {

        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'orederby' => 'ASC',
            'cabecera' => false,
            'ajaxxxxx' => false,
            'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view($dataxxxx)
    {
        $actaencu = $dataxxxx['padrexxx']->id;
        $padrexxx = 0;
        $selected = 0;
        $this->getBotones(['leerxxxx', ['actaencu.editarxx', [$actaencu]], 2, 'VOLVER A ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);
        // indica si se esta actualizando o viendo
        $this->opciones['actaencu'] = $actaencu;
        $this->pestania[1][2] = $actaencu;
        $this->opciones['unidmedi'] = '';
        if ($dataxxxx['modeloxx'] != '') {
            $padrexxx = $dataxxxx['modeloxx']->prm_trecurso_id = $dataxxxx['modeloxx']->ae_recuadmi->prm_trecurso_id;
            $selected = $dataxxxx['modeloxx']->ae_recuadmi_id;
            $this->opciones['parametr'][] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['unidmedi'] = $dataxxxx['modeloxx']->ae_recuadmi->prm_trecurso->nombre;
            $this->getBotones(['crearxxx', [$this->opciones['permisox'] . '.nuevoxxx', [$dataxxxx['modeloxx']->id]], 2, 'NUEVO RECURSO', 'btn btn-sm btn-primary']);
        }
        $this->opciones['trecurso'] = Tema::comboAsc(283, true, false);
        $recursox = AeRecuadmi::first() ;
        if (is_null($recursox)) {
            return redirect()
            ->route('actaencu.editarxx', [$actaencu])
            ->with('info', 'No se cuenta con recursos creados, comuníquese con la administración del sistema para su creación');
        }
        $this->opciones['recuadmi'] = $this->getAeRecursosAECT(
            [
                'padrexxx' => $padrexxx,
                'selected' => [$selected],
                'cabecera' => true,
                'ajaxxxxx' => false,
                'actaencu' => $actaencu
            ]
        )['comboxxx'];

        $this->opciones['prm_accion_id'] = $this->getTemacomboCT([
            'temaxxxx' => 394,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
