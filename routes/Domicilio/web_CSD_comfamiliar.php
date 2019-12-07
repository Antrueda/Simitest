<?php
Route::group(['prefix' => '{id}/comfamiliar'], function () {
  Route::get('', [
    'uses' => 'Domicilio\CsdComFamiliarController@show',
    'middleware' => ['permission:csdcomfamiliar-crear|csdcomfamiliar-editar']
  ])->name('CSD.comfamiliar');
  Route::post('', [
    'uses' => 'Domicilio\CsdComFamiliarController@store',
    'middleware' => ['permission:csdcomfamiliar-crear']
  ]);
  Route::put('{id1}', [
    'uses' => 'Domicilio\CsdComFamiliarController@update',
    'middleware' => ['permission:csdcomfamiliar-editar']
  ])->name('CSD.comfamiliar.editar');
  Route::delete('familiar/{id1}', [
		'uses' => 'Domicilio\CsdComFamiliarController@destroyFamiliar',
		'middleware' => ['permission:csdcomfamiliar-borrar']
  ])->name('CSD.comfamiliar.familiar.borrar');
  Route::post('observaciones', [
		'uses' => 'Domicilio\CsdComFamiliarController@storeObservaciones',
		'middleware' => ['permission:csdcomfamiliar-crear']
  ])->name('CSD.comfamiliar.observaciones');
  Route::put('{id1}', [
    'uses' => 'Domicilio\CsdComFamiliarController@updateObservaciones',
    'middleware' => ['permission:csdcomfamiliar-editar']
  ])->name('CSD.comfamiliar.observaciones.editar');
});
