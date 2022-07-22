<?php
$routxxxx = 'vsmedicina';
$controll = 'Acciones\Individuales\Salud\ValoracionMedicina\VsMedicinaGeneral';
Route::group(['prefix' => '{padrexxx}/VsMedicinaGen'], function () use ($controll, $routxxxx) {
    Route::get('', [
	    'uses' => $controll.'Controller@index',
	    'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
    ])->name($routxxxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'Controller@listaMedicinaGeneral',
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

	Route::get('listodox', [
        'uses' => $controll . 'Controller@getTodoComFami',
        'middleware' => ['permission:' . $routxxxx . '-leer|']
    ])->name($routxxxx . '.listodox');


    Route::get('listaxxz', [
        'uses' => $controll . 'Controller@listaDiagnostico',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listaxxz');

    Route::get('listaxxy', [
        'uses' => $controll . 'Controller@listaDiagnosticoNnaj',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listaxxy');
    
    Route::get('responsar', [
        'uses' => $controll . 'Controller@getResponsableUpiR',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.responsar');


    Route::get('upiservicio', [
        'uses' => $controll . 'Controller@getUpiTServicio',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.upiservicio');


    
});

Route::group(['prefix' => 'VsMedicinaGenerals'], function () use ($controll, $routxxxx) {

    Route::get('getServicios', [
        'uses' => $controll . 'Controller@getServiciosUpi',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.servicio');
	Route::get('curso', [
        'uses' => $controll . 'Controller@getCurso',
        'middleware' => ['permission:' . $routxxxx . '-crear']
	])->name($routxxxx . '.curso');
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

    Route::get('nnajsele', [
		'uses' => $controll . 'Controller@getNnajsele',
		'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.nnajsele');

    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@destroy',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.borrar');

    Route::get('certifica/{modeloxx}', [
        'uses' => $controll . 'Controller@showCert',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.certifica');
    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'Controller@activate',
        'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');

    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'Controller@activar',
        'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');
});

require_once('Administracion/web_modulo.php');
require_once('web_vmdiagnosticos.php');
