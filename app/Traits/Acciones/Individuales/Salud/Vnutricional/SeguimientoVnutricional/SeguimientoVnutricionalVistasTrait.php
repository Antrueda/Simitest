<?php

namespace App\Traits\Acciones\Individuales\Salud\Vnutricional\SeguimientoVnutricional;

use App\Models\User;
use App\Models\Acciones\Individuales\Salud\Vnutricional\Vnutricion;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Enfermedad;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait SeguimientoVnutricionalVistasTrait
{
    public function getVista($dataxxxx)
    {
        //data registro
        $this->opciones['fechcrea'] = '';
        $this->opciones['fechedit'] = '';
        $this->opciones['usercrea'] = '';
        $this->opciones['useredit'] = '';

        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view($dataxxxx)
    {

        $dependid = 0;
        //accion
        $this->opciones['accionxx'] = $dataxxxx['accionxx'][0];
        $this->opciones['si_no'] = $this->getTemacomboCT([
            'temaxxxx' => 23,
            'cabecera' => true,
            'notinxxx' => [2503],
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['imc_edad'] = $this->getTemacomboCT([
            'temaxxxx' => 484,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['talla_edad'] = $this->getTemacomboCT([
            'temaxxxx' => 485,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['actividad_fisica'] = $this->getTemacomboCT([
            'temaxxxx' => 486,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['apetito'] = $this->getTemacomboCT([
            'temaxxxx' => 487,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['frecuencia'] = $this->getTemacomboCT([
            'temaxxxx' => 488,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['list_aumentar'] = $this->getTemacomboCT([
            'temaxxxx' => 489,
            'cabecera' => false,
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['list_disminuir'] = $this->getTemacomboCT([
            'temaxxxx' => 490,
            'cabecera' => false,
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['list_consumo'] = $this->getTemacomboCT([
            'temaxxxx' => 491,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['list_intra'] = $this->getTemacomboCT([
            'temaxxxx' => 492,
            'cabecera' => false,
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['lis_dianutricional'] = $this->getTemacomboCT([
            'temaxxxx' => 493,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['lis_recomendaciones'] = $this->getTemacomboCT([
            'temaxxxx' => 494,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['alimentos'] = $this->getTemacomboCT([
            'temaxxxx' => 495,
            'cabecera' => false,
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['suplementos'] = Enfermedad::combo(true, false);

        $this->opciones['enferdiags'] = Enfermedad::select(['id', 'nombre'])->with('EnfermedadesAsignadas:id,diag_id,enfe_id', 'EnfermedadesAsignadas.diagnostico:id,nombre,codigo')->whereHas('EnfermedadesAsignadas', function ($query) {
            $query->where('sis_esta_id', 1);
        })->get()->toArray();

        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->pestania[0][2] = $dataxxxx['padrexxx']->nnaj->id;
        $this->pestania2[0][2] = $dataxxxx['padrexxx']->nnaj->id;
        $this->pestania2[1][2] =  $dataxxxx['padrexxx']->id;

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A SEGUIMIENTOS', 'btn btn-sm btn-primary']);
        $this->getBotones(['leerxxxx', ['vnutrici.verxxxxx', [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A VALORACIÓN NUTRICIONAL COMPLETA', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];

            $data = Vnutricion::select('id')->with('resenfermedades:id,diag_id,enfe_id', 'resenfermedades.diagnostico:id,nombre,codigo', 'resenfermedades.enfermedad:id,nombre', 'resalimentos')->where('id', $dataxxxx['modeloxx']->id)->first()->toArray();
            $this->opciones['datadinamica'] = $data;
            $respuestas = [];
            foreach ($data['resenfermedades'] as $item) {
                $respuestas[$item['enfe_id']] = $item['pivot']['asigna_enfermedad_id'];
            }
            $this->opciones['actual_resp_enfermedades'] = $respuestas;

            $respuestas2 = [];
            foreach ($data['resalimentos'] as $item) {
                $respuestas2[$item['pivot']['prm_alimentos']] = $item['pivot']['prm_frecuencia'];
            }
            $this->opciones['actual_alimentos'] = $respuestas2;

            $dependid = $dataxxxx['modeloxx']->sis_depen_id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO SEGUIMIENTO VALORACIÓN NUTRICIONAL', 'btn btn-sm btn-primary']);
            $this->opciones['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
        }

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['funccont']  = User::getUsuario(false, false, $dataxxxx['modeloxx']->user_fun_id);
        } else {
            $this->opciones['funccont']  = User::getUsuario(false, false);
        }
        $this->opciones['sis_depens'] = $this->getUpisNnajUsuarioCT(['nnajidxx' => $dataxxxx['padrexxx']->nnaj->id, 'dependid' => $dependid]);

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'SeguimientoVnutricional.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function viewActive($dataxxxx)
    {
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->pestania[0][2] = $dataxxxx['padrexxx']->nnaj->id;
        $this->pestania2[0][2] = $dataxxxx['padrexxx']->nnaj->id;
        $this->pestania2[1][2] =  $dataxxxx['padrexxx']->id;

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A SEGUIMIENTOS', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO SEGUIMIENTO VALORACIÓN NUTRICIONAL', 'btn btn-sm btn-primary']);
        }

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'Vnutricional.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
