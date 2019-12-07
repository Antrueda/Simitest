<?php
Route::group(['prefix' => '{id}/redesapoyo'], function () {
  Route::get('', [
    'uses' => 'Domicilio\CsdRedesApoyoController@show',
    'middleware' => ['permission:csdredesapoyo-crear|csdredesapoyo-editar']
  ])->name('CSD.redesapoyo');
  Route::post('pasado', [
		'uses' => 'Domicilio\CsdRedesApoyoController@storePasado',
		'middleware' => ['permission:csdredesapoyo-crear']
  ])->name('CSD.redesapoyo.pasado');
  Route::delete('pasado/{id1}', [
		'uses' => 'Domicilio\CsdRedesApoyoController@destroyPasado',
		'middleware' => ['permission:csdredesapoyo-borrar']
  ])->name('CSD.redesapoyo.pasado.borrar');
  Route::post('actual', [
		'uses' => 'Domicilio\CsdRedesApoyoController@storeActual',
		'middleware' => ['permission:csdredesapoyo-crear']
  ])->name('CSD.redesapoyo.actual');
  Route::delete('actual/{id1}', [
		'uses' => 'Domicilio\CsdRedesApoyoController@destroyActual',
		'middleware' => ['permission:csdredesapoyo-borrar']
  ])->name('CSD.redesapoyo.actual.borrar');

});
