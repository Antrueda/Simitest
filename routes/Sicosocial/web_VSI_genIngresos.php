<?php
Route::group(['prefix' => '{id}/genIngresos'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiGenIngresosController@show',
		'middleware' => ['permission:vsigeningresos-crear|vsigeningresos-editar']
	])->name('VSI.genIngresos');
	Route::post('', [
		'uses' => 'Sicosocial\VsiGenIngresosController@store',
		'middleware' => ['permission:vsigeningresos-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiGenIngresosController@update',
		'middleware' => ['permission:vsigeningresos-editar']
	])->name('VSI.genIngresos.editar');
});