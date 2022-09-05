<?php


namespace App\Traits\Acciones\Individuales\Salud\Vacunas\Administracion\VacunaTipo;
/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VacunaTipoParametrizarTrait
{

    public $opciones;
 
    public function getMware()
    {
        $permisos = ['permission:'
            . $this->opciones['permisox'] . '-leerxxxx|'
            . $this->opciones['permisox'] . '-crearxxx|'
            . $this->opciones['permisox'] . '-editarxx|'
            . $this->opciones['permisox'] . '-borrarxx|'
            . $this->opciones['permisox'] . '-activarx'];
        return  $permisos;
    }
  
    public function getOpciones()
    {
        $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        $this->opciones['tituhead'] = 'TIPOS DE VACUNAS';
        $this->opciones['routxxxx'] = $this->opciones['permisox'];
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['rutacarp'] = 'Acciones.Individuales.Salud.Vacunas.Administracion.';
        $this->opciones['parametr'] = [];
        $this->opciones['routingx'] = [];
        $this->opciones['carpetax'] = 'VacunaTipo';
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
        $this->opciones['tituloxx'] = "TIPOS DE VACUNAS";
    }

    public function getBotones($dataxxxx)
    {
        $mostboto=false;
        if (auth()->user()->can($this->opciones['permisox'] . '-' . $dataxxxx[0])) {
            $mostboto=true;
        }
        $this->opciones['botoform'][] = [
            'mostboto'=>$mostboto,
            'routingx' => $dataxxxx[1],
            'formhref' => $dataxxxx[2],
            'tituloxx' => $dataxxxx[3],
            'clasexxx' => $dataxxxx[4],
        ];
        return $this->opciones;
    }
}
