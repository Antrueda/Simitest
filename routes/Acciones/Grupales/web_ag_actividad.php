<?php
Route::group(['prefix' => 'agactividad'], function () {
    Route::get('', [
	    'uses' => 'Acciones\Grupales\AgActividadController@index',
	    'middleware' => ['permission:agactividad-leer|agactividad-crear|agactividad-editar|agactividad-borrar']
	])->name('ag.acti');
	Route::get('nuevo', [
	    'uses' => 'Acciones\Grupales\AgActividadController@create',
	    'middleware' => ['permission:agactividad-crear']
	])->name('ag.acti.actividad.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Acciones\Grupales\AgActividadController@store',
	    'middleware' => ['permission:agactividad-crear']
	])->name('ag.acti.actividad.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgActividadController@edit',
	    'middleware' => ['permission:agactividad-editar']
	])->name('ag.acti.actividad.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgActividadController@update',
	    'middleware' => ['permission:agactividad-editar']
	])->name('ag.acti.actividad.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgActividadController@show',
	    'middleware' => ['permission:agactividad-leer']
	])->name('ag.acti.actividad.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgActividadController@destroy',
	    'middleware' => ['permission:agactividad-borrar']
	])->name('ag.acti.actividad.borrar');
	
});