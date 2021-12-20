<?php

namespace App\Traits\Indicadores\Usuariox\Indinnaj;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait IndinnajVistasTrait
{
    public function view()
    {
        
        $this->getVista();
       
        // indica si se esta actualizando o viendo
        if (!is_null($this->opciones['modeloxx'])) {
            $this->opciones['parametr'][]=$this->opciones['modeloxx']->id;
            $this->opciones['fechcrea'] = $this->opciones['modeloxx']->created_at;
            $this->opciones['fechedit'] = $this->opciones['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $this->opciones['modeloxx']->creador->name;
            $this->opciones['useredit'] = $this->opciones['modeloxx']->editor->name;
        }
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A INDICADORES', 'parametr' => []]);
        $this->getPestanias(['tipoxxxx'=>$this->opciones['permisox']]);

        $this->getiIndiagnoDiagnost(['paralist' => $this->opciones['parametr']]);
        // Se arma el titulo de acuerdo al array opciones
        return view('Acomponentes.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
