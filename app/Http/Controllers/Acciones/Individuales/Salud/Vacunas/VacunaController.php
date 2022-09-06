<?php


namespace App\Http\Controllers\Acciones\Individuales\Salud\Vacunas;


use Illuminate\Http\Request;
use App\Models\Permissionext;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Salud\Vacunas\Administracion\VacunaCrearRequest;
use App\Http\Requests\Acciones\Individuales\Salud\Vacunas\Administracion\VacunaEditRequest;
use App\Models\Acciones\Individuales\Salud\Vacunas\TipoVacuna;
use App\Models\Acciones\Individuales\Salud\Vacunas\Vacuna;
use Illuminate\Support\Facades\Auth;
use App\Traits\Acciones\Individuales\Salud\Vacunas\Administracion\AdmiVacunasCrudTrait;
use App\Traits\Acciones\Individuales\Salud\Vacunas\Administracion\AdmiVacunasDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\Vacunas\Administracion\AdmiVacunasListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Vacunas\Administracion\AdmiVacunasPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Vacunas\Administracion\Vacuna\VacunaParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\Vacunas\Administracion\Vacuna\VacunaVistasTrait;

class VacunaController extends Controller
{
    
   
    use VacunaVistasTrait;
    use VacunaParametrizarTrait;
    use AdmiVacunasDataTablesTrait;
    use AdmiVacunasListadosTrait;
    use AdmiVacunasPestaniasTrait;
    use AdmiVacunasCrudTrait;
    use CombosTrait;



    public function __construct()
    {
        $this->opciones['permisox'] = 'vacuna';
        $this->opciones['routxxxx'] = 'vacuna';
        $this->pestania[1][4] = true;
        $this->pestania[1][5] = 'active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index($padrexxx)
    {
        $this->pestania[1][2] = [$padrexxx];
        $this->getPestanias([]);
        $this->getTablasActividades($padrexxx);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create($padrexxx)
    {
        $this->opciones['parametr'] = [$padrexxx];
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR VACUNA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],'padrexxx'=>$padrexxx]);
    }


    public function store(VacunaCrearRequest $request,TipoVacuna $padrexxx)
    {

        $request->request->add(['tipo_vacunas_id' => $padrexxx->id]);
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setAsdActividad([
            'requestx' => $request,
            'modeloxx' => '',
            'itemxxxx' =>$padrexxx->item,
            'infoxxxx' =>       'Habilidad creada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(Vacuna $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->tipo_vacunas_id];
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'],'padrexxx'=>$modeloxx->tipo_vacunas_id]);
    }


    public function edit(Vacuna $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->tipo_vacunas_id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR VACUNA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx'=>$modeloxx->tipo_vacunas_id]);
    }


    public function update(VacunaEditRequest $request,  Vacuna $modeloxx)
    {
        return $this->setAsdActividad([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Habilidad editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(Vacuna $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->tipo_vacunas_id];
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR VACUNA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->tipo_vacunas_id]);
    }


    public function destroy(Request $request, Vacuna $modeloxx)
    {


        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->tipo_vacunas_id])
            ->with('info', 'Vacuna inactivada correctamente');
    }

    public function activate(Vacuna $modeloxx)
    {
        $this->pestania[1][2] = [$modeloxx->tipo_vacunas_id];
        $this->getBotones(['activarx', [], 1, 'ACTIVAR VACUNA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->tipo_vacunas_id]);

    }
    public function activar(Request $request, Vacuna $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->tipo_vacunas_id])
            ->with('info', 'Vacuna activada correctamente');
    }
}
