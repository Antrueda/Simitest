<?php

namespace App\Traits\Fi\Upinnajx;




/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait UpinnajxVistasTrait
{
    public function getConfigVistas()
    {
        
        $this->opciones['permisox'] = 'fiupinna';

        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->pestania[0][5] = 'active';
        $this->opciones['routxxxx'] = $this->opciones['permisox'];
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
        $this->opciones['infocont'] = 'Nnaj';
        $this->opciones['titucont'] = "NNAJ";
        $this->opciones['carpetax'] = 'Fiupinna';
        $this->opciones['tituhead'] = "M{$this->opciones['vocalesx'][4]}DULO MANUAL DE USUARIOS ONLINE";
        $this->opciones['rutacarp'] = 'FichaIngreso.';
        $this->opciones['rutacomp'] = 'components.crud.';
        $this->opciones['tituloxx'] ='NNAJ';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacomp'] . 'Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacomp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'listaxxx';
        $this->opciones['pestpadr'] = 0;
        $this->opciones['tituhead'] = "FICHA DE INGRESO";

        $this->opciones['pestania'] = $this->opciones['rutacarp'].'pestanias';
    }

   
    /**
     * buscar nnajs que no han quedado como componente familiar
     *
     * @return void
     */
  
    private function getArchivos()
    {
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . $this->opciones['accionxx'];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formular.' . $this->opciones['accionxx'];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    private function view()
    {
        $this->getArchivos();

        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['perfilxx'] = 'conperfi';
            $this->opciones['parametr']=[$this->opciones['modeloxx']->id];
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function getBotones($dataxxxx)
    {

        if (auth()->user()->can($this->opciones['permisox'] . '-' . $dataxxxx[0])) {
            $this->opciones['botoform'][] = [
                'routingx' => $dataxxxx[1],
                'formhref' => $dataxxxx[2],
                'tituloxx' => $dataxxxx[3],
                'clasexxx' => $dataxxxx[4],
            ];
        }
        return $this->opciones;
    }
    
}
