<?php
Route::group(['prefix' => '{id}/situacionespecial'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiSituacionEspecialController@show',
		'middleware' => ['permission:vsisituacionespecial-crear|vsisituacionespecial-editar']
	])->name('VSI.situacionespecial');
	Route::post('', [
		'uses' => 'Sicosocial\VsiSituacionEspecialController@store',
		'middleware' => ['permission:vsisituacionespecial-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiSituacionEspecialController@update',
		'middleware' => ['permission:vsisituacionespecial-editar']
	])->name('VSI.situacionespecial.editar');
});