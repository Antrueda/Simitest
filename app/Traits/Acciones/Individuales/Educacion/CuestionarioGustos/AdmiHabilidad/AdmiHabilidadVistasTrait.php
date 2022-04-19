<?php


namespace App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\AdmiHabilidad;


use App\Models\sistema\SisDepen;
use Illuminate\Support\Facades\Auth;
use App\Models\AdmiActiAsd\AsdActividad;

use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\AdminCategoria;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\AdminHabilidad;

trait AdmiHabilidadVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'orederby' => 'ASC',
            'cabecera' => false,
            'ajaxxxxx' => false,
        ])['comboxxx'];



        $this->opciones['cursos'] = Curso::pluck('s_cursos', 'id');

      //  $this->opciones['actividades'] = AsdActividad::pluck('nombre', 'id');



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
        $this->pestania[1][4]=true;
        $this->pestania[1][2]=$dataxxxx['padrexxx'];
        $estadoid = 1;
        if ($dataxxxx['modeloxx'] != '') {
            $estadoid = $dataxxxx['modeloxx']->sis_esta_id;
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];

            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']]], 2, 'NUEVA ACTIVIDAD', 'btn btn-sm btn-primary']);
        }



        $this->opciones['motivoxx'] = $this->getEstusuariosAECT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'estadoid' => $estadoid,
            'formular' => 2719
        ])['comboxxx'];

        $this->opciones['itemxxxx'] = $this->getTemacomboCT([
            'temaxxxx' => 435,
        ])['comboxxx'];

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
