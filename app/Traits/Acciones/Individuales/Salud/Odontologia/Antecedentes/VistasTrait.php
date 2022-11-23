<?php

namespace App\Traits\Acciones\Individuales\Salud\Odontologia\Antecedentes;

use App\Models\Acciones\Individuales\Salud\Medicina\Compuesto;
use App\Models\Acciones\Individuales\Salud\Odontologia\VOdonantece;
use App\Models\Acciones\Individuales\Salud\Odontologia\VOdontologia;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remiespecial;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remision;

use App\Models\sistema\SisEntidadSalud;

use App\Models\Tema;
use App\Models\User;

use Carbon\Carbon;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    public function getVista($opciones, $dataxxxx)
    {
        
        $opciones['rutarchi'] = $opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $opciones['formular'] = $opciones['rutacarp'] . $opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
 
        $opciones['ruarchjs'] = [
            ['jsxxxxxx' => $opciones['rutacarp'] . $opciones['carpetax'] . '.Js.js']
        ];
        return $opciones;
    }
  

    public function view($opciones, $dataxxxx)
    {
        
        $dependid = 0;
        $opciones['fechcrea'] = '';
        $opciones['fechedit'] = '';
        $opciones['odontolo'] = VOdontologia::where('sis_nnaj_id',$opciones['usuariox']->sis_nnaj_id)->first();
        $opciones['antecede'] = $opciones['odontolo']->antecedentes;
        $opciones['alergiax'] = Tema::comboAsc(476, true, false);  
        $opciones['medicame'] = Compuesto::combo(false, false);  
        $opciones['diagnost'] = Diagnostico::comboIn(false,false,[1,2,3,4,5,6]);
        
//        ddd($opciones['antecede']);
        if($opciones['antecede']!=null){
                $dataxxxx['modeloxx']=$opciones['antecede'];
        
         }
        // 

        
        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $opciones['padrexxx']=[];
        if ($dataxxxx['modeloxx'] != '') {
            $opciones['padrexxx']=[$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
        }

        $opciones['tablinde']=false;
        $vercrear=['opciones'=>$opciones,'dataxxxx'=>$dataxxxx];
        


        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }



}


