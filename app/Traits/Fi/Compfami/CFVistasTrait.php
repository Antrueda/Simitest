<?php

namespace App\Traits\Fi\Compfami;

use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\Tema;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CFVistasTrait
{
    public function indexCVT()
    {
        $this->getPestanias([]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function getOpciones($dataxxxx)
    {
        $this->opciones['permisox'] = $dataxxxx['permisox'];
        $this->pestania[$dataxxxx['activexx']][5] = 'active';
        $this->opciones['routxxxx'] = $dataxxxx['routxxxx'];
        $this->opciones['slotxxxx'] = $this->opciones['permisox'];
        $this->opciones['infocont'] = $dataxxxx['infocont'];
        $this->opciones['titucont'] = $dataxxxx['titucont'];
        $this->opciones['carpetax'] = $dataxxxx['carpetax'];
        $this->opciones['tituhead'] = "M{$this->opciones['vocalesx'][4]}DULO MANUAL DE USUARIOS ONLINE";
        $this->opciones['rutacarp'] = $dataxxxx['rutacarp'];
        $this->opciones['rutacomp'] = $dataxxxx['rutacomp'];
        $this->opciones['tituloxx'] = $dataxxxx['tituloxx'];
        /** botones que se presentan en los formularios */
        $this->opciones['botonesx'] = $this->opciones['rutacomp'] . 'Botones.botonesx';
        /** informacion que se va a mostrar en la vista */
        $this->opciones['formular'] = $this->opciones['rutacomp'] . $this->opciones['carpetax'] . '.formulario.formulario';
        /** ruta que arma el formulario */
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'Acrud.index';
    }
    public function getConfigVistas()
    {
        $tituloxx = "COMPOSICI{$this->opciones['vocalesx'][3]}N FAMILIAR";
        $dataxxxx = [
            'rutacarp' => 'FichaIngreso.', // ruta en que se encuentra almacenada la carpeta
            'rutacomp' => 'FichaIngreso.Aavistas.', // ruta donde están las configuraciones de las vistas
            'carpetax' => 'Composicion', // nombre de la carpeta
            'tituloxx' => $tituloxx, // titulo que se mustra en la vista
            'titucont' => $tituloxx, // texto complementarios en el boton de la tabla
            'infocont' => 'Composición Familiar', // texto complementarios en el mensaje cuando se guarda o edita el registro
            'activexx' => 0, // pestaña que debe estar activa
            'permisox' => 'ficomposicion', // commplemento del permiso
            'routxxxx' => 'ficomposicion' // complemento del route
        ];
        $this->getOpciones($dataxxxx);
        $this->opciones['tituhead'] = $tituloxx;
        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['perfilxx'] = 'conperfi';
    }
    public function getCombos()
    {
        $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
        $this->opciones['parentes'] = Tema::combo(358, true, false);
        $this->opciones['tipotele'] = Tema::combo(44, true, false);
        $this->opciones['vinculad'] = Tema::combo(287, true, false);
        $this->opciones['convivex'] = Tema::combo(23, true, false);
        $this->opciones['reprlega'] = Tema::combo(23, true, false);
        $this->opciones['ocupacio'] = Tema::combo(156, true, false);
        $this->opciones['tipodocu'] = Tema::combo(3, true, false);
        $this->opciones['nacicomp'] = '';
    }
    public function index(FiDatosBasico $padrexxx)
    {

        $compfami = FiCompfami::where('sis_nnajnnaj_id', $padrexxx->sis_nnaj_id)->whereNotIn('sis_nnaj_id', [$padrexxx->sis_nnaj_id])->first();
        if ($compfami == null) {
            // $this->setCmposicionFamiliarCFT(['padrexxx' => $padrexxx]);
        }

        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['pestpara'][0] = [$padrexxx->id];
        $vercrear = false;
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $padrexxx->fi_diligenc->diligenc,
        ]);

        if ($puedexxx['tienperm']) {
            $vercrear = true;
        }
        $this->getComposicionFamiliarFDT([
            'vercrear' => $vercrear,
            'titunuev' => "NUEVA {$this->opciones['titucont']}",
            'titulist' => "LISTA DE {$this->opciones['titucont']}",
            'permisox' => $this->opciones['permisox'] . '-crear',
            'parametr' => $this->opciones['parametr'],
        ]);
        $this->opciones['usuariox'] = $padrexxx;
        return $this->indexCVT();
    }
    public function setGeneral($dataxxxx)
    {
        $this->getBotones(['leer', [$this->opciones['routxxxx'], $dataxxxx['padrexxx']->id], 2, "VOLVER A {$this->opciones['titucont']}S", 'btn btn-sm btn-primary']);
        $this->getVistaPestanias($dataxxxx);
        // $this->opciones['ruarchjs'][] = ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tablatodos'];
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['pais_idx'] = SisPai::combo(true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['aniosxxx'] = '';
        $this->opciones['departam'] = ['' => 'Seleccione'];
        $this->opciones['municipi'] = ['' => 'Seleccione'];
    }
    public function setDatosBasicos($dataxxxx, $datosbas)
    {
        $dataxxxx['modeloxx']->s_primer_apellido = $datosbas->s_primer_apellido;
        $dataxxxx['modeloxx']->s_segundo_apellido = $datosbas->s_segundo_apellido;
        $dataxxxx['modeloxx']->s_primer_nombre = $datosbas->s_primer_nombre;
        $dataxxxx['modeloxx']->s_segundo_nombre = $datosbas->s_segundo_nombre;
        return $dataxxxx;
    }
    public function setNnajDocu($dataxxxx, $datosbas)
    {
        $dataxxxx['modeloxx']->s_documento = $datosbas->nnaj_docu->s_documento;
        $dataxxxx['modeloxx']->prm_tipodocu_id = $datosbas->nnaj_docu->tipoDocumento->id;
        $dataxxxx['modeloxx']->aniosxxx = $datosbas->nnaj_nacimi->Edad;
        $dataxxxx['modeloxx']->sis_pai_id = $datosbas->nnaj_docu->sis_municipio->sis_departam->sis_pai_id;
        $this->opciones['departam'] = SisDepartam::combo($dataxxxx['modeloxx']->sis_pai_id, false);
        $dataxxxx['modeloxx']->sis_departam_id = $datosbas->nnaj_docu->sis_municipio->sis_departam_id;
        $this->opciones['municipi'] = SisMunicipio::combo($dataxxxx['modeloxx']->sis_departam_id, false);
        if ($dataxxxx['modeloxx']->sis_pai_id != 2) {
            $this->opciones['municipi'] = $this->opciones['departam'] = [1 => 'NO APLICA'];
        }
        return $dataxxxx;
    }
    public function setEditar($dataxxxx)
    {
        $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
        $datosbas = $dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico;
        $dataxxxx = $this->setDatosBasicos($dataxxxx, $datosbas);
        $dataxxxx = $this->setNnajDocu($dataxxxx, $datosbas);
        $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
        $this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$dataxxxx['padrexxx']->id]], 2, "NUEVA {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
    }
    private function view($dataxxxx)
    {
        $this->setGeneral($dataxxxx);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->setEditar($dataxxxx);
        } else {
            $this->getBotones(['crear', [$dataxxxx['padrexxx']->id], 1, "GUARDAR {$this->opciones['titucont']}", 'btn btn-sm btn-primary']);
        }

        $this->getTodoDatosBasicosFDT([
            'vercrear' => true,
            'titunuev' => "",
            'titulist' => "LISTA DE COMPONENTES FAMILIARES PARA ASIGNAR (BUSQUE Y SELECCIONE EL COMPONENTE FAMILIAR)",
            'permisox' => $this->opciones['permisox'] . '-crear',
            'parametr' => $this->opciones['parametr'],
        ]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
