<?php
Route::group(['prefix' => '{id}/antecedente'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiAntecedenteController@show',
		'middleware' => ['permission:vsiantecedente-crear|vsiantecedente-editar']
	])->name('VSI.antecedente');
	Route::post('', [
		'uses' => 'Sicosocial\VsiAntecedenteController@store',
		'middleware' => ['permission:vsiantecedente-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiAntecedenteController@update',
		'middleware' => ['permission:vsiantecedente-editar']
	])->name('VSI.antecedente.editar');
});