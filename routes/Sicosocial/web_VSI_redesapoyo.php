<?php
Route::group(['prefix' => '{id}/redesapoyo'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiRedesApoyoController@show',
		'middleware' => ['permission:vsiredesapoyo-crear|vsiredesapoyo-editar']
	])->name('VSI.redesapoyo');
	Route::post('', [
		'uses' => 'Sicosocial\VsiRedesApoyoController@store',
		'middleware' => ['permission:vsiredesapoyo-crear']
	]);
	Route::post('pasado', [
		'uses' => 'Sicosocial\VsiRedesApoyoController@storePasado',
		'middleware' => ['permission:vsiredesapoyo-crear']
	])->name('VSI.redesapoyo.pasado');
	Route::post('actual', [
		'uses' => 'Sicosocial\VsiRedesApoyoController@storeActual',
		'middleware' => ['permission:vsiredesapoyo-crear']
	])->name('VSI.redesapoyo.actual');
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiRedesApoyoController@update',
		'middleware' => ['permission:vsiredesapoyo-editar']
	])->name('VSI.redesapoyo.editar');
	Route::delete('pasado/{id1}', [
		'uses' => 'Sicosocial\VsiRedesApoyoController@destroyPasado',
		'middleware' => ['permission:vsiredesapoyo-borrar']
	])->name('VSI.redesapoyo.pasado.borrar');
	Route::delete('actual/{id1}', [
		'uses' => 'Sicosocial\VsiRedesApoyoController@destroyActual',
		'middleware' => ['permission:vsiredesapoyo-borrar']
	])->name('VSI.redesapoyo.actual.borrar');
});