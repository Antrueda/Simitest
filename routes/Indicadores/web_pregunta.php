<?php
Route::group(['prefix' => 'pregunta'], function () {
    Route::get('', [
	    'uses' => 'Indicadores\InPreguntaController@index',
	    'middleware' => ['permission:inpreguntas-leer|inpreguntas-crear|inpreguntas-editar|inpreguntas-borrar']
	])->name('pr');
	Route::get('nuevo', [
	    'uses' => 'Indicadores\InPreguntaController@create',
	    'middleware' => ['permission:inpreguntas-crear']
	])->name('pr.preguntas.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Indicadores\InPreguntaController@store',
	    'middleware' => ['permission:inpreguntas-crear']
	])->name('pr.preguntas.crear');
	Route::get('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InPreguntaController@edit',
	    'middleware' => ['permission:inpreguntas-editar']
	])->name('pr.preguntas.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InPreguntaController@update',
	    'middleware' => ['permission:inpreguntas-editar']
	])->name('pr.preguntas.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InPreguntaController@show',
	    'middleware' => ['permission:inpreguntas-leer']
	])->name('pr.preguntas.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InPreguntaController@destroy',
	    'middleware' => ['permission:inpreguntas-borrar']
	])->name('pr.preguntas.borrar');
	
});