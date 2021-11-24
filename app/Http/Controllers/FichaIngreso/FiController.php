<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Traits\Fi\FiTrait;
use App\Traits\Fi\Datobasi\DBControllerTrait;
use App\Traits\Fi\Datobasi\DBCrudTrait;
use App\Traits\Fi\FiDataTablesTrait;
use App\Traits\Fi\Datobasi\DBVistasTrait;
use App\Traits\Fi\Datobasi\EspejoTrait;
use App\Traits\Interfaz\Antisimi\CedulasBienTrait;
use App\Traits\Interfaz\ComposicionFamiliarTrait;
use App\Traits\Interfaz\InterfazFiTrait;
use App\Traits\Interfaz\Nuevsimi\BarrioTrait;
use App\Traits\Puede\PuedeTrait;
use Carbon\Carbon;

class FiController extends Controller
{
    use FiTrait;
    use DBVistasTrait; // parametrización de las vistas de datos basicos
    use DBControllerTrait; // todos los metodos del controlador
    use FiDataTablesTrait;
    use DBCrudTrait; // realizar el guardado de datos basicos
    use InterfazFiTrait;
    use PuedeTrait;
    use ComposicionFamiliarTrait;
    use CedulasBienTrait;
    use BarrioTrait;
    use EspejoTrait;
    public function __construct()
    {
        $this->getConfigVistas();
        $this->middleware($this->getMware());
    }

    public function indexComponetefami()
    {
        $this->opciones['slotxxxx']='compnnaj';
        // $this->getNnajSinCompfami(); // solo descomentariar cuando se necesite
        // $permissionNames = Auth::user()->permissions; ddd($permissionNames->first());
        // Auth::user()->givePermissionTo('territorio-modulo');
        $this->getCompnnajFDT([
            'vercrear' => false,
            'titunuev' => "NUEVO {$this->opciones['titucont']}",
            'titulist' => "LISTA DE COMPONENTES FAMILIARES PARA PASAR A {$this->opciones['titucont']}",
            'permisox' => $this->opciones['permisox'] . '-crear',
        ]);
        $this->opciones['tablasxx'][0]['forminde'] = '';
        $respuest = $this->indexOGT();
        return $respuest;
    }
}
