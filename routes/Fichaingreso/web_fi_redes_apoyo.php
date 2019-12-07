<?php
Route::group(['prefix' => '{nnaj}/firedapoyo'], function () {

Route::get('', [
		'uses' => 'FichaIngreso\FiRedesApoyoController@index',
		'middleware' => ['permission:firedapoyo-leer|firedapoyo-crear|firedapoyo-editar|firedapoyo-borrar']
	])->name('fi.redapoyo');

	
});
