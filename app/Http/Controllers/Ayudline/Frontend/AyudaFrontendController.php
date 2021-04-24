<?php

namespace app\Http\Controllers\Ayudline\Frontend;

use App\Models\Ayuda\Ayuda;
use App\Http\Controllers\Controller;

use App\Traits\Ayudline\DataTablesTrait;
use App\Traits\Ayudline\CrudTrait;
use App\Traits\Ayudline\Frontend\Ayudaxxx\VistasTrait;
use App\Traits\Ayudline\ListadosTrait;
use App\Traits\Ayudline\PestaniasTrait;

class AyudaFrontendController extends Controller
{
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    public function __construct()
    {
        $this->getConfigVistas();
        $this->middleware($this->getMwareN());
    }

}
