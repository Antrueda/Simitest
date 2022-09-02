<?php

namespace App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\AdmiResultados;

use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastAccione;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DastResultVistasTrait
{
    public function getVista($dataxxxx)
    {
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false,
            // 'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];

        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }



    public function view($dataxxxx)
    {
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], []], 2, 'VOLVER A RESULTADOS', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);
        // indica si se esta actualizando o viendo
        $accion = 0;
        $estadoid = 1;
        if ($dataxxxx['modeloxx'] != '') {
            $estadoid = $dataxxxx['modeloxx']->sis_esta_id;
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[0][4] = true;
            $accion = $dataxxxx['modeloxx']->accion_id;
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', []], 2, 'NUEVO RESULTADO', 'btn btn-sm btn-primary']);
        }
        $this->opciones['motivoxx'] = $this->getEstusuariosAECT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'estadoid' => $estadoid,
            'formular' => 2718
        ])['comboxxx'];

        $this->opciones['acciones'] = DastAccione::where('sis_esta_id', 1)->orWhere('id', $accion)->get()->pluck('nombre', 'id');
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'AdmiCuestionarioDast.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
