<?php
Route::group(['prefix' => '{id}/salud'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiSaludController@show',
		'middleware' => ['permission:vsisalud-crear|vsisalud-editar']
	])->name('VSI.salud');
	Route::post('', [
		'uses' => 'Sicosocial\VsiSaludController@store',
		'middleware' => ['permission:vsisalud-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiSaludController@update',
		'middleware' => ['permission:vsisalud-editar']
	])->name('VSI.salud.editar');
});