<?php
Route::group(['prefix' => '{id}/alimentacion'], function () {
  Route::get('', [
    'uses' => 'Domicilio\CsdAlimentacionController@show',
    'middleware' => ['permission:csdalimentacion-crear|csdalimentacion-editar']
  ])->name('CSD.alimentacion');
  Route::post('', [
    'uses' => 'Domicilio\CsdAlimentacionController@store',
    'middleware' => ['permission:csdalimentacion-crear']
  ]);
  Route::put('{id1}', [
    'uses' => 'Domicilio\CsdAlimentacionController@update',
    'middleware' => ['permission:csdalimentacion-editar']
  ])->name('CSD.alimentacion.editar');
});
