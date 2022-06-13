<?php

use Illuminate\Support\Facades\Route;

$routexxx = 'repomodu';
$controll = "Reportes\\" . ucfirst($routexxx) . "Controller@";
Route::group(['prefix' => 'reportexx'], function () use ($routexxx, $controll) { //pruebas vero
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-asignarx|' . $routexxx . '-borrarxx' . $routexxx . 'activarx']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'getAreaindi',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-asignarx|' . $routexxx . '-borrarxx' . $routexxx . 'activarx']
    ])->name($routexxx . '.listaxxx');

    Route::get('listasig', [
        'uses' => $controll . 'getAreaindiAsignar',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-asignarx|' . $routexxx . '-borrarxx' . $routexxx . 'activarx']
    ])->name($routexxx . '.listasig');
    Route::get('nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
	])->name($routexxx . '.nuevoxxx');
    Route::post('crear', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.crearxxx');

    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'show',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.leerxxxx');
    Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'destroy',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'activate',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'activar',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
    // require_once('Reportex/web_reportex.php');
    // require_once('Usuariox/web_usuariox.php');
});





// require_once('Admin/web_indimodu.php');
// require_once('web_accion_gestion.php');
// require_once('web_area.php');
// require_once('web_diagnostico.php');
// require_once('web_actividad_ok.php');
// require_once('web_in_act_fuente_ok.php');
// require_once('web_grupales.php');
// //  require_once('web_doc_indicador.php');
// require_once('web_individuales.php');
// require_once('web_pregunta.php');
// // require_once('web_respuesta.php');
// require_once('web_validacion.php');
// require_once('web_valoracion_ok.php');
// require_once('web_valoracion.php');
