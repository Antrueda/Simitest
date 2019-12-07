<?php
Route::group(['prefix' => '{id}/areaajuste'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiAreaAjusteController@show',
		'middleware' => ['permission:vsiareaajuste-crear|vsiareaajuste-editar']
	])->name('VSI.areaajuste');
	Route::post('', [
		'uses' => 'Sicosocial\VsiAreaAjusteController@store',
		'middleware' => ['permission:vsiareaajuste-crear']
	]);
});