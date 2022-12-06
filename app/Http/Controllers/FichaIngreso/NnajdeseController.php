<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajUpi;
use App\Traits\Combos\CombosTrait;
use App\Traits\Fi\Nnajdese\NnajdeseCrudTrait;
use App\Traits\Fi\Nnajdese\NnajdeseDataTablesTrait;
use App\Traits\Fi\Nnajdese\NnajdeseListadoTrait;
use App\Traits\Fi\Nnajdese\NnajdeseVistasTrait;
use Illuminate\Support\Facades\Auth;

class NnajdeseController extends Controller
{
    private $opciones = [
        'modeloxx' => null,
        'parametr' => [],
        'botoform' => [],
    ];
    use NnajdeseListadoTrait;
    use NnajdeseVistasTrait; // parametrización de las vistas de datos basicos
    use NnajdeseDataTablesTrait;
    use NnajdeseCrudTrait; // realizar el guardado de datos basicos

    use CombosTrait;

    public function __construct()
    {
        $this->getConfigVistas();
        $this->middleware($this->getMware());
        $this->opciones['perfilxx'] = 'conperfi';

    }
    public function getMware()
    {
        $permisos = ['permission:'
            . $this->opciones['permisox'] . '-listaxxx|'
            . $this->opciones['permisox'] . '-inactiva|'
            . $this->opciones['permisox'] . '-activarx'];
        return  $permisos;
    }

    public function index(NnajUpi $dependen)
    {
        $this->opciones['usuariox'] = $dependen->sisNnaj->fiDatosBasico;
        $this->getIndex([
            'vercrear' => false,
            'titunuev' => "NUEVO {$this->opciones['titucont']}",
            'titulist' => "LISTA DE {$this->opciones['titucont']}",
            'permisox' => $this->opciones['permisox'] . '-crear',
            'parametr' => [$dependen->id],
        ]);
        $this->opciones['tablasxx'][0]['forminde'] = '';
        // $this->getPestanias([]);
        return view($this->opciones['pestania'], ['todoxxxx' => $this->opciones]);
    }

   
    public function inactivate(NnajDese $modeloxx)
    {

        $this->opciones['accionxx'] = 'inactiva';
        $this->opciones['usuariox'] = $modeloxx->nnajUpi->sisNnaj->fiDatosBasico;
        $this->opciones['modeloxx'] = $modeloxx;

        $this->getBotones(['listaxxx', [$this->opciones['permisox'] , [$modeloxx->nnaj_upi_id]], 2, 'VOLVER A SERVICIOS', 'btn btn-sm btn-primary']);

        $this->getBotones(['inactiva', [$this->opciones['permisox'] , [$modeloxx->nnaj_upi_id]], 1, 'INACTIVAR', 'btn btn-sm btn-primary']);



        return $this->view();
    }

    public function destroy(NnajDese $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::id(),]);
        return redirect()
            ->route($this->opciones['permisox'] , [$modeloxx->nnaj_upi_id])
            ->with('info', 'Upi inactivada correctamente');
    }

    public function activate(NnajDese $modeloxx)
    {
        $this->opciones['accionxx'] = 'activarx';
        $this->opciones['usuariox'] = $modeloxx->nnajUpi->sisNnaj->fiDatosBasico;
        $this->opciones['modeloxx'] = $modeloxx;


        $this->getBotones(['listaxxx', [$this->opciones['permisox'] , [$modeloxx->nnaj_upi_id]], 2, 'VOLVER A SERVICIOS', 'btn btn-sm btn-primary']);
        $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary']);
        return $this->view();
    }

    public function activar(NnajDese $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::id(),]);
        return redirect()
            ->route($this->opciones['permisox'] , [$modeloxx->nnaj_upi_id])
            ->with('info', 'Upi activada correctamente');
    }
}
