<?php

namespace App\Traits\Direccionamiento\Direccionamiento;

use App\Models\sistema\SisDepartam;
use App\Models\Sistema\SisEsta;
use app\Models\sistema\SisPai;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{

    public function getVista($dataxxxx)
    {
        // lista de localidades
        $this->opciones['sis_localidads'] = $this->getLocalidadesCT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['prm_accion_id'] = $this->getTemacomboCT([
            'temaxxxx' => 394,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['tipodocu'] = $this->getTemacomboCT([
            'temaxxxx' => 3,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['tipodocr'] = $this->getTemacomboCT([
            'temaxxxx' => 361,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['recursos'] = $this->getAgRecursosComboCT([
            'cabecera' => false,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['entidades'] = $this->getSisEntidadComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['funccont'] = $this->getFuncionarioContratistaComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['sis_depens'] = $this->getDepenTerritorioAECT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['sexoxxxx'] = $this->getTemacomboCT([
            'temaxxxx' => 11,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['generoxx'] = $this->getTemacomboCT([
            'temaxxxx' => 12,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['orientax'] = $this->getTemacomboCT([
            'temaxxxx' => 13,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['grupetni'] = $this->getTemacomboCT([
            'temaxxxx' => 20,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['grupindi'] = $this->getTemacomboCT([
            'temaxxxx' => 61,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['condicio'] = $this->getTemacomboCT([
            'temaxxxx' => 23,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['sectorxx'] = $this->getTemacomboCT([
            'temaxxxx' => 130,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['intraxxx'] = $this->getTemacomboCT([
            'temaxxxx' => 211,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['paisxxxx'] = SisPai::combo(true, false);
        $this->opciones['fosareas'] = User::getAreasUser(['cabecera' => true, 'esajaxxx' => false]);
        //$this->opciones['departam'] = SisDepartam::combo($expedici->sis_departam->sis_pai_id, true);
        
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['servicios'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view($dataxxxx)
    {
        $this->getBotones(['leer', [$this->opciones['routxxxx'], []], 2, 'VOLVER A ACTAS DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);
        // indica si se esta actualizando o viendo
        $localidx = 0;
        $upidxxxx = 0;
        $accionid = 0;
        $upzselec = 0;
        $primresp = Auth::user()->s_documento;
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->fechdili = Carbon::parse($dataxxxx['modeloxx']->fechdili)->toDateString();
            $localidx = $dataxxxx['modeloxx']->sis_localidad_id;
            $upidxxxx = $dataxxxx['modeloxx']->sis_depen_id;
            $accionid = $dataxxxx['modeloxx']->prm_accion_id;
            $upzselec = $dataxxxx['modeloxx']->sis_upz_id;
            $primresp = $dataxxxx['modeloxx']->user_contdili_id;
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[1][4] = true;
            $this->pestania[1][2] = $this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevo', []], 2, 'NUEVA ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        }

        $this->opciones['primresp'] = $this->getUsuarioCT([
            'cabecera' => false,
            'ajaxxxxx' => false,
            'campoxxx' => 'name',
            'orderxxx' => 'ASC',
            'document' => [$primresp],
        ])['comboxxx'];
        $this->opciones['sis_upzs'] = $this->getUpzsComboCT([
            'localidx' => $localidx,
            'cabecera' => true,
            'ajaxxxxx' => false
        ]);
        $this->opciones['sis_barrios'] = $this->getBarriosComboCT([
            'localidx' => $localidx,
            'upzidxxx' => $upzselec,
            'cabecera' => true,
            'ajaxxxxx' => false
        ]);
        $this->opciones['sis_servicios']  = $this->getServiciosUpiComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);

        $this->opciones['responsa'] = $this->getResponsableUpiCT([
            'cabecera' => false,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);
        $this->opciones['actividad']  = $this->getActividades([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'orederby' => 'asc',
            'campoxxx' => 'nombre',
            'accionxx' => $accionid,
        ]);
        $this->getTablasNnnaj();
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
