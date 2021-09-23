<?php

namespace App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag\Edupresa;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait EdupresaVistasTrait
{
    public function getVista()
    {
        $gradoxxx = $this->padrexxx->edaGrado;
        $this->opciones['gradoxxx'] = [$gradoxxx->id => $gradoxxx->s_grado];
        $this->opciones['respoupi'] = $this->getUpiUsuarioRegistraCT(['cabecera' => false]);
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'orederby' => 'ASC',
            'cabecera' => false,
            'ajaxxxxx' => false,
            'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];
        $this->opciones['usuariox'] = $this->padrexxx->fiDatosBasico;
        $this->opciones['asignatu'] = $this->getGradoAsignaturasCT(['pruediag'=>$this->padrexxx->id]);
        $this->getPrametros([$this->padrexxx->id]);
        $this->getPestanias([]);
        // * Campos históricos por defecto
        $this->opciones['fechcrea'] =  '';
        $this->opciones['fechedit'] =  '';
        $this->opciones['usercrea'] =  '';
        $this->opciones['useredit'] =  '';
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $this->dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . ucfirst($this->opciones['permisox']) . '.Formulario.' . $this->dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . ucfirst($this->opciones['permisox']) . '.Js.js']
        ];
    }
    public function view()
    {
        $asignatu=0;
        $this->getVista();
        $this->opciones['parametr'] = [$this->padrexxx->id];
        // indica si se esta actualizando o viendo
        if (!is_null($this->opciones['modeloxx'])) {
            $asignatu=$this->opciones['modeloxx']->eda_asignatu_id;
            $this->opciones['parametr'] = [$this->opciones['modeloxx']->id];
            // * Campos históricos por defecto
            $this->opciones['fechcrea'] = $this->opciones['modeloxx']->created_at;
            $this->opciones['fechedit'] = $this->opciones['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $this->opciones['modeloxx']->userCrea->name;
            $this->opciones['useredit'] = $this->opciones['modeloxx']->userEdita->name;
            $botonxxx = [
                'accionxx' => 'crearxxx',
                'btnxxxxx' => 'a', 'tituloxx' => 'CREAR PRUEBA DIAGNÓSTICA',
                'routexxx' => $this->opciones['permisox'] . '.nuevoxxx', 'parametr'=>$this->opciones['modeloxx']->edu_pruediag_id
            ];
            $this->getRespuesta($botonxxx);
        }
        $this->opciones['presaber'] = $this->getAsignaturaPresaberesCT(['asignatu'=>$asignatu,'pruediag'=>$this->padrexxx->id]);

        $this->getDtEdupresaIndex($this->vercrear);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
