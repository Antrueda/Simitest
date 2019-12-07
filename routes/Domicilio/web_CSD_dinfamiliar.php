
<?php
Route::group(['prefix' => '{id}/dinfamiliar'], function () {
	Route::get('', [
		'uses' => 'Domicilio\CsdDinFamiliarController@show',
		'middleware' => ['permission:csddinfamiliar-crear|csddinfamiliar-editar']
	])->name('CSD.dinfamiliar');
	Route::post('', [
		'uses' => 'Domicilio\CsdDinFamiliarController@store',
		'middleware' => ['permission:csddinfamiliar-crear']
	]);
	Route::post('madre', [
		'uses' => 'Domicilio\CsdDinFamiliarController@storeMadre',
		'middleware' => ['permission:csddinfamiliar-crear']
	])->name('CSD.dinfamiliar.madre');
	Route::delete('madre/{id1}', [
		'uses' => 'Domicilio\CsdDinFamiliarController@destroyMadre',
		'middleware' => ['permission:csddinfamiliar-borrar']
	])->name('CSD.dinfamiliar.madre.borrar');
	Route::post('padre', [
		'uses' => 'Domicilio\CsdDinFamiliarController@storePadre',
		'middleware' => ['permission:csddinfamiliar-crear']
	])->name('CSD.dinfamiliar.padre');
	Route::delete('padre/{id1}', [
		'uses' => 'Domicilio\CsdDinFamiliarController@destroyPadre',
		'middleware' => ['permission:csddinfamiliar-borrar']
	])->name('CSD.dinfamiliar.padre.borrar');
	Route::put('{id1}', [
		'uses' => 'Domicilio\CsdDinFamiliarController@update',
		'middleware' => ['permission:csddinfamiliar-editar']
	])->name('CSD.dinfamiliar.editar');
	Route::post('genograma', [
		'uses' => 'Domicilio\CsdDinFamiliarController@storeGenograma',
		'middleware' => ['permission:csddinfamiliar-crear']
	])->name('CSD.dinfamiliar.genograma');
});