<?php

namespace App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctoCaracteri;

use App\Models\Tema;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\Vcto;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoArea;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VctCaracteriVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view( $dataxxxx)
    {    
        //accion
        $this->opciones['accionxx'] = $dataxxxx['accionxx'][0];
        $this->opciones['areaitems'] = VctoArea::with('subareas:id,nombre,vcto_area_id','subareas.items:id,nombre,vcto_subarea_id')->select('id','nombre')->where('sis_esta_id',1)->get();
        $this->opciones['itemeval'] = Tema::combo(443, true, false);

        //data registro
        $this->opciones['fechcrea'] ='';
        $this->opciones['fechedit'] = '';
        $this->opciones['usercrea'] = '';
        $this->opciones['useredit'] = '';

        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->pestania2[0][2]=$dataxxxx['padrexxx']->sis_nnaj_id;
        $this->pestania[0][2]=$dataxxxx['padrexxx']->sis_nnaj_id;

        $this->getVista( $dataxxxx);

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $data= Vcto::select('id')->with('caracterizacion:id,vcto_id,area,observacion','caracterizacion.itemsPrivot:id')->where('id',$dataxxxx['modeloxx']->id)->first()->toArray();
            $respuestas=[];
            foreach ($data['caracterizacion'] as $value) {
                $itemr=null;
                foreach ($value['items_privot'] as $item) {
                    $itemr['items'][$item['pivot']['vcto_item_id']]=$item['pivot']['prm_valor'];
                }
               $respuestas[$value['area']]=$itemr;
               $respuestas[$value['area']]['descripcion']=$value['observacion'];
            }
            $this->opciones['actual_caracterizacion'] =$respuestas;
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
        }
        $this->getPestanias($this->opciones);
        $activar_pestania=1;

        $this->getPestaniasWitValidation($dataxxxx['padrexxx'],$activar_pestania);

        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'FormuVctOcupacional.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
