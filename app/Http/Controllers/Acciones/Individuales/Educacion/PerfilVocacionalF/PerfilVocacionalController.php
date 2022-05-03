<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\PerfilVocacionalF;

use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\sistema\SisNnaj;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfPerfilVoca;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional\PvCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional\PvVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional\PvListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional\PvPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional\PvDataTablesTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacionalCrearRequest;
use App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\PerfilVocacional\PvParametrizarTrait;

class PerfilVocacionalController extends Controller
{
    use PvParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PvPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use PvListadosTrait; // trait que arma las consultas para las datatables
    use PvCrudTrait; // trait donde se hace el crud de localidades

    use PvDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use PvVistasTrait; // trait que arma la logica para lo metodos: crud
    use  ManageTimeTrait;
    
    public function __construct()
    {
        $this->opciones['permisox'] = 'pvocacif';
        $this->opciones['routxxxx'] = 'pvocacif';
        $this->getOpciones();
        $this->middleware($this->getMware());

        $this->pestania2[0][4]=true;
        $this->pestania2[0][5] = 'active';
    }

    public function index(SisNnaj $padrexxx)
    {
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->pestania2[0][2]=$padrexxx->id;

        $this->getPestanias([]);
        $this->getTablas($padrexxx->id);
        return view($this->opciones['rutacarp'] . 'PerfilVocacional.pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(SisNnaj $padrexxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => Carbon::now()->toDateString(),
        ]);
        $this->opciones['puedetiempo'] = $puedexxx;

        $puedoCrear=$this->verificarPuedoCrear($padrexxx);
        if ($puedoCrear['puedo']) {
            $this->opciones['parametr'] = [$padrexxx->id];
            $this->getBotones(['crearxxx', [], 1, 'GUARDAR PERFIL VOCACIONAL', 'btn btn-sm btn-primary submit-pvf']);
            return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],'padrexxx'=>$padrexxx]);
        }else{
            return redirect()
            ->route('pvocacif', [$padrexxx->id])
            ->with('info', $puedoCrear['meserror']);
        }
    }
    public function store(PerfilVocacionalCrearRequest $request,SisNnaj $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id'=> $padrexxx->id]);
        return $this->setPerfilVocacional([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Perfil vacacional creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(PvfPerfilVoca $modeloxx)
    {
        return $this->viewVer(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'show'],'padrexxx'=>$modeloxx->nnaj]);
    }


    public function edit(PvfPerfilVoca $modeloxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->fecha,
        ]);
        if ($puedexxx['tienperm']) {
            if ($this->verificarPuedoEditar($modeloxx)) {
                $this->opciones['puedetiempo'] = $puedexxx;
                $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
                $this->getBotones(['editarxx', [], 1, 'EDITAR PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
                return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx'=>$modeloxx->nnaj]);
            }else{
                return redirect()
                ->route('pvocacif', [$modeloxx->sis_nnaj_id])
                ->with('info', 'No tiene permiso para editar este formulario fue creado por otra persona.');
            }
            
        }else{
            return redirect()
            ->route('pvocacif', [$modeloxx->sis_nnaj_id])
            ->with('info', $puedexxx['msnxxxxx']);
        }
    }

    public function update(PerfilVocacionalCrearRequest $request,  PvfPerfilVoca $modeloxx)
    {
        return $this->setPerfilVocacional([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Formato perfil vacacional editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(PvfPerfilVoca $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
        return $this->viewSimple(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->nnaj]);
    }

    public function destroy(Request $request, PvfPerfilVoca $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->nnaj])
            ->with('info', 'Formato perfil vocacional inactivado correctamente');
    }

    public function activate(PvfPerfilVoca $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR PERFIL VOCACIONAL', 'btn btn-sm btn-primary']);
        return $this->viewSimple(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->nnaj]);
    }

    public function activar(Request $request, PvfPerfilVoca $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->nnaj])
            ->with('info', 'Formato perfil vocacional activado correctamente');
    }

    private function verificarPuedoCrear($padrexxx){
        $date = new DateTime();

        $data=[];
        if ($padrexxx->fi_datos_basico->nnaj_nacimi->Edad >= 10 && $padrexxx->fi_datos_basico->nnaj_nacimi->Edad < 29) {
            $data['puedo'] = true;

            $ultimoperfil = PvfPerfilVoca::where('sis_esta_id',1)->where('sis_nnaj_id',$padrexxx->id)->orderBy('created_at','desc')->first();
                if ($ultimoperfil != null) {
                    $fecha1= new DateTime($ultimoperfil->fecha);
                    $diff = $date->diff($fecha1);
                    $days=$diff->days;
                }else{
                    $days=366;
                }
                
                if ($days > 365) {
                    $data['puedo'] = true;

                    $matricul =$padrexxx->Matricula;
                    $matriculaCurso=MatriculaCurso::where('sis_esta_id',1)->where('sis_nnaj_id',$padrexxx->id)->orderBy('created_at','desc')->first();
            
                    if ($matricul != "" && $matricul >= 9 || $matriculaCurso != null) {
                        $data['puedo'] = true;
                    }else{
                        $data['puedo'] = false;
                        $data['meserror']='Nnaj no tiene matricula activa,academia superior a octavo o matricula talleres.';
                    }
                }else{
                    $hoy = $date;
                    $data['puedo'] = false;
                    $cuandoPuedo = 365 - $days;
                    $cuandoPuedo = $hoy->modify('+ '.$cuandoPuedo.' day');
                
                    $data['meserror']='Solo podrá diligenciar el formato de perfil vocacional anualmente, PRÓXIMA FECHA QUE SE PUEDE DILIGENCIAR UNO NUEVO '.$cuandoPuedo->format('Y-m-d');
                }
           
        }else{
            $data['puedo'] = false;
            $data['meserror']='Nnaj no tiene permiso de edad para crear perfil vocacional';
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


