<?php
Route::group(['prefix' => 'agdependencia'], function () {
    Route::get('', [
	    'uses' => 'Acciones\Grupales\AgDependenciaController@index',
	    'middleware' => ['permission:agdependencia-leer|agdependencia-crear|agdependencia-editar|agdependencia-borrar']
	])->name('ag.depe');
	Route::get('nuevo', [
	    'uses' => 'Acciones\Grupales\AgDependenciaController@create',
	    'middleware' => ['permission:agdependencia-crear']
	])->name('ag.depe.dependencia.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Acciones\Grupales\AgDependenciaController@store',
	    'middleware' => ['permission:agdependencia-crear']
	])->name('ag.depe.dependencia.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgDependenciaController@edit',
	    'middleware' => ['permission:agdependencia-editar']
	])->name('ag.depe.dependencia.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgDependenciaController@update',
	    'middleware' => ['permission:agdependencia-editar']
	])->name('ag.depe.dependencia.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgDependenciaController@show',
	    'middleware' => ['permission:agdependencia-leer']
	])->name('ag.depe.dependencia.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgDependenciaController@destroy',
	    'middleware' => ['permission:agdependencia-borrar']
	])->name('ag.depe.dependencia.borrar');
});