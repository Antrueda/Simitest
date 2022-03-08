<?php

namespace App\Traits\AdmiActiAsd\AdmiActi;

use App\Models\sistema\SisDepen;
use Illuminate\Support\Facades\Auth;
use App\Models\AdmiActiAsd\AsdTiactividad;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiActiVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'orederby' => 'ASC',
            'cabecera' => false,
            'ajaxxxxx' => false,
            // 'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];
        // $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
       $this->opciones['tiposact'] = AsdTiactividad::pluck('nombre', 'id');
        $this->opciones['upisxxxx'] = SisDepen::join('sis_depen_user', 'sis_depens.id', 'sis_depen_user.sis_depen_id')
                                        ->where('sis_depen_user.user_id', Auth::id())->pluck('sis_depens.nombre', 'sis_depens.id');
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view( $dataxxxx)
    {
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']]], 2, 'VOLVER A ACTIVIDADES', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);
        // indica si se esta actualizando o viendo
        $estadoid = 1;
        if ($dataxxxx['modeloxx'] != '') {
            $estadoid = $dataxxxx['modeloxx']->sis_esta_id;
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[0][4]=true;
            $this->pestania[0][2]=$this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']]], 2, 'NUEVA ACTIVIDAD', 'btn btn-sm btn-primary']);
        }
        $this->opciones['motivoxx'] = $this->getEstusuariosAECT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'estadoid' => $estadoid,
            'formular' => 2719
        ])['comboxxx'];
// OJO SOLO SE UTILIZA PARA MIS MIGRACIONES JOSE
        $this->opciones['motivoxx'] = $this->getEstusuariosAECT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'estadoid' => $estadoid,
            'formular' => 2768
        ])['comboxxx'];
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
