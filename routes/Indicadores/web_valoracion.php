<?php
Route::group(['prefix' => 'val'], function () {
	Route::get('', [
		'uses' => 'Indicadores\InValoracionController@index',
		'middleware' => ['permission:invaloracion-leer|invaloracion-crear|invaloracion-editar|invaloracion-borrar']
	])->name('inva');

	Route::get('lista/{objetoxx}', [
		'uses' => 'Indicadores\InValoracionController@lista',
		'middleware' => ['permission:invaloracion-leer']
	])->name('inva.valoracion.lista');
	Route::get('bases/{objetoxx}', [
		'uses' => 'Indicadores\InValoracionController@bases',
		'middleware' => ['permission:invaloracion-leer']
	])->name('inva.valoracion.bases');
	Route::group(['prefix' => '{valo}/valora'], function () {
		Route::get('', [
			'uses' => 'Indicadores\InValoracionController@create',
			'middleware' => ['permission:invaloracion-crear']
		])->name('inva.valoracion.nuevo');
		Route::post('crear', [
			'uses' => 'Indicadores\InValoracionController@store',
			'middleware' => ['permission:invaloracion-crear']
		])->name('inva.valoracion.crear');

		Route::get('editar/{objetoxx}', [
			'uses' => 'Indicadores\InValoracionController@edit',
			'middleware' => ['permission:invaloracion-editar']
		])->name('inva.valoracion.editar');
		Route::put('editar/{objetoxx}', [
			'uses' => 'Indicadores\InValoracionController@update',
			'middleware' => ['permission:invaloracion-editar']
		])->name('inva.valoracion.editar');
		Route::get('ver/{objetoxx}', [
			'uses' => 'Indicadores\InValoracionController@show',
			'middleware' => ['permission:invaloracion-leer']
		])->name('inva.valoracion.ver');

		Route::delete('ver/{objetoxx}', [
			'uses' => 'Indicadores\InValoracionController@destroy',
			'middleware' => ['permission:invaloracion-borrar']
		])->name('inva.valoracion.borrar');

		Route::get('valoracion', [
			'uses' => 'Indicadores\InValoracionController@valoracion',
		])->name('inva.valoracion.valoracion');
	});
});
