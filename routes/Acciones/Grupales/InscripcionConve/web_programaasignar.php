<?php
$controll='Acciones\Grupales\InscripcionSena\Administracion\ProgramaAsignarController@';
$routxxxx='asignaprograma';
Route::group(['prefix' => 'Programaasig'], function () use($controll,$routxxxx){
	Route::get('', [
		'uses' => $controll.'index',
		'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
	])->name($routxxxx);
    Route::get('listaxxx', [
		'uses' => $controll.'getServiciosDependenciaGrado',
		'middleware' => ['permission:'.$routxxxx.'-leer']
    ])->name($routxxxx.'.listaxxx');
	Route::get('nuevo', [
		'uses' => $controll.'create',
		'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.nuevo');

	Route::post('crear', [
		'uses' => $controll.'store',
		'middleware' => ['permission:'.$routxxxx.'-crear']
    ])->name($routxxxx.'.crear');

    Route::get('editar/{modeloxx}', [
		'uses' => $controll.'edit',
		'middleware' => ['permission:'.$routxxxx.'-editar']
	])->name($routxxxx.'.editar');

	Route::put('editar/{modeloxx}', [
		'uses' => $controll.'update',
		'middleware' => ['permission:'.$routxxxx.'-editar']
	])->name($routxxxx.'.editar');

	Route::get('ver/{modeloxx}', [
		'uses' => $controll.'show',
		'middleware' => ['permission:'.$routxxxx.'-leer']
	])->name($routxxxx.'.ver');

	Route::get('borrar/{modeloxx}', [
	    'uses' => $controll.'inactivate',
	    'middleware' => ['permission:'.$routxxxx.'-borrar']
    ])->name($routxxxx.'.borrar');

    Route::put('borrar/{modeloxx}', [
		'uses' => $controll . 'destroy',
		'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.borrar');

    Route::get('activate/{modeloxx}', [
	    'uses' => $controll.'activate',
	    'middleware' => ['permission:'.$routxxxx.'-activarx']
    ])->name($routxxxx.'.activarx');

    Route::put('activate/{modeloxx}', [
		'uses' => $controll . 'activar',
		'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');


});

Route::group(['prefix' => 'resnnajsfos'], function () use ($controll, $routexxx) {
	Route::get('responsa', [
		'uses' => $controll . 'getResponsable',
		'middleware' => ['permission:' . $routexxx . '-borrar']
	])->name($routexxx . '.responsa');
});
