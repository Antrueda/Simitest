<?php
Route::group(['prefix' => '{id}/estemocional'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiEstadoEmocionalController@show',
		'middleware' => ['permission:vsiestemocional-crear|vsiestemocional-editar']
	])->name('VSI.estemocional');
	Route::post('', [
		'uses' => 'Sicosocial\VsiEstadoEmocionalController@store',
		'middleware' => ['permission:vsiestemocional-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiEstadoEmocionalController@update',
		'middleware' => ['permission:vsiestemocional-editar']
	])->name('VSI.estemocional.editar');
});