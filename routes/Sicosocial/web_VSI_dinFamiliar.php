<?php
Route::group(['prefix' => '{id}/dinfamiliar'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiDinamicaFamiliarController@show',
		'middleware' => ['permission:vsidinfamiliar-crear|vsidinfamiliar-editar']
	])->name('VSI.dinfamiliar');
	Route::post('', [
		'uses' => 'Sicosocial\VsiDinamicaFamiliarController@store',
		'middleware' => ['permission:vsidinfamiliar-crear']
	]);
	Route::post('madre', [
		'uses' => 'Sicosocial\VsiDinamicaFamiliarController@storeMadre',
		'middleware' => ['permission:vsidinfamiliar-crear']
	])->name('VSI.dinfamiliar.madre');
	Route::post('padre', [
		'uses' => 'Sicosocial\VsiDinamicaFamiliarController@storePadre',
		'middleware' => ['permission:vsidinfamiliar-crear']
	])->name('VSI.dinfamiliar.padre');
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiDinamicaFamiliarController@update',
		'middleware' => ['permission:vsidinfamiliar-editar']
	])->name('VSI.dinfamiliar.editar');
	Route::delete('madre/{id1}', [
		'uses' => 'Sicosocial\VsiDinamicaFamiliarController@destroyMadre',
		'middleware' => ['permission:vsidinfamiliar-borrar']
	])->name('VSI.dinfamiliar.madre.borrar');
	Route::delete('padre/{id1}', [
		'uses' => 'Sicosocial\VsiDinamicaFamiliarController@destroyPadre',
		'middleware' => ['permission:vsidinfamiliar-borrar']
	])->name('VSI.dinfamiliar.padre.borrar');
	Route::post('genograma', [
		'uses' => 'Sicosocial\VsiDinamicaFamiliarController@storeGenograma',
		'middleware' => ['permission:vsidinfamiliar-crear']
	])->name('VSI.dinfamiliar.genograma');
});