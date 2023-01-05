<?php

namespace App\Traits\Actaencu\Nnajs;

use App\Models\Sistema\SisEsta;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait NnajsVistasTrait
{
    public function getVista($dataxxxx)
    {
        $this->opciones['localida'] = $this->getLocalidadesCT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['zonadire'] = $this->getTemacomboCT([
            'temaxxxx' => 37,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['tpviapal'] = $this->getTemacomboCT([
            'temaxxxx' => 62,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['alfabeto'] = $this->getTemacomboCT([
            'temaxxxx' => 39,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['dircondi'] = $this->getTemacomboCT([
            'temaxxxx' => 23,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['cuadrant'] = $this->getTemacomboCT([
            'temaxxxx' => 38,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['tipoblac'] = $this->getTemacomboCT([
            'temaxxxx' => 119,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
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
        $this->opciones['tipodocu'] = $this->getTemacomboCT([
            'temaxxxx' => 3,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['condicio'] = $this->getTemacomboCT([
            'temaxxxx' => 366,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false,
            'notinxxx' => [445, 235]
        ])['comboxxx'];
        $this->opciones['neciayud'] = $this->getTemacomboCT([
            'temaxxxx' => 286,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['prperfil'] = $this->getTemacomboCT([
            'temaxxxx' => 401,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['lugafoca'] = $this->getTemacomboCT([
            'temaxxxx' => 402,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['autorizo'] = $this->getTemacomboCT([
            'temaxxxx' => 403,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['readchcx'] = '';
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view($dataxxxx)
    {
        $this->opciones['parapadr'] = [$dataxxxx['padrexxx']->id];
        $this->getVista($dataxxxx);
        // indica si se esta actualizando o viendo
        $this->pestania[1][2] = $dataxxxx['padrexxx']->aeEncuentro->id;
        $this->pestania[2][2] = $dataxxxx['padrexxx']->aeEncuentro->id;

        $localidx = 0;
        $upzselec = 0;
        $docuayud = 235;
        $perfilxx = 0;
        $tpviapal = 0;
        if ($dataxxxx['modeloxx'] != '') {

            $residenc = $dataxxxx['modeloxx']->sis_nnaj->FiResidencia->sisUpzbarri;
            $localidx = $residenc->sis_localupz->sis_localidad_id;
            $upzselec = $residenc->sis_localupz_id;
            
            $dataxxxx['modeloxx']->sis_upzbarri_id=$residenc->id;
            $dataxxxx['modeloxx']->sis_upz_id= $upzselec;
            $docuayud = $dataxxxx['modeloxx']->nnaj_docu->prm_ayuda_id;
            if (!is_null($dataxxxx['modeloxx']->nnaj_asis)) {
                $perfilxx = $dataxxxx['modeloxx']->nnaj_asis->prm_pefil_id;
            }

            $dataxxxx['modeloxx']->i_prm_zona_direccion_id=$dataxxxx['modeloxx']->sis_nnaj->FiResidencia->i_prm_zona_direccion_id;
            $tpviapal = $dataxxxx['modeloxx']->sis_nnaj->FiResidencia->i_prm_tipo_via_id;
            $this->opciones['parametr'][] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO CONTACTO', 'btn btn-sm btn-primary']);
        }
        $this->opciones['upzxxxxx'] = $this->getSisLocalupzComboCT([
            'localidx' => $localidx,
            'cabecera' => true,
            'ajaxxxxx' => false
        ]);
        $this->opciones['barrioxx'] = $this->getSisUpzbarrisComboCT([
            'localidx' => $localidx,
            'upzidxxx' => $upzselec,
           
            'ajaxxxxx' => false,
            'ordenxxx' => 'ASC'
        ]);

        if (Auth::user()->s_documento == '17496705') {
                
            //ddd(  $this->opciones['barrioxx'] );
             }
        $this->opciones['neciayud'] = $this->getTemacomboCT([
            'temaxxxx' => 286,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false,
            'selected' => [$docuayud],
        ])['comboxxx'];
        $this->opciones['prperfil'] = $this->getTemacomboCT([
            'temaxxxx' => 401,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false,
            'selected' => [$perfilxx],
        ])['comboxxx'];
        $this->opciones['tpviapal'] = $this->getTemacomboCT([
            'temaxxxx' => 62,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false,
            'selected' => [$tpviapal],
        ])['comboxxx'];
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
