<?php
Route::group(['prefix' => 'agrecurso'], function () {
    Route::get('', [
	    'uses' => 'Acciones\Grupales\AgRecursoController@index',
	    'middleware' => ['permission:agrecurso-leer|agrecurso-crear|agrecurso-editar|agrecurso-borrar']
	])->name('ag.recu');
	Route::get('nuevo', [
	    'uses' => 'Acciones\Grupales\AgRecursoController@create',
	    'middleware' => ['permission:agrecurso-crear']
	])->name('ag.recu.recurso.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Acciones\Grupales\AgRecursoController@store',
	    'middleware' => ['permission:agrecurso-crear']
	])->name('ag.recu.recurso.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgRecursoController@edit',
	    'middleware' => ['permission:agrecurso-editar']
	])->name('ag.recu.recurso.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgRecursoController@update',
	    'middleware' => ['permission:agrecurso-editar']
	])->name('ag.recu.recurso.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgRecursoController@show',
	    'middleware' => ['permission:agrecurso-leer']
	])->name('ag.recu.recurso.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgRecursoController@destroy',
	    'middleware' => ['permission:agrecurso-borrar']
	])->name('ag.recu.recurso.borrar');
});