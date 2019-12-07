<?php
Route::group(['prefix' => '{id}/residencia'], function () {
  Route::get('', [
    'uses' => 'Domicilio\CsdResidenciaController@show',
    'middleware' => ['permission:csdresidencia-crear|csdresidencia-editar']
  ])->name('CSD.residencia');
  Route::post('', [
    'uses' => 'Domicilio\CsdResidenciaController@store',
    'middleware' => ['permission:csdresidencia-crear']
  ]);
  Route::put('{id1}', [
    'uses' => 'Domicilio\CsdResidenciaController@update',
    'middleware' => ['permission:csdresidencia-editar']
  ])->name('CSD.residencia.editar');
});
