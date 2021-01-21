<?php

namespace App\Traits\Acciones\Grupales\Tallacciones;

use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Acciones\Grupales\AgRelacion;
use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Acciones\Grupales\AgTaller;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\Indicadores\Area;
use App\Models\Parametro;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisEntidad;
use App\Models\Sistema\SisEsta;
use App\Models\Tema;
use App\Models\User;

use Carbon\Carbon;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ActivarTallerTrait
{
   
    public function getActivar($activida)
    {
        $activarx=0;

        if(isset(AgAsistente::where('ag_actividad_id',$activida)->first()->id)){
            $activarx++;
        }
        if(isset(AgRelacion::where('ag_actividad_id',$activida)->first()->id)){
            $activarx++;
        }
        if(isset(AgResponsable::where('ag_actividad_id',$activida)->first()->id)){
            $activarx++;
        }

        if($activarx==3){
            $activida=AgActividad::find($activida);
            $activida->update(['incompleto'=>0]);
        }
       
    }
    
}
