<?php

namespace App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab\AdmiSubarea;

use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\VihArea;
/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiSubareaVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false,
            // 'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];

        $this->opciones['areas'] = VihArea::pluck('nombre', 'id');
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view( $dataxxxx)
    {
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']]], 2, 'VOLVER A SUB-ÁREAS', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);
        // indica si se esta actualizando o viendo
        $this->pestania[1][4]=true;
        $this->pestania[1][2]=$dataxxxx['padrexxx'];
        $estadoid = 1;
        if ($dataxxxx['modeloxx'] != '') {
            $this->pestania[1][3] = 'SUB-ÁREAS AREA '.strtoupper($dataxxxx['modeloxx']->area->nombre);
            $estadoid = $dataxxxx['modeloxx']->sis_esta_id;
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']]], 2, 'NUEVA SUB-ÁREA', 'btn btn-sm btn-primary']);
        }
        $this->opciones['motivoxx'] = $this->getEstusuariosAECT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'estadoid' => $estadoid,
            'formular' => 2718
        ])['comboxxx'];

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'AdmiValoIdentHab.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
