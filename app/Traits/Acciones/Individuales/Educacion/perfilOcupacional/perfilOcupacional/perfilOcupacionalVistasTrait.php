<?php


namespace App\Traits\Acciones\Individuales\Educacion\perfilOcupacional\perfilOcupacional;

use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoPerfilOcupacional;
use App\Models\sistema\SisDepen;
use App\Models\Sistema\SisEsta;
use App\Models\User;
use Carbon\Carbon;

trait perfilOcupacionalVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view2( $dataxxxx)
    {
        $dependid =0;

        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania2[0][2]=$dataxxxx['padrexxx'];
        $this->pestania[0][2]=$dataxxxx['padrexxx'];


        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER PERFIL OCUPACIONAL', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $dependid =$dataxxxx['modeloxx']->sis_depen_id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[0][4]=true;
            $this->pestania[0][2]=$this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO PERFIL OCUPACIONAL', 'btn btn-sm btn-primary']);
           // $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', []], 2, 'NUEVO PERFIL OCUPACIONAL', 'btn btn-sm btn-primary']);
            $this->opciones['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
            $this->opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');



        }
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['funccont']  = User::getUsuario(false, false,$dataxxxx['modeloxx']->user_fun_id);
        }else{
            $this->opciones['funccont']  = User::getUsuario(false, false);
        }
        $this->opciones['sis_depens'] = $this->getUpisNnajUsuarioCT(['nnajidxx' => $dataxxxx['padrexxx']->id, 'dependid' => $dependid]);


        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

   

    private function view($dataxxxx)
    {

        $this->opciones['usuarios'] = User::getUsuario(false, false);

        $this->opciones['botoform'][] = [
            'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'].'-leer',$dataxxxx['padrexxx']->sis_nnaj_id],
            'formhref' => 2, 'tituloxx' => 'VOLVER A LISTA DE PERFIL OCUPACIONAL', 'clasexxx' => 'btn btn-sm btn-primary'
        ];


        $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'],
            ];

        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->sis_nnaj_id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];



        $upinnajx=$dataxxxx['padrexxx']->sis_nnaj->UpiPrincipal;
        $this->opciones['dependen'] = [$upinnajx->id=>$upinnajx->nombre];
        $this->opciones['dependez'] = SisDepen::combo(true, false);
        $this->opciones['usuarioz'] = User::comboCargo(true, false);
        $this->opciones['respoupi'] = $dataxxxx['padrexxx']->sis_nnaj->Responsable[0];

        $this->opciones['vercrear'] = false;

        
        $parametr = 0;
               // indica si se esta actualizando o viendo

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['vercrear'] = true;
            $parametr = $dataxxxx['modeloxx']->id;
            $this->opciones['pestpadr'] = 3;

            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $dataxxxx['modeloxx']->fecha_registro= explode(' ',$dataxxxx['modeloxx']->fecha_registro)[0];
            $dataxxxx['modeloxx']->fecha=explode(' ',$dataxxxx['modeloxx']->fecha)[0];

            $data=FpoPerfilOcupacional::select('id')->with('respuestacomponentes:id,observacion,fpo_componen_id,fpo_perfil_id','respuestacomponentes.respuestaitems:id,valor,fpo_item_id,fpo_comp_respu_id')->where('id',$dataxxxx['modeloxx']->id)->first()->toArray();
            $respuestas=[];
            foreach ($data['respuestacomponentes'] as $value) {
                $itemr=null;
                foreach ($value['respuestaitems'] as $value2) {
                        $itemr['respuestas'][$value2['fpo_item_id']]=$value2['valor'];
                }

               $respuestas[$value['fpo_componen_id']]=$itemr;
               $respuestas[$value['fpo_componen_id']]['descripcion']=$value['observacion'];
            }

            /// no llega 

            $this->opciones['modeloxx']['respuestasactuales'] =$respuestas;

            $this->opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $this->opciones['pestpara'] = [$dataxxxx['modeloxx']->id];
            if (auth()->user()->can($this->opciones['permisox'] . '-crearxxx')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $dataxxxx['padrexxx']->sis_nnaj_id],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }
        }

        if ($dataxxxx['accionxx'][1] == 'destroy') {
            $this->opciones['ruarchjs'] = [
                ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.verjs'],
                ];

        }

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }



}
