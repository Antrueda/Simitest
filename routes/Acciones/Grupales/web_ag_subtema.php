<?php
Route::group(['prefix' => 'subtema'], function () {
	Route::get('', [
		'uses' => 'Acciones\Grupales\AgSubtemaController@talleres',
		'middleware' => ['permission:agsubtema-leer|agsubtema-crear|agsubtema-editar|agsubtema-borrar']
	])->name('agsubt.talleres');

	Route::group(['prefix' => '{agtaller}'], function () {

		Route::get('', [
			'uses' => 'Acciones\Grupales\AgSubtemaController@index',
			'middleware' => ['permission:agsubtema-leer|agsubtema-crear|agsubtema-editar|agsubtema-borrar']
		])->name('agsubt');

		Route::get('nuevo', [
			'uses' => 'Acciones\Grupales\AgSubtemaController@create',
			'middleware' => ['permission:agsubtema-crear']
		])->name('agsubt.nuevo');
		Route::post('nuevo', [
			'uses' => 'Acciones\Grupales\AgSubtemaController@store',
			'middleware' => ['permission:agsubtema-crear']
		])->name('agsubt.crear');

		Route::get('editar/{objetoxx}', [
			'uses' => 'Acciones\Grupales\AgSubtemaController@edit',
			'middleware' => ['permission:agsubtema-editar']
		])->name('agsubt.editar');
		Route::put('editar/{objetoxx}', [
			'uses' => 'Acciones\Grupales\AgSubtemaController@update',
			'middleware' => ['permission:agsubtema-editar']
		])->name('agsubt.editar');
		Route::get('ver/{objetoxx}', [
			'uses' => 'Acciones\Grupales\AgSubtemaController@show',
			'middleware' => ['permission:agsubtema-leer']
		])->name('agsubt.ver');
		Route::delete('ver/{objetoxx}', [
			'uses' => 'Acciones\Grupales\AgSubtemaController@destroy',
			'middleware' => ['permission:agsubtema-borrar']
		])->name('agsubt.borrar');
	});
});
