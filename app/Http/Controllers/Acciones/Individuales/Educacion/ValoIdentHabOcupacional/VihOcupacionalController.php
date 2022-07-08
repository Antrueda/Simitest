<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\ValoIdentHabOcupacional;
use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Models\sistema\SisNnaj;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;

use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\Vih;
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
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'vihcocup';
        $this->opciones['routxxxx'] = 'vihcocup';
        $this->getOpciones();
        $this->middleware($this->getMware());

        $this->pestania2[0][4]=true;
        $this->pestania2[0][5] = 'active';
        $this->opciones['conthabi'] = [];
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
            $this->contarHabilidades($padrexxx);
            $this->getBotones(['crearxxx', [], 1, 'GUARDAR VALORACIÓN', 'btn btn-sm btn-primary submit-pvf']);
            return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],'padrexxx'=>$padrexxx]);
    }
    public function store(VihOcupacionalCrearRequest $request,SisNnaj $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id'=> $padrexxx->id]);
        return $this->setValoIdentificion([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Valoración e identificación de habilidades creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(Vih $modeloxx)
    {
        $this->contarHabilidades($modeloxx->nnaj);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'show'],'padrexxx'=>$modeloxx->nnaj]);
    }


    public function edit(Vih $modeloxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->fecha,
        ]);
        if ($puedexxx['tienperm']) {
            if ($this->verificarPuedoEditar($modeloxx)) {
                $this->opciones['puedetiempo'] = $puedexxx;
                $this->contarHabilidades($modeloxx->nnaj);
                $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
                $this->getBotones(['editarxx', [], 1, 'EDITAR VALORACIÓN ', 'btn btn-sm btn-primary']);
                return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx'=>$modeloxx->nnaj]);
            }else{
                return redirect()
                ->route('vihcocup', [$modeloxx->sis_nnaj_id])
                ->with('info', 'No tiene permiso para editar este formulario fue creado por otra persona.');
            }
            
        }else{
            return redirect()
            ->route('vihcocup', [$modeloxx->sis_nnaj_id])
            ->with('info', $puedexxx['msnxxxxx']);
        }
    }

    public function update(VihOcupacionalCrearRequest $request,  Vih $modeloxx)
    {
        return $this->setValoIdentificion([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Valoración e identificación de habilidades editado con éxito',
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

    private function verificarPuedoEditar($modeloxx){
        if ( $modeloxx->user_crea_id == Auth::user()->id || Auth::user()->roles->first()->id == 1) {
            return true;
        }else{
            return false;
        }
    }

    public function contarHabilidades(SisNnaj $padrexxx)
    {
        // $cuestionario=CgihCuestionario::where('sis_esta_id', 1)->where('sis_nnaj_id', $padrexxx->id)->orderBy('created_at', 'desc')->first();
       
        // $itemsxxx = [];
        // if($cuestionario!=null){
        // foreach ($cuestionario->habilidades as $key => $value) {
        //     $cursoxxx = $value->curso->s_cursos;
        //     $letraxxx = $value->letra->nombre;
        //     if (!array_key_exists($letraxxx, $itemsxxx)) {
        //         $itemsxxx[$letraxxx] = [1,$cursoxxx];
        //     } else {
        //         $itemsxxx[$letraxxx][0] += 1;
        //     }
        // }
        // }
        // $this->opciones['conthabi'] = $itemsxxx;
    }
}


