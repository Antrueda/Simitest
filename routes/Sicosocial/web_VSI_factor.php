<?php
Route::group(['prefix' => '{id}/factor'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiFactorController@show',
		'middleware' => ['permission:vsifactor-crear|vsifactor-editar']
	])->name('VSI.factor');
	Route::post('protector', [
		'uses' => 'Sicosocial\VsiFactorController@storeProtector',
		'middleware' => ['permission:vsifactor-crear']
	])->name('VSI.factor.protector');
	Route::post('riesgo', [
		'uses' => 'Sicosocial\VsiFactorController@storeRiesgo',
		'middleware' => ['permission:vsifactor-crear']
	])->name('VSI.factor.riesgo');
	Route::delete('protector/{id1}', [
		'uses' => 'Sicosocial\VsiFactorController@destroyProtector',
		'middleware' => ['permission:vsifactor-borrar']
	])->name('VSI.factor.protector.borrar');
	Route::delete('riesgo/{id1}', [
		'uses' => 'Sicosocial\VsiFactorController@destroyRiesgo',
		'middleware' => ['permission:vsifactor-borrar']
	])->name('VSI.factor.riesgo.borrar');
});