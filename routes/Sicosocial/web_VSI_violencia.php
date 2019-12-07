<?php
Route::group(['prefix' => '{id}/violencia'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiViolenciaController@show',
		'middleware' => ['permission:vsiviolencia-crear|vsiviolencia-editar']
	])->name('VSI.violencia');
	Route::post('', [
		'uses' => 'Sicosocial\VsiViolenciaController@store',
		'middleware' => ['permission:vsiviolencia-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiViolenciaController@update',
		'middleware' => ['permission:vsiviolencia-editar']
	])->name('VSI.violencia.editar');
});