<?php

namespace App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\Edasigra;

/**
 * Este trait permite armar las vistas del controlador
 */
trait EdasigraVistasTrait
{
    public function getVista()
    {
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'orederby' => 'ASC',
            'cabecera' => false,
            'ajaxxxxx' => false,
            'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];
        $this->pestania[$this->opciones['permisox']][3] = true;
        $this->pestania[$this->opciones['permisox']][1] = [$this->opciones['modeloxx']->id];
        $this->getPestanias([]);
        // * Campos históricos por defecto
        $this->opciones['fechcrea'] =  '';
        $this->opciones['fechedit'] =  '';
        $this->opciones['usercrea'] =  '';
        $this->opciones['useredit'] =  '';
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $this->dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $this->dataxxxx['accionxx'][1];

    }
    public function view()
    {
        $this->getVista();
        // indica si se esta actualizando o viendo
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['gradoxxx'] = [$this->opciones['modeloxx']->id=>$this->opciones['modeloxx']->s_grado];
            $this->opciones['parametr'] = [$this->opciones['modeloxx']->id];
            // * Campos históricos por defecto
            $this->opciones['fechcrea'] = $this->opciones['modeloxx']->created_at;
            $this->opciones['fechedit'] = $this->opciones['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $this->opciones['modeloxx']->userCrea->name;
            $this->opciones['useredit'] = $this->opciones['modeloxx']->userEdita->name;
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
