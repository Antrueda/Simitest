<?php
Route::group(['prefix' => '{activida}/responsable'], function () {
	Route::get('nuevo', [
	    'uses' => 'Acciones\Grupales\ResponsobleController@create',
	    'middleware' => ['permission:agactividad-crear']
	])->name('respo.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Acciones\Grupales\ResponsobleController@store',
	    'middleware' => ['permission:agactividad-crear']
	])->name('respo.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\ResponsobleController@edit',
	    'middleware' => ['permission:agactividad-editar']
	])->name('respo.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\ResponsobleController@update',
	    'middleware' => ['permission:agactividad-editar']
	])->name('respo.editar');	
});