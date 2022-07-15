<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\CuestionarioGustos;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesCrudTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesPestaniasTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\AdmiCuesDataTablesTrait;
use App\Http\Requests\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\LimiteCrearRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\LimiteEditarRequest;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihLimite;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\CgihLimite\CgihLimiteParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\Administracion\CgihLimite\CgihLimiteVistasTrait;
use DateTime;

class CgihLimiteController extends Controller
{
    use CgihLimiteVistasTrait;
    use AdmiCuesDataTablesTrait;
    use AdmiCuesListadosTrait;
    use AdmiCuesPestaniasTrait;
    use CgihLimiteParametrizarTrait;
    use AdmiCuesCrudTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'cgihlimite';
        $this->opciones['routxxxx'] = 'cgihlimite';

        $this->pestania[1][3] = true;
        $this->pestania[1][5] = 'active';

        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {        

        $this->getPestanias([]);
        $this->getTablasLimite();
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    public function create()
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR LIMITE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'],]);
             
    }
    public function store(LimiteCrearRequest $request)
    {
        $request->request->add(['sis_esta_id' => 1]);
        return $this->setLimite([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Limite creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(CgihLimite $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario']]);
    }


    public function edit(CgihLimite $modeloxx)
    {
        $this->pestania[1][4] =true;
        $this->pestania[1][2] =[$modeloxx->id];
        $this->getBotones(['editarxx', [], 1, 'EDITAR LIMITE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],]);
    }


    public function update(LimiteEditarRequest $request,  CgihLimite $modeloxx)
    {
        return $this->setLimite([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Limite editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(CgihLimite $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR LIMITE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->sis_nnaj]);
    }


    public function destroy(Request $request, CgihLimite $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Limite inactivado correctamente');
    }

    public function activate(CgihLimite $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR LIMITE', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx']]);

    }
    public function activar(Request $request, CgihLimite $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [])
            ->with('info', 'Limite activado correctamente');
    }

    
    private function verificarPuedoCrear($padrexxx)
    {
        $date = new DateTime();
        $data = [];

            $ultimoperfil = CgihLimite::where('sis_esta_id', 1);
            if ($ultimoperfil != null) {
                $data['meserror'] = 'Solo podrá diligenciar el cuestionario de Gustos e Intereses, PRÓXIMA FECHA QUE SE PUEDE DILIGENCIAR UNO NUEVO ';

             
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
    
        return $data;
    }

}
