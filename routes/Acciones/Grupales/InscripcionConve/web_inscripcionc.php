<?php
$routxxxx = 'inscricon';
$controll = 'Acciones\Grupales\InscripcionSena\InscripcionSena';
Route::group(['prefix' => 'InscripcionCovenio'], function () use ($controll, $routxxxx) {
    Route::get('', [
	    'uses' => $controll.'Controller@index',
	    'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
    ])->name($routxxxx);
    Route::get('nnajs', [
        'uses' => $controll . 'Controller@getNnajInscri',
        'middleware' => ['permission:' . $routxxxx . '-leer']
	])->name($routxxxx . '.imatriculannaj');
	Route::get('{padrexxx}/nnajs', [
        'uses' => $controll . 'Controller@getNnajInscri',
        'middleware' => ['permission:' . $routxxxx . '-leer']
	])->name($routxxxx . '.matriculannaj');
	Route::get('listaxxx', [
        'uses' => $controll . 'Controller@getInscripcion',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listaxxx');

	Route::get('nuevo', [
	    'uses' => $controll.'Controller@create',
	    'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.nuevo');
	Route::post('nuevo', [
	    'uses' => $controll.'Controller@store',
	    'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.crear');

	Route::get('editar/{modeloxx}', [
	    'uses' => $controll.'Controller@edit',
	    'middleware' => ['permission:'.$routxxxx.'-editar']
	])->name($routxxxx.'.editar');
	Route::put('editar/{modeloxx}', [
		
	    'uses' => $controll.'Controller@update',
	    'middleware' => ['permission:'.$routxxxx.'-editar']
	])->name($routxxxx.'.editar');
	Route::get('ver/{modeloxx}', [
	    'uses' => $controll.'Controller@show',
	    'middleware' => ['permission:'.$routxxxx.'-leer']
	])->name($routxxxx.'.ver');
	Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@inactivate',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.borrar');

    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@destroy',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.borrar');

    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'Controller@activate',
        'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');

    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'Controller@activar',
        'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');
	Route::get('sede', [
        'uses' => $controll . 'Controller@getSede',
        'middleware' => ['permission:' . $routxxxx . '-leer']
	])->name($routxxxx . '.sede');
	Route::get('program', [
        'uses' => $controll . 'Controller@getProgram',
        'middleware' => ['permission:' . $routxxxx . '-leer']
	])->name($routxxxx . '.program');

    Route::get('tipopro', [
        'uses' => $controll . 'Controller@getTipopro',
        'middleware' => ['permission:' . $routxxxx . '-leer']
	])->name($routxxxx . '.tipopro');
    Route::get('modalida', [
        'uses' => $controll . 'Controller@getModal',
        'middleware' => ['permission:' . $routxxxx . '-leer']
	])->name($routxxxx . '.modalida');

	Route::get('getServicios', [
        'uses' => $controll . 'Controller@getServiciosUpiMa',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.servicio');

	Route::get('responsable', [
        'uses' => $controll . 'Controller@getResponsableUpiMatricula',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.responsable');



	
});
     
require_once('web_inscripcionnnaj.php');
require_once('web_moduloInscr.php');
