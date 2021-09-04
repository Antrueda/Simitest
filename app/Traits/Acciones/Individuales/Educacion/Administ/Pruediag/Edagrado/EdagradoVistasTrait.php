<?php

namespace App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag\Edagrado;

use App\Models\Sistema\SisEsta;
use App\Models\Usuario\Estusuario;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait EdagradoVistasTrait
{
    public function getVista()
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => true, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $this->dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $this->dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view()
    {
        $this->getVista();
        $estadoid=0;
        // indica si se esta actualizando o viendo
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['parametr'] = [$this->opciones['modeloxx']->id];
            $estadoid=$this->opciones['modeloxx']->sis_esta_id;
        }
        $this->opciones['motivoxx'] = Estusuario::combo([
            'cabecera' => true,
            'esajaxxx' => false,
            'estadoid' => $estadoid ,
            'formular' => 2482
        ]);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
