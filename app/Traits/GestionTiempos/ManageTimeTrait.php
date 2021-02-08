<?php

namespace App\Traits\GestionTiempos;

use App\Models\Sistema\SisDepen;
use Illuminate\Support\Facades\Auth;

/**
 * este trait permite gestionar permisos de acuerdo al tiempo asignado para el carge de informacion
 * el cargue se debe gestionar de la siguiente manenera:
 * 1 si es fin de mes debe permitir cargar hasta los dos primeros días hábiles del siguiente mes
 * 2 si es dia intermedio solo debe permitir cargar hasta hoy
 * 3 el sistema debe permitir cargar informacion hacia atrás teniendo en cuenta el numero de días
 *   y este cargue se debe contar a partir del dia hoy
 *
 * estas validaciones se deben hacer con la fecha de diligenciamiento del formato
 */
trait ManageTimeTrait
{
    use ManageDateTrait;
    /**
     * gestiona el cargue de información de acuerdo al tiempo asignado al usuario registrado
     *
     * @return void
     */
    public function getPersonal($dataxxxx)
    {
        return $this->getGabelaFinMes($dataxxxx);
    }

    /**
     * gestiona el cargue de información de acuerdo al tiempo asignado al cargo del usuario registrado
     *
     * @return void
     */
    public function getCargo($dataxxxx)
    {
        return  $this->getGabelaFinMes($dataxxxx);
    }
    /**
     * gistiona el cargue de información de acuerdo al tiempo asignado a la upi asignada al usuario registrado
     *
     * @return void
     */
    public function getUpi(array $dataxxxx)
    {
        return $this->getGabelaFinMes($dataxxxx);
    }

    /**
     * gestiona los permiso de acuerdo al tiempo asignado para todo lo que tiene que ver con las acciones
     *
     * @return void
     */
    public function getAcciones(array $dataxxxx)
    {
        $userxxxx = $dataxxxx['usuariox'] = Auth::user();
        $itieusua = $userxxxx->itiestan + $userxxxx->itiegabe;
        $itiecarg = $userxxxx->sis_cargo->itiestan + $userxxxx->sis_cargo->itiegabe;
        if ($itieusua > $itiecarg) {
            $dataxxxx['tiempoxx'] = $itieusua;
            $dataxxxx = $this->getPersonal($dataxxxx);
        } else {
            $dataxxxx['tiempoxx'] = $itiecarg;
            $dataxxxx = $this->getCargo($dataxxxx);
        }
        $dataxxxx['msnxxxxx'] = 'NO TIENE PREMISOS PARA REGISTRAR INFORMACIÓN INFERIOR A LA FECHA: ' . $dataxxxx['fechlimi'];
        return $dataxxxx;
    }

    /**
     * gestiona los permiso de acuerdo al tiempo asignado para todo lo que tiene que ver con las asistencias
     *
     * @return void
     */
    public function getAsistencias(array $dataxxxx)
    {
        $upixxxxx = SisDepen::find($dataxxxx['upixxxxx']);
        $dataxxxx['usuariox'] = $upixxxxx;
        $dataxxxx['tiempoxx'] = $upixxxxx->itiestan + $upixxxxx->itiegabe;
        $dataxxxx = $this->getUpi($dataxxxx);
        $dataxxxx['msnxxxxx'] = 'NO TIENE PREMISOS PARA REGISTRAR INFORMACIÓN INFERIOR A LA FECHA: ' . $dataxxxx['fechlimi'];
        return $dataxxxx;
    }

    /**
     * gestiona los permisos para acciones o asistencias
     *
     * NOTA: se debe indicar en donde está para saber si los permisos se deben gestionar
     * por acciones o por asistencias
     * @return void
     */
    public function getPuedeCargar(array $dataxxxx)
    {

        $respuest = [];
        switch ($dataxxxx['estoyenx']) {
            case 1: // cargue por acciones
                $respuest = $this->getAcciones($dataxxxx);
                break;
            case 2: // cargue por asistencias
                // $respuest=['tienperm'=>true];
                $respuest = $this->getAsistencias($dataxxxx);
                break;
        }
        return $respuest;
    }

    /**
     * notas para tener en cuenta
     *
     * los días festivos se deben administrar por base de datos
     */
}
