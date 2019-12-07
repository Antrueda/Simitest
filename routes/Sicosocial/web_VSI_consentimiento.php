<?php
Route::group(['prefix' => '{id}/consentimiento'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiConsentimientoController@show',
		'middleware' => ['permission:vsiconsentimiento-crear|vsiconsentimiento-editar']
	])->name('VSI.consentimiento');
	Route::post('', [
		'uses' => 'Sicosocial\VsiConsentimientoController@store',
		'middleware' => ['permission:vsiconsentimiento-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiConsentimientoController@update',
		'middleware' => ['permission:vsiconsentimiento-editar']
	])->name('VSI.consentimiento.editar');
});