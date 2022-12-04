<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajUpi;
use App\Traits\Combos\CombosTrait;
use App\Traits\Fi\Upinnajx\UpinnajxCrudTrait;
use App\Traits\Fi\Upinnajx\UpinnajxDataTablesTrait;
use App\Traits\Fi\Upinnajx\UpinnajxListadoTrait;
use App\Traits\Fi\Upinnajx\UpinnajxVistasTrait;
use Illuminate\Support\Facades\Auth;

class FiUpinnajController extends Controller
{
    private $opciones =[
        'modeloxx'=>null,
        'parametr'=>[],
        
        'botoform' => [],
];
    use UpinnajxListadoTrait;
    use UpinnajxVistasTrait; // parametrización de las vistas de datos basicos
    use UpinnajxDataTablesTrait;
    use UpinnajxCrudTrait; // realizar el guardado de datos basicos

    use CombosTrait;

    public function __construct()
    {
        $this->getConfigVistas();
        $this->middleware($this->getMware());
    }
    public function getMware()
    {
        $permisos = ['permission:'
            . $this->opciones['permisox'] . '-listaxxx|'
            . $this->opciones['permisox'] . '-inactiva|'
            . $this->opciones['permisox'] . '-activarx'];
        return  $permisos;
    }

    public function index()
    {
        // Permissionext::create([
        //     'name' => 'fiupinna-listnnaj',
        //     'descripcion' => 'Permiso que permite ativar las dependencia que tiene asociadas el nnaj',
        //     'sis_pestania_id' => 1,
        //     'user_crea_id' => 1,
        //     'user_edita_id' => 1,
        //     'sis_esta_id' => 1
        // ]);


        $this->opciones['perfilxx'] = 'sinperfi';

        $this->getIndex([
            'vercrear' => false,
            'titunuev' => "NUEVO {$this->opciones['titucont']}",
            'titulist' => "LISTA DE {$this->opciones['titucont']}",
            'permisox' => $this->opciones['permisox'] . '-crear',
        ]);
        $this->opciones['tablasxx'][0]['forminde'] = '';
        // $this->getPestanias([]);
        return view($this->opciones['pestania'], ['todoxxxx' => $this->opciones]);
    }

    public function indexUpisnnaj(FiDatosBasico $nnajxxxx)
    {
        $this->opciones['perfilxx'] = 'conperfi';
        $this->opciones['usuariox'] = $nnajxxxx;

        $this->getIndexUpisnnaj([
            'vercrear' => false,
            'titunuev' => "NUEVO {$this->opciones['titucont']}",
            'titulist' => "LISTA DE UPIS {$this->opciones['titucont']}",
            'permisox' => $this->opciones['permisox'] . '-crear',
            'pararout' => [$nnajxxxx->sis_nnaj_id]
        ]);
        $this->opciones['tablasxx'][0]['forminde'] = '';
        // $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function inactivate(NnajUpi $modeloxx)
    {
       
        $this->opciones['accionxx'] = 'inactiva';
        $this->opciones['usuariox'] = $modeloxx->sisNnaj->fiDatosBasico;
        $this->opciones['modeloxx'] = $modeloxx;
        
        $this->getBotones(['listaxxx', [$this->opciones['permisox'].'.upisnnaj', [$this->opciones['usuariox']->id]], 2, 'VOLVER UPIS NNAJ', 'btn btn-sm btn-primary']);

        $this->getBotones(['inactiva', [$this->opciones['permisox'].'.upisnnaj', [$this->opciones['usuariox']->id]], 1, 'VOLVER UPIS NNAJ', 'btn btn-sm btn-primary']);



        return $this->view();
    }

    public function destroy(NnajUpi $modeloxx)
    {
        $modeloxx->update(['sis_esta_id'=>2, 'user_edita_id'=>Auth::id(),]);
        return redirect()
            ->route( $this->opciones['permisox'].'.upisnnaj', [ $modeloxx->sisNnaj->fiDatosBasico->id])
            ->with('info', 'Upi inactivada correctamente');
    }

    public function activate(NnajUpi $modeloxx)
    {
        $this->opciones['accionxx'] = 'activarx';
        $this->opciones['usuariox'] = $modeloxx->sisNnaj->fiDatosBasico;
        $this->opciones['modeloxx'] = $modeloxx;
       

        $this->getBotones(['listaxxx', [$this->opciones['permisox'].'.upisnnaj', [$this->opciones['usuariox']->id]], 2, 'VOLVER UPIS NNAJ', 'btn btn-sm btn-primary']);
        $this->getBotones(['activarx', [], 1, 'ACTIVAR UPI NNAJ', 'btn btn-sm btn-primary']);
        return $this->view();
    }

    public function activar(NnajUpi $modeloxx)
    {
        $modeloxx->update(['sis_esta_id'=>1, 'user_edita_id'=>Auth::id(),]);
        return redirect()
            ->route( $this->opciones['permisox'].'.upisnnaj', [ $modeloxx->sisNnaj->fiDatosBasico->id])
            ->with('info', 'Upi activada correctamente');
    }
}
