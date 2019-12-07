<?php
Route::group(['prefix' => '{id}/basico'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiBasicoController@show',
		'middleware' => ['permission:vsidatobasico-crear|vsidatobasico-editar']
	])->name('VSI.basico');
	Route::post('', [
		'uses' => 'Sicosocial\VsiBasicoController@store',
		'middleware' => ['permission:vsidatobasico-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiBasicoController@update',
		'middleware' => ['permission:vsidatobasico-editar']
	])->name('VSI.basico.editar');
	Route::post('razon', [
		'uses' => 'Sicosocial\VsiBasicoController@storeRazon',
		'middleware' => ['permission:vsidatobasico-crear']
	])->name('VSI.basico.razon');
	Route::delete('razon/{id1}', [
		'uses' => 'Sicosocial\VsiBasicoController@destroyRazon',
		'middleware' => ['permission:vsidatobasico-borrar']
	])->name('VSI.basico.razon.borrar');
});