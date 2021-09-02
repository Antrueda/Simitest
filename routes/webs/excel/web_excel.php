<?php

// $controll = 'Administracion\Excel';
$controll = 'Administracion\Reportes\Excel\Excel';
$routexxx = 'excel';
Route::group(['prefix' => 'excel'], function () use ($controll, $routexxx) {

	Route::get('excel', [
		'uses' => $controll . 'Controller@getExcel',
		'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx);
    Route::get('exportar', [
		'uses' => $controll . 'Controller@setExcel',
		'middleware' => ['permission:' . $routexxx . '-crear']
	])->name($routexxx . '.exportar');

    Route::post('getDataFields', [
		'uses' => $controll . 'Controller@getDataFields',
		'middleware' => ['permission:' . $routexxx . '-crear']
	])->name($routexxx . '.getDataFields');


    Route::get('viewrepcamre', [
        'uses' => $controll . 'Controller@viewRepCamRel',
		'middleware' => ['permission:' . $routexxx . '-crear']
        ])->name($routexxx . '.vrepcamr');

    Route::post('getrepcamre', [
        'uses' => $controll . 'Controller@getRepCamRel',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.grepcamr');

    Route::get('tablcamp', [
		'uses' => $controll . 'Controller@getTablaCamposET',
		'middleware' => ['permission:' . $routexxx . '-leer']
	])->name($routexxx . '.tablcamp');

	Route::get('nuevo', [
		'uses' => $controll . 'Controller@create',
		'middleware' => ['permission:' . $routexxx . '-crear']
	])->name($routexxx . '.nuevo');
	Route::post('crear', [
		'uses' => $controll . 'Controller@store',
		'middleware' => ['permission:' . $routexxx . '-crear']
	])->name($routexxx . '.crear');
	Route::get('editar/{objetoxx}', [
		'uses' => $controll . 'Controller@edit',
		'middleware' => ['permission:' . $routexxx . '-editar']
	])->name($routexxx . '.editar');
	Route::put('editar/{objetoxx}', [
		'uses' => $controll . 'Controller@update',
		'middleware' => ['permission:' . $routexxx . '-editar']
	])->name($routexxx . '.editar');
	Route::get('ver/{objetoxx}', [
		'uses' => $controll . 'Controller@show',
		'middleware' => ['permission:' . $routexxx . '-leer']
	])->name($routexxx . '.ver');

	Route::get('armarSeeder', [
		'uses' => $controll . 'Controller@armarSeeder',
		'middleware' => ['permission:' . $routexxx . '-leer']
	])->name($routexxx . '.armarSeeder');

	Route::delete('borrar/{objetoxx}', [
		'uses' => $controll . 'Controller@destroy',
		'middleware' => ['permission:' . $routexxx . '-borrar']
	])->name($routexxx . '.borrar');


	Route::get('usuarios', [
		'uses' => $controll . 'Controller@repousuarios',
		'middleware' => ['permission:' . $routexxx . '-leer']
	])->name($routexxx . '.usuarios');

	Route::get('nnajxxxx', [
		'uses' => $controll . 'Controller@nnajxxxx',
		'middleware' => ['permission:' . $routexxx . '-leer']
	])->name($routexxx . '.nnajxxxx');
	
	Route::get('traslado', [
		'uses' => $controll . 'Controller@traslado',
		'middleware' => ['permission:' . $routexxx . '-leer']
	])->name($routexxx . '.traslado');

	Route::post('metaxxxx', [
		'uses' => $controll . 'Controller@geacumuladometa',
		'middleware' => ['permission:' . $routexxx . '-leer']
	])->name($routexxx . '.metaxxxx');

	Route::get('viewrepmeta', [
        'uses' => $controll . 'Controller@viewmeta',
		'middleware' => ['permission:' . $routexxx . '-crear']
        ])->name($routexxx . '.viewrepmeta');

	// Route::get('trasladonnaj', [
	// 	'uses' => $controll . 'Controller@trasladonnaj',
	// 	'middleware' => ['permission:' . $routexxx . '-leer']
	// ])->name($routexxx . '.trasladonnaj');

	Route::get('viewreptras', [
        'uses' => $controll . 'Controller@viewRepTrasladoNNAJ',
		'middleware' => ['permission:' . $routexxx . '-crear']
        ])->name($routexxx . '.viewreptras');

    Route::post('getreptras', [
        'uses' => $controll . 'Controller@getRepTrasladoNNAJ',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.getreptras');

	Route::post('metaxxxx', [
		'uses' => $controll . 'Controller@geacumuladometa',
		'middleware' => ['permission:' . $routexxx . '-leer']
	])->name($routexxx . '.metaxxxx');

	Route::get('viewrepmeta', [
        'uses' => $controll . 'Controller@viewmeta',
		'middleware' => ['permission:' . $routexxx . '-crear']
        ])->name($routexxx . '.viewrepmeta');

});
// 