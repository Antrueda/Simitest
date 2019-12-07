<?php
Route::group(['prefix' => 'inindividual'], function () {
    Route::get('', [
	    'uses' => 'Indicadores\InIndividualController@index',
	    'middleware' => ['permission:inindividual-leer|inindividual-crear|inindividual-editar|inindividual-borrar']
	])->name('ind');
	
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InIndividualController@show',
	    'middleware' => ['permission:inindividual-leer']
	])->name('ind.individual.ver');
	Route::get('diag/{objetoxx}', [
	    'uses' => 'Indicadores\InIndividualController@diagnostico',
	    'middleware' => ['permission:inindividual-leer']
	])->name('ind.individual.diag');
	Route::get('afir/{objetoxx}', [
	    'uses' => 'Indicadores\InIndividualController@afirmante',
	    'middleware' => ['permission:inindividual-leer']
	])->name('ind.individual.afir');

	Route::get('inic/{objetoxx}', [
	    'uses' => 'Indicadores\InIndividualController@inicial',
	    'middleware' => ['permission:inindividual-leer']
	])->name('ind.individual.inic');

Route::get('gest/{objetoxx}', [
	    'uses' => 'Indicadores\InIndividualController@gestion',
	    'middleware' => ['permission:inindividual-leer']
	])->name('ind.individual.gest');

	Route::get('segu/{objetoxx}', [
	    'uses' => 'Indicadores\InIndividualController@seguimiento',
	    'middleware' => ['permission:inindividual-leer']
	])->name('ind.individual.segu');
	Route::get('evol/{objetoxx}', [
	    'uses' => 'Indicadores\InIndividualController@evolucion',
	    'middleware' => ['permission:inindividual-leer']
	])->name('ind.individual.evol');
});