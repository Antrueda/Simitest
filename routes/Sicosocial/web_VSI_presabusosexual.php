<?php
Route::group(['prefix' => '{id}/presabusosexual'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiPresAbusoSexualController@show',
		'middleware' => ['permission:vsipresabusosexual-crear|vsipresabusosexual-editar']
	])->name('VSI.presabusosexual');
	Route::post('', [
		'uses' => 'Sicosocial\VsiPresAbusoSexualController@store',
		'middleware' => ['permission:vsipresabusosexual-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiPresAbusoSexualController@update',
		'middleware' => ['permission:vsipresabusosexual-editar']
	])->name('VSI.presabusosexual.editar');
});