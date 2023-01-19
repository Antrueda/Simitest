<?php

namespace App\Traits\Acciones\Grupales\Sena\Administracion\ProgramaAsignar;

use App\Models\Acciones\Grupales\InscripcionConvenios\Convenio;
use App\Models\Acciones\Grupales\InscripcionConvenios\Modalidad;
use App\Models\Acciones\Grupales\InscripcionConvenios\Programa;
use App\Models\Acciones\Grupales\InscripcionConvenios\SedeCentro;
use App\Models\Acciones\Grupales\InscripcionConvenios\Tipoprograma;
use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use App\Models\Sistema\SisEsta;
use App\Models\User;
use App\Models\Usuario\Estusuario;
use App\Traits\Combos\CombosTrait;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    use CombosTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function getVista($opciones, $dataxxxx)
    {
        $opciones['estadoxx'] = SisEsta::combo(['cabecera' => true, 'esajaxxx' => false]);
        $opciones['rutarchi'] = $opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $opciones['formular'] = $opciones['rutacarp'] . $opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $opciones['ruarchjs'] = [
            ['jsxxxxxx' => $opciones['rutacarp'] . $opciones['carpetax'] . '.Js.js']
        ];
        return $opciones;
    }
    public function view($opciones, $dataxxxx)
    {

        $opciones = $this->getVista($opciones, $dataxxxx);

        $opciones['convenio'] = Convenio::combo(true,false);
        $opciones['sedecent'] = SedeCentro::combo(true,false);
        $opciones['programa'] = Programa::combo(true,false);
        $opciones['tipoprog'] = Tipoprograma::combo(true,false);
        $opciones['modalida'] = Modalidad::combo(true,false);

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
         
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $estadoid=$dataxxxx['modeloxx']->sis_esta_id;
        }


        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
