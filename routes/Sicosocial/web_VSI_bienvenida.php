<?php
Route::group(['prefix' => '{id}/bienvenida'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiBienvenidaController@show',
		'middleware' => ['permission:vsibienvenida-crear|vsibienvenida-editar']
	])->name('VSI.bienvenida');
	Route::post('', [
		'uses' => 'Sicosocial\VsiBienvenidaController@store',
		'middleware' => ['permission:vsibienvenida-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiBienvenidaController@update',
		'middleware' => ['permission:vsibienvenida-editar']
	])->name('VSI.bienvenida.editar');
});