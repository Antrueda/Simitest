<?php

namespace App\Traits\Actaencu\Actaencu;

use App\Models\Sistema\SisEsta;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ActaencuVistasTrait
{

    public function getVista($dataxxxx)
    {
        // lista de localidades
        $this->opciones['sis_localidads'] = $this->getLocalidadesCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'wherenot' => [22, 23, 24]
        ])['comboxxx'];

        $this->opciones['prm_accion_id'] = $this->getTemacomboCT([
            'temaxxxx' => 394,
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

        $this->opciones['sis_depens'] = $this->getDepenTerritorioAECT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'];
    }
    public function view($dataxxxx)
    {
        $this->getVista($dataxxxx);
        // indica si se esta actualizando o viendo
        $localidx = 0;
        $upidxxxx = 0;
        $accionid = 0;
        $upzselec = 0;
        $padrexxx = 0;
        $dependid = 0;
        $usersele = 0;
        $this->opciones['fechcrea'] =  '';
        $this->opciones['fechedit'] =  '';
        $this->opciones['usercrea'] =  '';
        $this->opciones['useredit'] =  '';
        $primresp = Auth::user()->s_documento;
        if ($dataxxxx['modeloxx'] != '') {
            $dependid = $dataxxxx['modeloxx']->sis_depen_id;
            $usersele=$dataxxxx['modeloxx']->respoupi_id;
            $padrexxx = $dataxxxx['modeloxx']->id;
            $dataxxxx['modeloxx']->fechdili = Carbon::parse($dataxxxx['modeloxx']->fechdili)->toDateString();
            $localidx = $dataxxxx['modeloxx']->sis_localidad_id;
            $upidxxxx = $dataxxxx['modeloxx']->sis_depen_id;
            $accionid = $dataxxxx['modeloxx']->prm_accion_id;
            $upzselec = $dataxxxx['modeloxx']->sis_upz_id;
            if (!is_null($dataxxxx['modeloxx']->user_contdili)) {
                $primresp = $dataxxxx['modeloxx']->user_contdili->s_documento;
            }

            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[1][4] = true;
            $this->pestania[1][2] = $this->opciones['parametr'];
            $this->pestania[2][4] = true;
            $this->pestania[2][2] = $this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['permisox'] . '.nuevoxxx', []], 2, 'NUEVA ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->userCrea->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->userEdita->name;
        }
        $this->opciones['funccont'] = $this->getFuncionarioContratistaComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependid' => $dependid
        ])['comboxxx'];

        $this->getTablasContactos($padrexxx);
        $this->opciones['primresp'] = $this->getUsuarioCargosCT([
            'cargosxx' => [21],
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
            'ajaxxxxx' => false,
            'ordenxxx' => 'ASC'
        ]);
        $this->opciones['sis_servicios']  = $this->getServiciosUpiComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);

        $this->opciones['responsa'] = $this->getResponsableUpiCT([
            'usersele' => $usersele,
            'dependen' => $upidxxxx
        ]);
        $this->opciones['actividad']  = $this->getActividades([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'orederby' => 'asc',
            'campoxxx' => 'nombre',
            'accionxx' => $accionid,
        ]);
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
