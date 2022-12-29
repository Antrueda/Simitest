<?php

namespace App\Traits\Actaencu\Nnajs;
use App\Models\Sistema\SisEsta;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait NnajsVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $temacomb = $this->getCombosPTCT(['temasxxx'=>[37,62,39,23,38,119,11,3,366,286,401,403,402,286,],'campoxxx'=>'nombre',
        'orderxxx'=>'ASC',]);
        $this->opciones['localida']=$this->getLocalidadesCT([
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        
        $this->opciones['zonadire']= $this->getParametroTemecomboPTCT(['temaxxxx'=>37,
        'cabecera' => true,
        'dataxxxx'=>$temacomb,
        'ajaxxxxx' => false])['comboxxx'];

        $this->opciones['alfabeto'] = $this->getParametroTemecomboPTCT([
            'temaxxxx'=>39,
            'dataxxxx'=>$temacomb,
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['dircondi'] = $this->getParametroTemecomboPTCT([
            'temaxxxx'=>23, 
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'dataxxxx'=>$temacomb,
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['cuadrant'] = $this->getParametroTemecomboPTCT([
            'temaxxxx'=>38, 
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'dataxxxx'=>$temacomb,
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['tipoblac'] = $this->getParametroTemecomboPTCT([
            'temaxxxx'=>119,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'dataxxxx'=>$temacomb,
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['sexoxxxx'] = $this->getParametroTemecomboPTCT([
            'temaxxxx'=>11,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'dataxxxx'=>$temacomb,
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['tipodocu'] = $this->getParametroTemecomboPTCT([
            'temaxxxx'=>3,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'dataxxxx'=>$temacomb,
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['condicio'] = $this->getParametroTemecomboPTCT([
            'temaxxxx'=>366, 
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'dataxxxx'=>$temacomb,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'notinxxx' => [445, 235]
        ])['comboxxx'];
        $this->opciones['neciayud'] = $this->getParametroTemecomboPTCT([
            'temaxxxx'=>286,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'dataxxxx'=>$temacomb,
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
       
        $this->opciones['lugafoca'] = $this->getParametroTemecomboPTCT([
            'temaxxxx'=>403,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'dataxxxx'=>$temacomb,
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['autorizo'] = $this->getParametroTemecomboPTCT([
            'temaxxxx'=>402,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'dataxxxx'=>$temacomb,
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
        return $temacomb;
    }
    public function view( $dataxxxx)
    {
        $this->opciones['parapadr']=[$dataxxxx['padrexxx']->id];
      $temacomb=$this->getVista( $dataxxxx);
        // indica si se esta actualizando o viendo
        $this->pestania[1][2]=$dataxxxx['padrexxx']->aeEncuentro->id;
        $this->pestania[2][2]=$dataxxxx['padrexxx']->aeEncuentro->id;

        $localidx = 0;
        $upzselec = 0;
        $docuayud = 235;
        $perfilxx = 0;
        $tpviapal = 0;
        if ($dataxxxx['modeloxx'] != '') {
            $residenc=$dataxxxx['modeloxx']->sisNnaj->FiResidencia;
            $localidx = $residenc->sis_barrio->sis_localupz->sis_localidad->id;
            $upzselec = $residenc->sis_barrio->sis_localupz->sis_upz->id;
            $docuayud = $dataxxxx['modeloxx']->nnaj_docu->prm_ayuda_id;
            if (!is_null($dataxxxx['modeloxx']->nnaj_asis)) {
                $perfilxx = $dataxxxx['modeloxx']->nnaj_asis->prm_pefil_id;
            }
            
            $tpviapal = $dataxxxx['modeloxx']->sis_nnaj->FiResidencia->i_prm_tipo_via_id;
            $dataxxxx['modeloxx']->i_prm_zona_direccion_id=$residenc->i_prm_zona_direccion_id;
            $dataxxxx['modeloxx']->s_complemento=$residenc->s_complemento;
            $dataxxxx['modeloxx']->i_prm_alfabeto_via_id=$residenc->i_prm_alfabeto_via_id;
           
            $dataxxxx['modeloxx']->i_prm_alfabetico_vg_id=$residenc->i_prm_alfabetico_vg_id;

            
            $this->opciones['parametr'][]=$dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO CONTACTO', 'btn btn-sm btn-primary']);
        }
        $this->opciones['upzxxxxx'] = $this->getUpzsComboCT([
            'localidx' => $localidx,
            'cabecera' => true,
            'ajaxxxxx' => false
        ]);
        $this->opciones['barrioxx'] = $this->getBarriosComboCT([
            'localidx' => $localidx,
            'upzidxxx' => $upzselec,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'ordenxxx' => 'ASC'
        ]);
        $this->opciones['neciayud'] = $this->getParametroTemecomboPTCT([
            'temaxxxx' => 286,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'dataxxxx'=>$temacomb,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'selected' => [$docuayud],
        ])['comboxxx'];
        $this->opciones['prperfil'] = $this->getParametroTemecomboPTCT([
            'temaxxxx' => 401,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'dataxxxx'=>$temacomb,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'selected' => [$perfilxx],
        ])['comboxxx'];
        $this->opciones['tpviapal'] = $this->getParametroTemecomboPTCT([
            'temaxxxx' => 62,
            'campoxxx' => 'nombre',
            'orederby' => 'ASC',
            'dataxxxx'=>$temacomb,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'selected' => [$tpviapal],
        ])['comboxxx'];
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
