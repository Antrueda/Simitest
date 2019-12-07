<?php
Route::group(['prefix' => '{id}/relfamiliar'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiRelFamiliarController@show',
		'middleware' => ['permission:vsirelfamiliar-crear|vsirelfamiliar-editar']
	])->name('VSI.relfamiliar');
	Route::post('', [
		'uses' => 'Sicosocial\VsiRelFamiliarController@store',
		'middleware' => ['permission:vsirelfamiliar-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiRelFamiliarController@update',
		'middleware' => ['permission:vsirelfamiliar-editar']
	])->name('VSI.relfamiliar.editar');
});