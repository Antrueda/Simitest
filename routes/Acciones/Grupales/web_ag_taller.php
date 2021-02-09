<?php
Route::group(['prefix' => 'taller'], function () {
	Route::get('temas', [
		'uses' => 'Acciones\Grupales\AgTallerController@temas',
		'middleware' => ['permission:agtaller-leer|agtaller-crear|agtaller-editar|agtaller-borrar']
	])->name('agrtaller.temas');
	Route::get('motivos', [
		'uses' =>'Acciones\Grupales\AgTallerController@getMotivos',
		'middleware' => ['permission:agtaller-leer']
	])->name('agrtaller.motivosx');
	Route::group(['prefix' => '{agtemaid}'], function () {
		Route::get('', [
			'uses' => 'Acciones\Grupales\AgTallerController@index',
			'middleware' => ['permission:agtaller-leer|agtaller-crear|agtaller-editar|agtaller-borrar']
		])->name('agrtaller');
		Route::get('nuevo', [
			'uses' => 'Acciones\Grupales\AgTallerController@create',
			'middleware' => ['permission:agtaller-crear']
		])->name('agrtaller.nuevo');
		Route::post('nuevo', [
			'uses' => 'Acciones\Grupales\AgTallerController@store',
			'middleware' => ['permission:agtaller-crear']
		])->name('agrtaller.crear');

		Route::get('editar/{objetoxx}', [
			'uses' => 'Acciones\Grupales\AgTallerController@edit',
			'middleware' => ['permission:agtaller-editar']
		])->name('agrtaller.editar');
		Route::put('editar/{objetoxx}', [
			'uses' => 'Acciones\Grupales\AgTallerController@update',
			'middleware' => ['permission:agtaller-editar']
		])->name('agrtaller.editar');
		Route::get('ver/{objetoxx}', [
			'uses' => 'Acciones\Grupales\AgTallerController@show',
			'middleware' => ['permission:agtaller-leer']
		])->name('agrtaller.ver');
		Route::delete('ver/{objetoxx}', [
			'uses' => 'Acciones\Grupales\AgTallerController@destroy',
			'middleware' => ['permission:agtaller-borrar']
		])->name('agrtaller.borrar');

	});
});
