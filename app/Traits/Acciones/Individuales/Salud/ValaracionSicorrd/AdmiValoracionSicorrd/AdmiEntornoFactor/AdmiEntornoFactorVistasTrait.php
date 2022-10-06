<?php

namespace App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd\AdmiEntornoFactor;

use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdEntorno;
use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdFactore;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiEntornoFactorVistasTrait
{
    public function getVista($dataxxxx)
    {
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false,
        ])['comboxxx'];

        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }

    public function view($dataxxxx)
    {
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], []], 2, 'VOLVER A LISTA DE ASOCIACIÓN', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);
        // indica si se esta actualizando o viendo
        $estadoid = 1;
        if ($dataxxxx['modeloxx'] != '') {
            $estadoid = $dataxxxx['modeloxx']->sis_esta_id;
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];

            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', []], 2, 'NUEVA ASOCIACIÓN', 'btn btn-sm btn-primary']);
        }

        // 
        $entorno = VsrrdEntorno::select(['vsrrd_entornos.id as valuexxx', 'vsrrd_entornos.nombre as optionxx'])->where('sis_esta_id', 1)->get();
        $factor = VsrrdFactore::select(['vsrrd_factores.id as valuexxx', 'vsrrd_factores.nombre as optionxx'])->where('sis_esta_id', 1)->get();
        $this->opciones['entornos']  = $this->getCuerpoComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dataxxxx' => $entorno,
        ]);

        $this->opciones['factores'] = $this->getCuerpoComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dataxxxx' => $factor,
        ]);

        $this->opciones['motivoxx'] = $this->getEstusuariosAECT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'estadoid' => $estadoid,
            'formular' => 2718
        ])['comboxxx'];

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'ValaracionSicorrd.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
