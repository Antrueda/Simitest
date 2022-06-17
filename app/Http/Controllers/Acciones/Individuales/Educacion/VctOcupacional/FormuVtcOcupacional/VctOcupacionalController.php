<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\VctOcupacional\FormuVtcOcupacional;

use DateTime;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\Vcto;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\VctDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\Vcto\VctVistasTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\FormuVtcOcupacional\VtcoCrearRequest;
use App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional\Vcto\VctParametrizarTrait;

class VctOcupacionalController extends Controller
{
    use VctParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VctPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use VctListadosTrait; // trait que arma las consultas para las datatables
    use VctCrudTrait; // trait donde se hace el crud de localidades
    use VctDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VctVistasTrait; // trait que arma la logica para lo metodos: crud
    use  ManageTimeTrait;
    
    public function __construct()
    {
        $this->opciones['permisox'] = 'vctocupa';
        $this->opciones['routxxxx'] = 'vctocupa';
        $this->getOpciones();
        $this->middleware($this->getMware());

        $this->pestania2[0][5] = 'active';
    }

    public function index(SisNnaj $padrexxx)
    {
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->pestania2[0][2]=$padrexxx->id;
        $this->pestania[0][2]=$padrexxx->id;

        $this->getPestanias([]);
        $this->getTablasVcto($padrexxx->id);
        return view($this->opciones['rutacarp'] . '.FormuVctOcupacional'. '.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(SisNnaj $padrexxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, 
            'fechregi' => Carbon::now()->toDateString(),
        ]);
        $this->opciones['puedetiempo'] = $puedexxx;

        $puedoCrear=$this->verificarPuedoCrear($padrexxx);
        
        if ($puedoCrear['puedo']) {
            $this->opciones['parametr'] = [$padrexxx->id];
            $this->getBotones(['crearxxx', [], 1, 'GUARDAR VALORACIÓN T.O', 'btn btn-sm btn-primary submit-pvf']);
            return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],'padrexxx'=>$padrexxx]);
        }else{
            return redirect()
            ->route($this->opciones['routxxxx'], [$padrexxx->id])
            ->with('info', $puedoCrear['meserror']);
        }
    }

    public function store(VtcoCrearRequest $request,SisNnaj $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id'=> $padrexxx->id]);
        return $this->setVctocupacional([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Valoración y caracterización T.O creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function show(Vcto $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'],'padrexxx'=>$modeloxx->nnaj]);
    }

    public function edit(Vcto $modeloxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->fecha,
        ]);
        if ($puedexxx['tienperm']) {
            if ($this->verificarPuedoEditar($modeloxx)) {
                $this->opciones['puedetiempo'] = $puedexxx;
                $this->getBotones(['editarxx', [], 1, 'EDITAR VALORACIÓN T.O', 'btn btn-sm btn-primary']);
                return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx'=>$modeloxx->nnaj]);
            }else{
                return redirect()
                ->route('vctocupa', [$modeloxx->sis_nnaj_id])
                ->with('info', 'No tiene permiso para editar este formulario fue creado por otra persona.');
            }
            
        }else{
            return redirect()
            ->route('vctocupa', [$modeloxx->sis_nnaj_id])
            ->with('info', $puedexxx['msnxxxxx']);
        }
    }

    public function update(VtcoCrearRequest $request,  Vcto $modeloxx)
    {
        return $this->setPerfilVocacional([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Valoración y caracterización T.O editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(Vcto $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR VALORACIÓN T.O', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->nnaj]);
    }

    public function destroy(Request $request, Vcto $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->nnaj])
            ->with('info', 'Valoración y caracterización T.O inactivado correctamente');
    }

    public function activate(Vcto $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR VALORACIÓN T.O', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->nnaj]);
    }

    public function activar(Request $request, Vcto $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->nnaj])
            ->with('info', 'Valoración y caracterización T.O activado correctamente');
    }

    private function verificarPuedoCrear($padrexxx){
        $date = new DateTime();

        $data=[];
        if ($padrexxx->fi_datos_basico->nnaj_nacimi->Edad >= 6 && $padrexxx->fi_datos_basico->nnaj_nacimi->Edad < 14) {
            $data['puedo'] = true;

            $ultimoperfil = Vcto::where('sis_esta_id',1)->where('sis_nnaj_id',$padrexxx->id)->orderBy('created_at','desc')->first();
                if ($ultimoperfil != null) {
                    $fecha1= new DateTime($ultimoperfil->fecha);
                    $diff = $date->diff($fecha1);
                    $days=$diff->days;
                }else{
                    $days=366;
                }
                
                if ($days > 365) {
                    $data['puedo'] = true;
                }else{
                    $hoy = $date;
                    $data['puedo'] = false;
                    $cuandoPuedo = 365 - $days;
                    $cuandoPuedo = $hoy->modify('+ '.$cuandoPuedo.' day');
                
                    $data['meserror']='Solo podrá diligenciar la Valoración y caracterización T.O anualmente, PRÓXIMA FECHA QUE SE PUEDE DILIGENCIAR UNO NUEVO '.$cuandoPuedo->format('Y-m-d');
                }
           
        }else{
            $data['puedo'] = false;
            $data['meserror']='Nnaj no tiene permiso de edad para crear Valoración y caracterización T.O';
        }
        return $data;
    }

    private function verificarPuedoEditar($modeloxx){
        if ( $modeloxx->user_crea_id == Auth::user()->id || Auth::user()->roles->first()->id == 1) {
            return true;
        }else{
            return false;
        }
    }
}


