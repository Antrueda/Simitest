<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\PerfilOcupacional;

use DateTime;
use Carbon\Carbon;
use App\Models\Tema;
use App\Models\User;
use App\Models\consulta\Csd;
use App\Traits\Combos\CombosTrait;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Http\Request;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisDepen;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PerfilOcupacional\AplicacionFpoRequest;
use App\Traits\Acciones\Individuales\Educacion\perfilOcupacional\perfilOcupacional\perfilOcupacionalListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\perfilOcupacional\perfilOcupacional\perfilOcupacionalDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\perfilOcupacional\perfilOcupacional\perfilOcupacionalParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\perfilOcupacional\perfilOcupacional\perfilOcupacionalPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\perfilOcupacional\perfilOcupacional\perfilOcupacionalCrudTrait;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioComponente;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoPerfilOcupacional;
use App\Traits\Acciones\Individuales\Educacion\perfilOcupacional\perfilOcupacional\perfilOcupacionalVistasTrait;

class PerfilOcupacionalController extends Controller
{
    use perfilOcupacionalParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use perfilOcupacionalPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use perfilOcupacionalListadosTrait; // trait que arma las consultas para las datatables
    use perfilOcupacionalDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use perfilOcupacionalCrudTrait; // trait donde se hace el crud de localidades
    use perfilOcupacionalVistasTrait;
    use CombosTrait; //
    use  ManageTimeTrait;

  


    public function __construct()
    {
        $this->opciones['permisox'] = 'perfilocupacional';
        $this->opciones['routxxxx'] = 'perfilocupacional';
        $this->getOpciones();
        $this->middleware($this->getMware());
        //$this->opciones['conthabi'] = [];
        $this->pestania2[0][4] = true;
        $this->pestania2[0][2] = 'active';
    }

    public function index(SisNnaj $padrexxx)
    {

        $puedoCrear = $this->verificarPuedoCrear($padrexxx);
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->pestania[0][2] = $padrexxx->id;
        $this->pestania2[0][2] = $padrexxx->id;
        $this->getPestanias([]);
        $this->getTablas($padrexxx->id, $puedoCrear['puedo']);
        return view($this->opciones['rutacarp'] . 'perfilOcupacional.pestanias', ['todoxxxx' => $this->opciones]);
       
    }


    public function create(SisNnaj $padrexxx)
    {

        $this->opciones['componentes'] = FpoDesempenioComponente::select('id','nombre')->with('items:id,item_nombre,categoria_id,desempenio_id','items.categoria:id,nombre')->where('sis_esta_id',1)->get();
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $padrexxx->fi_datos_basico]);

        }
    
    public function store(AplicacionFpoRequest $request, SisNnaj $padrexxx)
    {

        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id' => $padrexxx->id]);

        return $this->grabar(['requestx' => $request, 'infoxxxx' => 'Perfil ocupacional creado con éxito', 'modeloxx' => '', 'padrexxx' => $padrexxx]);


      
    }


    public function show( )
    {
    }


    public function edit( )
    {
      
    }


    public function update()
    {
       
    }

    public function inactivate()
    {

        
    }


    public function destroy()
    {

    }

    public function activate()
    {

    }
    public function activar()
    {
        
    }



    private function verificarPuedoCrear($padrexxx)
    {
        $date = new DateTime();
        $data = [];
        if ($padrexxx->fi_datos_basico->nnaj_nacimi->Edad >= 5 && $padrexxx->fi_datos_basico->nnaj_nacimi->Edad < 80) {
            $data['puedo'] = true;

            $ultimoperfil = FpoPerfilOcupacional::where('sis_esta_id', 1)->where('sis_nnaj_id', $padrexxx->id)->orderBy('created_at', 'desc')->first();
            if ($ultimoperfil != null) {
                $fecha1 = new DateTime($ultimoperfil->fecha);
                $diff = $date->diff($fecha1);
                $days = $diff->days;
            } else {
                $days = 366;
            }
            if ($days > 365) {
                $data['puedo'] = true;
            } else {
                $hoy = $date;
                $data['puedo'] = false;
                $cuandoPuedo = 365 - $days;
                $cuandoPuedo = $hoy->modify('+ ' . $cuandoPuedo . ' day');

                $data['meserror'] = 'Solo podrá diligenciar el cuestionario de Gustos e Intereses, PRÓXIMA FECHA QUE SE PUEDE DILIGENCIAR UNO NUEVO ' . $cuandoPuedo->format('Y-m-d');
            }
        } else {
            $data['puedo'] = false;
            $data['meserror'] = 'Nnaj no tiene permiso de edad para crear el cuestionario de Gustos iuintereses';
        }
        return $data;
    }

    private function verificarPuedoEditar($modeloxx)
    {
        if ($modeloxx->user_crea_id == Auth::user()->id || Auth::user()->roles->first()->id == 1) {
            return true;
        } else {
            return false;
        }
    }

    

    public function getCuerpoComboSinValueCT($dataxxxx)
    {
        $comboxxx = $this->getCabecera($dataxxxx);
        foreach ($dataxxxx['dataxxxx'] as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $selected = '';
                if (in_array($registro->valuexxx, $dataxxxx['selected'])) {
                    $selected = 'selected';
                }
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => strtoupper($registro->optionxx), 'selected' => $selected];
            } else {
                $comboxxx[$registro->valuexxx] = strtoupper($registro->optionxx);
            }
        }
        return $comboxxx;
    }

}
