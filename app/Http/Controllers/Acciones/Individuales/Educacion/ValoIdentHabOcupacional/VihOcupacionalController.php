<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\ValoIdentHabOcupacional;
use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\sistema\SisNnaj;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfPerfilVoca;


use App\Http\Requests\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\VihOcupacionalCrearRequest;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\ValoIdentHabOcupacional\VihCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\ValoIdentHabOcupacional\VihVistasTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\ValoIdentHabOcupacional\VihListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\ValoIdentHabOcupacional\VihPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\ValoIdentHabOcupacional\VihDataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\ValoIdentHabOcupacional\VihParametrizarTrait;

class VihOcupacionalController extends Controller
{
    use VihParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VihPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use VihListadosTrait; // trait que arma las consultas para las datatables
    use VihCrudTrait; // trait donde se hace el crud de localidades
    use VihDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VihVistasTrait; // trait que arma la logica para lo metodos: crud
    use  ManageTimeTrait;
    
    public function __construct()
    {
        $this->opciones['permisox'] = 'vihcocup';
        $this->opciones['routxxxx'] = 'vihcocup';
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
        return view($this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(SisNnaj $padrexxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => Carbon::now()->toDateString(),
        ]);
        $this->opciones['puedetiempo'] = $puedexxx;
       
            $this->opciones['parametr'] = [$padrexxx->id];
            $this->getBotones(['crearxxx', [], 1, 'GUARDAR PERFIL VOCACIONAL', 'btn btn-sm btn-primary submit-pvf']);
            return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],'padrexxx'=>$padrexxx]);
    }
    public function store(VihOcupacionalCrearRequest $request,SisNnaj $padrexxx)
    {
        dd($request->all());
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

   
}


