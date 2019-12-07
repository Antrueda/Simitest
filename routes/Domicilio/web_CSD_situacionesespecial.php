<?php
Route::group(['prefix' => '{id}/situacionespecial'], function (){
	Route::get('', [
		'uses' => 'Domicilio\CsdSituacionEspecialController@show',
		'middleware' => ['permission:csdsituacionespecial-crear|csdsituacionespecial-editar']
	])->name('CSD.situacionespecial');
	Route::post('', [
		'uses' => 'Domicilio\CsdSituacionEspecialController@store',
		'middleware' => ['permission:csdsituacionespecial-crear']
	]);
});