<?php
Route::group(['prefix' => '{id}/conclusiones'], function () {
  Route::get('', [
    'uses' => 'Domicilio\CsdConclusionesController@show',
    'middleware' => ['permission:csdconclusiones-crear|csdconclusiones-editar']
  ])->name('CSD.conclusiones');
  Route::post('', [
    'uses' => 'Domicilio\CsdConclusionesController@store',
    'middleware' => ['permission:csdconclusiones-crear']
  ]);
  Route::put('{id1}', [
    'uses' => 'Domicilio\CsdConclusionesController@update',
    'middleware' => ['permission:csdconclusiones-editar']
  ])->name('CSD.conclusiones.editar');
});
