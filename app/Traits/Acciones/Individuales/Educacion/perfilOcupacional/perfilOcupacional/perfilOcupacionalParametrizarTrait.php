<?php
use Carbon\Carbon;
     
namespace App\Traits\Acciones\Individuales\Educacion\perfilOcupacional\perfilOcupacional;

use Carbon\Carbon;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait perfilOcupacionalParametrizarTrait
{
public $opciones;
/**
 * permisos del middleware
 *

 * @return $usuariox
 */
public function getMware()
{
    $permisos = ['permission:'
        . $this->opciones['permisox'] . '-leerxxxx|'
        . $this->opciones['permisox'] . '-crearxxx|'
        . $this->opciones['permisox'] . '-editarxx|'
        . $this->opciones['permisox'] . '-borrarxx|'
        . $this->opciones['permisox'] . '-activarx'];


    return  $permisos;
}
/**
 * inicializar las opciones con las que se arman las vistas
 *
 * @return $opciones
 */
public function getOpciones()
{
    $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
    $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
    $this->opciones['tituhead'] = 'PERFIL OCUPACIONAL ';
    // $this->opciones['routxxxx'] = $this->opciones['permisox'];
    $this->opciones['slotxxxx'] = $this->opciones['permisox'];
    $this->opciones['perfilxx'] = 'conperfi';
    $this->opciones['rutacarp'] = 'Acciones.Individuales.Educacion.perfilOcupacional.';
    $this->opciones['parametr'] = [];
    $this->opciones['routingx'] = [];
    $this->opciones['carpetax'] = 'perfilOcupacional';
    /** botones que se presentan en los formularios */
    $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
    /** informacion que se va a mostrar en la vista */
    $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.formulario';
    /** ruta que arma el formulario */
    $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
    $this->opciones['tituloxx'] = "PERFIL OCUPACIONAL";
    $this->opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');

}

public function getBotones($dataxxxx)
{
    $mostboto=false;
    if (auth()->user()->can($this->opciones['permisox'] . '-' . $dataxxxx[0])) {
        $mostboto=true;
    }
    $this->opciones['botoform'][] = [
        'mostboto'=>$mostboto,
        'routingx' => $dataxxxx[1],
        'formhref' => $dataxxxx[2],
        'tituloxx' => $dataxxxx[3],
        'clasexxx' => $dataxxxx[4],
    ];
    return $this->opciones;
}
}






// {
//     public $opciones;
//     /**
//      * permisos del middleware
//      *

//      * @return $usuariox
//      */
//     public function getMware()
//     {
//         $permisos = ['permission:'


 
//             . $this->opciones['permisox'] . '-leer|'
//             . $this->opciones['permisox'] . '-crear|'
//             . $this->opciones['permisox'] . '-editar|'
//             . $this->opciones['permisox'] . '-borrar|'
//            ];
//         return  $permisos;
//     }
//     /**
//      * inicializar las opciones con las que se arman las vistas
//      *
//      * @return $opciones
//      */
//     public function getOpciones()

//     {
//         $this->opciones['vocalesx'] = ['Á', 'É', 'Í', 'Ó', 'Ú'];
//         $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
//         $this->opciones['tituhead'] = 'FORMATO PERFIL OCUPACIONAL';
//        // $this->opciones['routxxxx'] = 'fpoaplicacion';
//         $this->opciones['slotxxxx'] =  $this->opciones['permisox'];
//         $this->opciones['perfilxx'] = 'conperfi';
//         $this->opciones['rutacarp'] = 'Acciones.Individuales.Educacion.perfilOcupacional.';
//         $this->opciones['parametr'] = [];
//         $this->opciones['routingx'] = [];
//         $this->opciones['carpetax'] = 'perfilOcupacional';
//         /** botones que se presentan en los formularios */
//         $this->opciones['botonesx'] = $this->opciones['rutacarp'] . 'Acomponentes.Botones.botonesx';
//         /** informacion que se va a mostrar en la vista */
//         $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.formulario.formulario';
//         /** ruta que arma el formulario */
//         $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.index';
//         $this->opciones['tituloxx'] = "FORMATO PERFIL OCUPACIONAL";
//     }

//     public function getBotones($dataxxxx)
//     {
//         $mostboto=false;
//         if (auth()->user()->can($this->opciones['permisox'] . '-' . $dataxxxx[0])) {
//             $mostboto=true;
//         }
//         $this->opciones['botoform'][] = [
//             'mostboto'=>$mostboto,
//             'routingx' => $dataxxxx[1],
//             'formhref' => $dataxxxx[2],
//             'tituloxx' => $dataxxxx[3],
//             'clasexxx' => $dataxxxx[4],
//         ];
//         return $this->opciones;
//     }
// }
















