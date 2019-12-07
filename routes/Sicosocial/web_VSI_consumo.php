<?php
Route::group(['prefix' => '{id}/consumo'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiConsumoController@show',
		'middleware' => ['permission:vsiconsumo-crear|vsiconsumo-editar']
	])->name('VSI.consumo');
	Route::post('', [
		'uses' => 'Sicosocial\VsiConsumoController@store',
		'middleware' => ['permission:vsiconsumo-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiConsumoController@update',
		'middleware' => ['permission:vsiconsumo-editar']
	])->name('VSI.consumo.editar');
});