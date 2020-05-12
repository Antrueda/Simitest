<?php
Route::group(['prefix' => '{activida}/responsable'], function () {
	Route::get('nuevo', [
	    'uses' => 'Acciones\Grupales\AgResponsableController@create',
	    'middleware' => ['permission:agactividad-crear']
	])->name('respo.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Acciones\Grupales\AgResponsableController@store',
	    'middleware' => ['permission:agactividad-crear']
	])->name('respo.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgResponsableController@edit',
	    'middleware' => ['permission:agactividad-editar']
	])->name('respo.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgResponsableController@update',
	    'middleware' => ['permission:agactividad-editar']
	])->name('respo.editar');	

	Route::get('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgResponsableController@show',
	    'middleware' => ['permission:agrecurso-leer']
	])->name('respo.ver');
	Route::get('inctivar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgResponsableController@editInactivar',
	    'middleware' => ['permission:agactividad-editar']
	])->name('respo.inctivar');
	Route::put('inctivar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgResponsableController@updateInactivar',
	    'middleware' => ['permission:agactividad-editar']
	])->name('respo.inctivar');
});